<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueAdresse;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class BotaniqueAdresseAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $adresse = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueAdresse');
        return array_merge($adresse->getFieldNames(), $adresse->getAssociationNames(), ['pays.abreviation']);
    }

    public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->container = $container;
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('filemakerNum')
            ->add('fichier')
            ->add('institution')
            ->add('nom')
            ->add('localite')
            ->add('pays')
            ->add('envoiIs')
            ->add('isType')
            ->add('categorie')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('filemakerNum')
            ->addIdentifier('fichier')
            ->addIdentifier('institution')
            ->addIdentifier('nom')
            ->add('adresse')
            ->add('npa')
            ->add('localite')
            ->add('pays')
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
        $titres = array('Herrn' => 'Herrn', 'Frau' => 'Frau', 'M.' => 'M.', 'Mme' => 'Mme', 'Monsieur' => 'Monsieur', 'Madame' => 'Madame', 'Mrs.' => 'Mrs.', );
        $type_envoi = array('Affranchi à forfait' => 'Affranchi à forfait', 'Courrier normal' => 'Courrier normal', 'Email' => 'Email', 'Par avion' => 'Par avion');
        $categories = array('Presse' => 'Presse', 'Presse' => 'Presse', 'Surveillance / amis' => 'Surveillance / amis', 'Manifestations' => 'Manifestations', 'Pépinières' => 'Pépinières',
                            'Paysagistes' => 'Paysagistes', 'Personnel' => 'Personnel', 'Ancien personnel' => 'Ancien personnel', 'Contacts Université' => 'Contacts Université', 'Divers' => 'Divers', 'Jardins botaniques' => 'Jardins botaniques');
        $ouinon = array('OUI' => 'OUI', 'NON' => 'NON');

        $formMapper
            ->add('filemakerNum')
            ->add('titre', 'choice', array('choices' => $titres, 'empty_value' => '- - - - - -','required' => false))
            ->add('institution')
            ->add('nom')
            ->add('adresse')
            ->add('npa')
            ->add('localite')
            ->add('pays')
            ->add('zusatz')
            ->add('telephone')
            ->add('fax')
            ->add('email')
            ->add('natel')
            ->add('fichier')
            ->add('indexInternet')
            ->add('remarques')
            ->add('ipen')
            ->add('envoiIs', 'choice', array('choices' => $ouinon, 'empty_value' => '- - - - - -','required' => false))
            ->add('isType', 'choice', array('choices' => $type_envoi, 'empty_value' => '- - - - - -','required' => false))
            ->add('categorie', 'choice', array('choices' => $categories, 'empty_value' => '- - - - - -','required' => false))
            ->add('envoi')
            ->add('recu')
            ->with('Statistiques')
                ->add('statistiques', 'sonata_type_collection', array('by_reference' => false, 'required' => false), array(
                        'edit' => 'inline',
                        'inline' => 'table',
                    ))
            ->end()
        ;
    }

    /**

    * {@inheritdoc}

    */

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('filemakerNum')
            ->add('titre')
            ->add('institution')
            ->add('nom')
            ->add('adresse')
            ->add('npa')
            ->add('localite')
            ->add('pays')
            ->add('zusatz')
            ->add('telephone')
            ->add('fax')
            ->add('email')
            ->add('natel')
            ->add('fichier')
            ->add('indexInternet')
            ->add('remarques')
            ->add('ipen')
            ->add('envoiIs')
            ->add('isType')
            ->add('categorie')
            ->add('envoi')
            ->add('recu')
            ->add('statistiques')
            ->end()
        ;
    }
}
