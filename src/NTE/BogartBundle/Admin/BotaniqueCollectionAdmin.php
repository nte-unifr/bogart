<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueCollection;
use NTE\BogartBundle\Entity\Verrou as Verrou;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class BotaniqueCollectionAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueCollection');
#        return array_merge($accession->getFieldNames(), $accession->getAssociationNames());
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames(), array('idTaxon.famille1', 'idTaxon.origines', 'idTaxon.origine1', 'idTaxon.origine2', 'idTaxon.origine3', 'idTaxon.origine4', 'idTaxon.origine5', 'idTaxon.origineAutre', 'idTaxon.croissance_noms'));
    }

    public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->container = $container;
    }

    public function getTemplate($name)
    {
        switch ($name) {
            case 'edit':

                $id = $this->request->get('id');
                $user = (string)$this->container->get('security.context')->getToken()->getUser()->getUsername();
                $now = new \DateTime('now');
                $then = new \DateTime('+600 seconds');

                // définit et récupère des attributs de session
                $session = $this->request->getSession();
                $em = $this->container->get('doctrine.orm.entity_manager');
                $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'collection', 'objet_id' => $id));

                $lock = false;
                foreach($verrous as $verrou) {
                    if (($verrou->getEcheance() > $now) && ($verrou->getUtilisateur() != $user)) {
#                        $session->getFlashBag()->add('sonata_flash_error', 'ATTENTION!!! Cet enregistrement a été édité par une autre personne il y a moins de 10 minutes!');
                        return 'NTEBogartBundle::lock.html.twig';
                        break;
                    }
                    // nettoyage des vieux verrous
                    if(($verrou->getEcheance() < $now)){
                        $em->remove($verrou);
                    }
                }
            default:
                return parent::getTemplate($name);
                break;
        }
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('idTaxon.nom', null, array('label' => 'Taxon'))
#            ->add('vieuxNom')
            ->add('secteur.nom')
            ->add('secteur')
            ->add('annee')
            ->add('numero')
            ->add('inventaire')
            ->add('inventaireControle')
            ->add('plantation')
            ->add('idTaxon.famille1', null, array('label' => 'Famille1 (du Taxon)'))
            ->add('etiquetteControle')
            ->add('etiquetteType')
            ->add('observations')
            ->add('commandeGraine')
            ->add('indexSeminum')
            ->add('controle')
            ->add('commandeEtiquettes')
            ->add('etiquetteSachet')
            ->add('recolteJardin1')
            ->add('recolteJardin2')
            ->add('periodeDeSemis')
        ;
    }


    /**
     * Default Datagrid values
     *
     * @var array
     */
    protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'ASC',
        '_sort_by' => 'idTaxon.nom'
    );
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('idTaxon', null, array('label' => 'Taxon'))
            ->addIdentifier('annee')
            ->addIdentifier('numero')
            ->addIdentifier('inventaire')
            ->addIdentifier('typeDeProvenance')
            ->addIdentifier('provenance')
            ->addIdentifier('fournisseur')
            ->add('secteur')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
           ))
        ;
    }

    /**
     * Create and Edit
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $id = $this->request->get('id');
        $lock = false;

        // on test si on est pas dans un 'create'
        if ($id) {
            $user = (string)$this->container->get('security.context')->getToken()->getUser()->getUsername();
            $now = new \DateTime('now');
            $then = new \DateTime('+600 seconds');

            // définit et récupère des attributs de session
            $session = $this->request->getSession();
            $em = $this->container->get('doctrine.orm.entity_manager');
            $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'collection', 'objet_id' => $id));

            foreach($verrous as $verrou) {
    #            echo "<pre>";
    #            echo var_dump($verrou);
    #            echo "</pre>";
                if (($verrou->getEcheance() > $now) && ($verrou->getUtilisateur() != $user)) {
                    $lock = true;
                }
                // nettoyage des vieux verrous
                if(($verrou->getEcheance() < $now)){
                    $em->remove($verrou);
                }
            }
        }

#        if( (count($session_data) >= 2) && ($session_data[1] !== $user) && ($session_data[0] > $now->format('Y-m-d H:i:s')) ){
        if( $lock ){

            $session->getFlashBag()->add('sonata_flash_error', 'ATTENTION!!! Cet enregistrement a été édité par une autre personne il y a moins de 10 minutes!');

        } else { // jusque là test pour verrou/mutex

            if ($id) {
                // *********************** nouveau Verrou dans la BDD
                $new_verrou = new Verrou;
                $new_verrou->setObjet('collection');
                $new_verrou->setObjetId($id);
                $new_verrou->setEcheance($then);
                $new_verrou->setUtilisateur($user);
                $em->persist($new_verrou);
                $em->flush();
                // ***********************
            }


            $medicinal = array('1' => '1', '2' => '2', '3.1' => '3.1', '3.2' => '3.2', '4.1' => '4.1', '4.2' => '4.2', '5' => '5', '6' => '6', '7' => '7', '8.1' => '8.1', '8.2' => '8.2', '8.3' => '8.3', '9' => '9', '10' => '10', );
            $geophyte_region = array('S-Europe' => 'S-Europe', 'N- & C- Europe' => 'N- & C- Europe', 'America' => 'America', 'Africa' => 'Africa', 'Asia' => 'Asia', );
            $annees = array('2005' => '2005', '2006' => '2006', '2007' => '2007', '2008' => '2008', '2009' => '2009',
                            '2010' => '2010', '2011' => '2011', '2012' => '2012', '2013' => '2013', '2014' => '2014', '2015' => '2015',
                            '2016' => '2016', '2017' => '2017', '2018' => '2018', '2019' => '2019', '2020' => '2020',
                            '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025',
                            '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030', );
            $intervention = array('à dét.' => 'à dét.', 'à arr.' => 'à arr.', 'à rempl.' => 'à rempl.', 'à planter' => 'à planter', 'à semer' => 'à semer', );
            $provenance = array('W' => 'W', 'CW' => 'CW');
            $ouinon = array('oui' => 'oui', 'non' => 'non');

            $formMapper
                ->add('idTaxon', 'sonata_type_model_list', array('label' => 'Taxon'))
                ->add('vieuxNom', null, array('read_only' => true))
                ->add('secteur')
                ->add('annee')
                ->add('numero')
                ->add('vieuxProvenance', null, array('read_only' => true))

                ->add('inventaire', 'choice', array('choices' => $ouinon, 'empty_value' => '- - - - - -','required' => false))
                ->add('inventaireControle')
                ->add('plantation')
                ->add('typeDeProvenance', null, array('read_only' => true))
                ->add('provenance', null, array('read_only' => true, 'attr' => array('class' => 'span10')))
                ->add('fournisseur', null, array('read_only' => true))
                ->add('ipen', null, array('read_only' => true))
                ->add('determination', null, array('read_only' => true))
                ->add('etiquetteControle', 'choice', array('choices' => $ouinon, 'empty_value' => '- - - - - -','required' => false))
                ->add('etiquetteType')
                ->add('observations')
                ->add('controle', null, array('label' => 'Nom du Contrôleur'))
                ->add('commandeEtiquettes')
#                ->add('intervention', 'choice', array('choices' => $annees, 'empty_value' => '- - - - - -','required' => false, 'label' => 'Interventions terrain'))
                ->add('intervention', null, array('label' => 'Interventions terrain'))
                ->add('graineCulture', 'choice', array('choices' => $annees, 'empty_value' => '- - - - - -','required' => false, 'label' => 'Graineterie'))
                ->add('commandeGraine')
                ->add('etiquetteSachet')
                ->add('indexSeminum', 'choice', array('choices' => $ouinon, 'empty_value' => '- - - - - -','required' => false))
                ->add('indexSeminumNum')
                ->add('isProvenance', 'choice', array('choices' => $provenance, 'empty_value' => '- - - - - -','required' => false))
                ->add('multiplication')
                ->add('hivernage')
                ->add('protectionHiv1')
                ->add('protectionHiv2')
                ->add('roseraie')
                ->add('idPlanteAqua')
                ->add('medicinal', 'choice', array('choices' => $medicinal, 'empty_value' => '- - - - - -','required' => false))
                ->add('geographyteRegion', 'choice', array('choices' => $geophyte_region, 'empty_value' => '- - - - - -','required' => false))
                ->add('geographyteId')

                ->add('taxonFamille1', null, array('read_only' => true))
                ->add('taxonControle', null, array('read_only' => true))
                ->add('taxonBiblio', null, array('read_only' => true))

                ->add('recolteNature1')
                ->add('recolteNature2')
                ->add('recolteNature3')
                ->add('recolteJardin1')
                ->add('recolteJardin2')
                ->add('isRecolte')
                ->add('periodeDeSemis')
                ->end()
            ;
        }
    }
}
