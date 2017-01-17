<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueTaxon;
use NTE\BogartBundle\Entity\Verrou as Verrou;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class BotaniqueTaxonAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $taxon = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueTaxon');
        return array_merge($taxon->getFieldNames(), $taxon->getAssociationNames(), [$this->getTranslator()->trans('Categories') => 'categoriesAsString', $this->getTranslator()->trans('Croissances') => 'croissancesAsString']);
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
                $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'taxon', 'objet_id' => $id));

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
            ->add('nom')
            ->add('famille1')
            ->add('genre')
            ->add('espece')
            ->add('sspNom')
            ->add('vieuxSynonyme')
            ->add('controle', null, array('label' => 'Contrôle Nomenclature'))
            ->add('public')
            ->add('marchePrintemps')
            ->add('origines')
            ->add('categories')
            ->add('hivernage')
            ->add('protectionHiv1')
            ->add('protectionHiv2')
#            ->add('semis', null, array('label' => 'Période de Semis'))
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
        '_sort_by' => 'nom'
    );

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('vieux_nom')
            ->add('famille1.nom', null, array('label' => 'Famille 1'))
#            ->add('croissance')
            ->add('croissance', null, array('template' => 'NTEBogartBundle:Taxon:croissance.list.html.twig'))
            ->add('nomFr')
            ->add('nomDe')
#            ->add('famille2')
#            ->add('genre')
#            ->add('espece')
#            ->add('espece_auteur')
            ->add('controle', null, array('label' => 'Contrôle Nomenclature'))
            ->add('public')
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
            $verrous = $em->getRepository('NTEBogartBundle:Verrou')->findBy(array('objet' => 'taxon', 'objet_id' => $id));

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
            $taxon = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->find($id);
        }

#        if( (count($session_data) >= 2) && ($session_data[1] !== $user) && ($session_data[0] > $now->format('Y-m-d H:i:s')) ){
        if( $lock ){

            $session->getFlashBag()->add('sonata_flash_error', 'ATTENTION!!! Cet enregistrement a été édité par une autre personne il y a moins de 10 minutes!');

        } else { // jusque là test pour verrou/mutex

            $noms_onglet = "";
            if ($id) {
                // *********************** nouveau Verrou dans la BDD
                $new_verrou = new Verrou;
                $new_verrou->setObjet('taxon');
                $new_verrou->setObjetId($id);
                $new_verrou->setEcheance($then);
                $new_verrou->setUtilisateur($user);
                $em->persist($new_verrou);
                $em->flush();
                // ***********************
                $noms_onglet = '[' . $taxon->getNomFr() . ' / ' . $taxon->getNomDe() . ']';
            }


            $syn_inter = array('X' => 'X');
            $syn_ssp = array('subsp.' => 'subsp.', 'var.' => 'var.', 'fo.' => 'fo.', 'subvar.' => 'subvar.', 'subf.' => 'subf.', 'nothovar.' => 'nothovar.', 'convar.' => 'convar.');
            $types = array('Médicinale' => 'Médicinale', 'Utile' => 'Utile', 'Toxique' => 'Toxique');
            $multiplication = array('Bouture' => 'Bouture', 'Plante' => 'Plante', 'Semis' => 'Semis');
            $hivernage = array('Cave' => 'Cave', 'Couches' => 'Couches', 'Orangerie' => 'Orangerie', 'Petite serre' => 'Petite serre', 'Serre 1' => 'Serre 1', 'Serre 2' => 'Serre 2', 'Serre 3' => 'Serre 3', 'Serre 4' => 'Serre 4');
            $protection_hiver = array('Branches sapin' => 'Branches sapin', 'Châssis' => 'Châssis', 'Feuilles' => 'Feuilles', 'Fumier' => 'Fumier');
            $floraison = array('janvier' => 'janvier', 'février' => 'février', 'mars' => 'mars', 'avril' => 'avril', 'mai' => 'mai', 'juin' => 'juin',
                               'juillet' => 'juillet', 'août' => 'août', 'septembre' => 'septembre', 'octobre' => 'octobre', 'novembre' => 'novembre', 'décembre' => 'décembre', );

            $formMapper
                ->tab('Général')
                    ->with('Caractéristiques', array('class' => 'col-md-4'))
                        ->add('nom', null, array('read_only' => true, 'help'=>'Le nom est généré automatiquement sur la base des champs suivants: "famille 1", "espèce" et "espèce auteur"'))
                        ->add('vieuxNom', null, array('read_only' => true))
                        ->add('public')
                        ->add('cultivar')
                        ->add('sexe')
                    ->end()
                    ->with('Catégories', array('class' => 'col-md-4'))
                        ->add('categories', 'sonata_type_model', array('expanded' => true, 'multiple' => true, 'template' => 'NTEBogartBundle:Taxon:croissance.html.twig'))
                    ->end()
                    ->with('SSP', array('class' => 'col-md-4'))
                        ->add('ssp', 'choice', array('choices' => $syn_ssp, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('sspNom')
                        ->add('sspAuteur')
                    ->end()
                ->end()
                ->tab('Fam. / Gen. / Esp.')
                    ->with('Famille', array('class' => 'col-md-4'))
                        ->add('famille1', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('famille2', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                    ->end()
                    ->with('Genre', array('class' => 'col-md-4'))
                        ->add('genreInter')
                        ->add('genre', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                    ->end()
                    ->with('Espèce', array('class' => 'col-md-4'))
                        ->add('especeInter')
                        ->add('espece')
                        ->add('especeAuteur')
                    ->end()
                ->end()
                ->tab('Synonymes')
                    ->with('Synonymes 1', array('class' => 'col-md-4'))
                        ->add('vieuxSynonyme', null, array('read_only' => true))
                        ->add('synonymeIntergeneric', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeGenre')
                        ->add('synonymeEspece')
                        ->add('synonymeAuteur')
                        ->add('synonymeInterspecific', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSsp', 'choice', array('choices' => $syn_ssp, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSspNom')
                        ->add('synonymeSspAuteur')
                    ->end()
                    ->with('Synonymes 2', array('class' => 'col-md-4'))
                        ->add('synonymeIntergeneric2', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeGenre2')
                        ->add('synonymeEspece2')
                        ->add('synonymeAuteur2')
                        ->add('synonymeInterspecific2', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSsp2', 'choice', array('choices' => $syn_ssp, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSspNom2')
                        ->add('synonymeSspAuteur2')
                    ->end()
                    ->with('Synonymes 3', array('class' => 'col-md-4'))
                        ->add('synonymeIntergeneric3', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeGenre3')
                        ->add('synonymeEspece3')
                        ->add('synonymeAuteur3')
                        ->add('synonymeInterspecific3', 'choice', array('choices' => $syn_inter, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSsp3', 'choice', array('choices' => $syn_ssp, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('synonymeSspNom3')
                        ->add('synonymeSspAuteur3')
                    ->end()
                ->end()
                ->tab('Croissance / Floraison')
                    ->with('Noms', array('class' => 'col-md-4'))
                        ->add('nomFr')
                        ->add('nomDe')
                    ->end()
                    ->with('Croissance', array('class' => 'col-md-4'))
                        ->add('croissance', 'sonata_type_model', array('expanded' => true, 'multiple' => true, 'template' => 'NTEBogartBundle:Taxon:croissance.html.twig'))
                        ->add('vieilleCroissance', null, array('read_only' => true))
                    ->end()
                    ->with('Floraison', array('class' => 'col-md-4'))
                        ->add('floraison', 'choice', array('choices' => $floraison, 'required' => false, 'multiple' => true, 'expanded' => true, 'attr' => array('size' => '7')))
                        ->add('vieilleFloraison', null, array('read_only' => true))
                    ->end()
                ->end()
                ->tab('Origine / Menacé')
                    ->with('Origine', array('class' => 'col-md-6'))
                        ->add('origines', null, array('read_only' => true))
                        ->add('complement1')
                        ->add('origine1', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('complement2')
                        ->add('origine2', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('complement3')
                        ->add('origine3', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('complement4')
                        ->add('origine4', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('complement5')
                        ->add('origine5', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                    ->end()
                    ->with('Autres', array('class' => 'col-md-6'))
                        ->add('origineAutre')
                        ->add('indigene')
                        ->add('menace')
                        ->add('protection')
                        ->add('cites')
                    ->end()
                ->end()
                ->tab('Med. / Uti. / Tox. / Types')
                    ->with('Med. / Uti. / Tox.', array('class' => 'col-md-6'))
                        ->add('planteMed')
                        ->add('planteMedInfo')
                        ->add('planteUtile')
                        ->add('planteUtileInfo')
                        ->add('planteTox')
                        ->add('planteToxInfo')
                    ->end()
                    ->with('Types', array('class' => 'col-md-6'))
                        ->add('planteType', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee')
                        ->add('planteBiblio', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType2', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee2')
                        ->add('planteBiblio2', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType3', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee3')
                        ->add('planteBiblio3', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType4', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee4')
                        ->add('planteBiblio4', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType5', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee5')
                        ->add('planteBiblio5', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType6', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee6')
                        ->add('planteBiblio6', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                        ->add('planteType7', 'choice', array('choices' => $types, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('planteAnnee7')
                        ->add('planteBiblio7', 'sonata_type_model', array('required' => false, 'empty_value' => '- - - - - -',))
                    ->end()
                ->end()
                ->tab('Divers')
                    ->with('.', array('class' => 'col-md-4'))
                        ->add('planteMeli')
                        ->add('remarques')
                        ->add('controle', null, array('label' => 'Contrôle Nomenclature'))
                        ->add('biblio', 'sonata_type_model_list', array('required' => false))
                    ->end()
                    ->with('..', array('class' => 'col-md-4'))
                        ->add('melangeTerreNum')
                        ->add('melangeTerre')
                        ->add('multiplication', 'choice', array('choices' => $multiplication, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('hivernage', 'choice', array('choices' => $hivernage, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('protectionHiv1', 'choice', array('choices' => $protection_hiver, 'empty_value' => '- - - - - -','required' => false, ))
                        ->add('protectionHiv2', 'choice', array('choices' => $protection_hiver, 'empty_value' => '- - - - - -','required' => false, ))
                    ->end()
                    ->with('...', array('class' => 'col-md-4'))
                        ->add('remarquesCulture')
                        ->add('marchePrintemps')
                        ->add('marchePrix')
                        ->add('marcheEtiquette')
                        ->add('travaux')
                    ->end()
                ->end()
                ->tab('Parcours')
                    ->with('Général', array('class' => 'col-md-4'))
                        ->add('parcoursposition','sonata_type_collection', array('by_reference' => false, 'required' => false, 'label' => 'Parcours / position dans le parcours'), array('edit' => 'inline', 'inline' => 'table'))
                        ->add('fichiers','sonata_type_collection', array('label' => 'Images', 'by_reference' => false, 'required' => false), array('edit' => 'inline', 'inline' => 'table'))
                    ->end()
                    ->with('FR', array('class' => 'col-md-4'))
                        ->add('origineFr')
                        ->add('habitatFr')
                        ->add('remarqueFr')
                    ->end()
                    ->with('DE', array('class' => 'col-md-4'))
                        ->add('origineDe')
                        ->add('habitatDe')
                        ->add('remarqueDe')
                    ->end()
                ->end()
            ;
        } // fin du else (session/verrou)
    }

    /**

    * {@inheritdoc}

    */

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $floraison = array('janvier' => 'janvier', 'février' => 'février', 'mars' => 'mars', 'avril' => 'avril', 'mai' => 'mai', 'juin' => 'juin',
                           'juillet' => 'juillet', 'août' => 'août', 'septembre' => 'septembre', 'octobre' => 'octobre', 'novembre' => 'novembre', 'décembre' => 'décembre', );

        $showMapper
                ->add('nom')
                ->add('vieuxNom')
                ->add('public')
                ->add('categorie')
                ->add('famille1')
                ->add('famille2')
                ->add('genreInter')
                ->add('genre')
                ->add('especeInter')
                ->add('espece')
                ->add('especeAuteur')
                ->add('ssp')
                ->add('sspNom')
                ->add('sspAuteur')
                ->add('cultivar')
                ->add('sexe')
                ->add('vieuxSynonyme')
                ->add('synonyme')
            ->end()
            ->with('Croissance / floraison')
                ->add('nomFr')
                ->add('nomDe')
    #            ->add('croissance')
                ->add('croissance', 'sonata_type_model', array('template' => 'NTEBogartBundle:Taxon:croissance.show.html.twig'))
                ->add('vieilleCroissance')
                ->add('floraison', null, array('template' => 'NTEBogartBundle:Taxon:floraison.show.html.twig'))
                ->add('vieilleFloraison')
                ->end()
                ->with('Complément', array('collapsed' => true))
                ->add('origines')
#                ->add('complement1')
    #            ->add('origine1')
#                ->add('complement2')
    #            ->add('origine2')
#                ->add('complement3')
    #            ->add('origine3')
#                ->add('complement4')
    #            ->add('origine4')
#                ->add('complement5')
    #            ->add('origine5')
                ->add('origineAutre')
                ->add('indigene')
                ->add('menace')
                ->add('protection')
                ->add('cites')
            ->end()
            ->with('Type / année / biblio', array('collapsed' => true))
                ->add('planteMed')
                ->add('planteMedInfo')
                ->add('planteUtile')
                ->add('planteUtileInfo')
                ->add('planteTox')
                ->add('planteToxInfo')
                ->add('planteType')
                ->add('planteAnnee')
                ->add('planteBiblio')
                ->add('planteType2')
                ->add('planteAnnee2')
                ->add('planteBiblio2')
                ->add('planteType3')
                ->add('planteAnnee3')
                ->add('planteBiblio3')
                ->add('planteType4')
                ->add('planteAnnee4')
                ->add('planteBiblio4')
                ->add('planteType5')
                ->add('planteAnnee5')
                ->add('planteBiblio5')
                ->add('planteType6')
                ->add('planteAnnee6')
                ->add('planteBiblio6')
                ->add('planteType7')
                ->add('planteAnnee7')
                ->add('planteBiblio7')
            ->end()
            ->with('Divers')
                ->add('planteMeli')
    #            ->add('remarques')
                ->add('controle', null, array('label' => 'Contrôle Nomenclature'))
                ->add('biblio')
#                ->add('semis', null, array('label' => 'Période de Semis'))
                ->add('melangeTerreNum')
                ->add('melangeTerre')
    #            ->add('multiplication')
    #            ->add('hivernage')
    #            ->add('protectionHiv1')
    #            ->add('protectionHiv2')
    #            ->add('remarquesCulture')
                ->add('marchePrintemps')
                ->add('marchePrix')
                ->add('marcheEtiquette')
                ->add('travaux')
            ->end()
            ->with('Accessions')
                ->add('accessions')
            ->end()
            ->with('Informations pour les parcours')
                ->add('parcoursposition', null, array('label' => 'Parcours / position dans le parcours'))
                ->add('origineFr')
                ->add('origineDe')
                ->add('habitatFr')
                ->add('habitatDe')
                ->add('remarqueFr')
                ->add('remarqueDe')
                ->add('fichiers')
            ->end()
        ;
    }
}
