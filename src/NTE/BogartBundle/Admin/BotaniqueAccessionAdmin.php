<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueAccession;
use NTE\BogartBundle\Entity\Verrou as Verrou;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class BotaniqueAccessionAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueAccession');
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames(), array('idFournisseur.filemakerNum', 'ipenIdPays.abreviation'));
    }

    public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->container = $container;
    }

    /**
     * Default Datagrid values
     *
     * @var array
     */
    protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'ASC',
        '_sort_by' => 'annee'
    );

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('idTaxon.nom', null, array('label' => 'Taxon'))
            ->add('annee')
            ->add('numero')
            ->add('idFournisseur.filemakerNum', null, array('label' => 'Numéro du fournisseur (FM)'))
            ->add('idFournisseur.nom', null, array('label' => 'Nom du Fournisseur'))
            ->add('idCollection1', null, array('label' => 'Secteur jardin 1'))
            ->add('idCollection2', null, array('label' => 'Secteur jardin 2'))
            ->add('idCollection3', null, array('label' => 'Secteur jardin 3'))
            ->add('location', null, array('label' => 'Station'))
            ->add('idPays', null, array('label' => 'Pays'))
        ;
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
                $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'accession', 'objet_id' => $id));

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

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idTaxon', null, array('label' => 'Taxon'))
            ->add('annee')
            ->add('numero')
            ->add('idCollection1', null, array('label' => 'Secteur jardin 1'))
            ->add('idFournisseur', null, array('label' => 'Titre de Fichier'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
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
            $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'accession', 'objet_id' => $id));

            foreach($verrous as $verrou) {
#                echo "<pre>";
#                echo var_dump($verrou);
#                echo "</pre>";
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
                $new_verrou->setObjet('accession');
                $new_verrou->setObjetId($id);
                $new_verrou->setEcheance($then);
                $new_verrou->setUtilisateur($user);
                $em->persist($new_verrou);
                $em->flush();
                // ***********************
            }

            $historique_propag = array('S' => 'S', 'P' => 'P', 'B' => 'B', 'O' => 'O', 'G' => 'G', );
            $sexe = array('mâle' => 'mâle', 'femelle' => 'femelle');
            $provenance = array('W' => 'W', 'CW' => 'CW');
            $annees = array('2005' => '2005', '2006' => '2006', '2007' => '2007', '2008' => '2008', '2009' => '2009',
                            '2010' => '2010', '2011' => '2011', '2012' => '2012', '2013' => '2013', '2014' => '2014', '2015' => '2015',
                            '2016' => '2016', '2017' => '2017', '2018' => '2018', '2019' => '2019', '2020' => '2020',
                            '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025',
                            '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030', );

            $formMapper
                ->with('Accession')
                ->add('idTaxon', 'sonata_type_model_list', array('label' => 'Taxon', 'required' => false))
                ->add('vieuxNom', null, array('read_only' => true))
                ->add('historique', 'choice', array('choices' => $historique_propag, 'empty_value' => '- - - - - -','required' => false, 'label' => 'Historique de la propagation'))
                ->add('annee')
                ->add('numero')
                ->add('idFournisseur', 'sonata_type_model_list', array('label' => 'Fournisseur', 'required' => false))
#                ->add('idFournisseur', null, array('label' => 'Fournisseur'))
                ->add('idCollection1', 'sonata_type_model_list', array('label' => 'Secteur jardin 1', 'required' => false))
                ->add('idCollection2', 'sonata_type_model_list', array('label' => 'Secteur jardin 2', 'required' => false))
                ->add('idCollection3', 'sonata_type_model_list', array('label' => 'Secteur jardin 3', 'required' => false))
                ->end()
                ->with('IPEN')
#                    ->add('idIpen', 'sonata_type_admin', array('label' => 'IPEN', 'required' => false, 'delete' => false))
                    ->add('ipenNom', null, array('label' => 'IPEN Acc.', 'read_only' => true, 'help' => 'Généré sur la base des informations suivantes : '))
                    ->add('ipenIdPays', null, array('label' => 'Pays'))
                    ->add('ipenCondition2', null, array('label' => 'Condition2'))
                    ->add('ipenCode', null, array('label' => 'Code'))
                    ->add('ipenNumero', null, array('label' => 'Numero'))
                ->end()
                ->with('Vieux IPEN', array('collapsed' => true))
                    ->add('vieuxIpen', null, array('read_only' => true))
                    ->add('vieuxIpenPays', null, array('read_only' => true))
                    ->add('vieuxIpenCondition', null, array('read_only' => true))
                    ->add('vieuxIpenCodeJardin', null, array('read_only' => true))
                    ->add('vieuxIpenNumero', null, array('read_only' => true))
                ->end()
    #            ->with('Divers')
                ->add('recolte', 'choice', array('choices' => $annees, 'empty_value' => '- - - - - -','required' => false, 'label' => 'Récolte graines'))
                ->add('isAnnee')
                ->add('idPays', 'sonata_type_model', array('label' => 'Pays', 'required' => false))
                ->add('location', null, array('label' => 'Station'))
                ->add('altitude')
                ->add('altitudeM')
                ->add('coordonnee')
                ->add('provenanceType', 'choice', array('choices' => $provenance, 'empty_value' => '- - - - - -','required' => false))
                ->add('provenance', null, array('read_only' => true))
                ->add('sexe', 'choice', array('choices' => $sexe, 'empty_value' => '- - - - - -','required' => false))
                ->add('reception', null, array('label' => 'Nom de Réception'))
                ->add('collecteur')
                ->add('fournisseurAnt')
                ->add('semis')
                ->add('repiquage')
                ->add('plantation')
                ->add('verification', null, array('label' => 'Déterminé par'))
                ->add('idBiblio', null, array('label' => 'Biblio Détermination'))
                ->end()
            ;
        }
    }

    /**

    * {@inheritdoc}

    */

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('idTaxon', null, array('label' => 'Taxon','required' => true))
            ->add('vieuxNom')
            ->add('historique')
            ->add('annee')
            ->add('numero')
            ->add('idFournisseur', null, array('label' => 'Fournisseur'))
            ->with('Endroits')
                ->add('idCollection1')
                ->add('idCollection2')
                ->add('idCollection3')
            ->end()
            ->with('IPEN')
#            ->add('idIpen.nom', null, array('label' => 'IPEN'))
                ->add('ipenNom', null, array('label' => 'IPEN Acc.'))
#            ->add('vieuxIpen')
#            ->add('ipenPays')
#            ->add('ipenCondition')
#            ->add('ipenCodeJardin')
#            ->add('ipenNumero')
            ->end()
            ->with('Divers')
            ->add('recolte')
            ->add('isAnnee')
            ->add('idPays', null, array('label' => 'Pays'))
            ->add('location', null, array('label' => 'Station'))
            ->add('altitude')
            ->add('altitudeM')
            ->add('coordonnee')
            ->add('provenanceType')
            ->add('provenance')
            ->add('sexe')
            ->add('reception', null, array('label' => 'Nom de Reception'))
            ->add('collecteur')
            ->add('fournisseurAnt')
            ->add('semis')
            ->add('repiquage')
            ->add('plantation')
            ->add('verification', null, array('label' => 'Détermination'))
            ->add('idBiblio', null, array('label' => 'Bibliothèque'))
            ->end()
        ;
    }
}
