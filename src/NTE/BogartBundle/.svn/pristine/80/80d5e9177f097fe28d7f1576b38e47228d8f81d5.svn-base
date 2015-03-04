<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueGraineStatistique;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class BotaniqueGraineStatistiqueAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $stat = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueGraineStatistique');
        return array_merge($stat->getFieldNames(), $stat->getAssociationNames());
    }

    public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->container = $container;
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('fichier')
            ->add('annee')
            ->add('id_adresse')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('fichier')
            ->addIdentifier('annee')
            ->add('id_adresse')
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
        $formMapper
            ->add('fichier', null, array('attr' => array('class' => 'span12')))
            ->add('annee', null, array('attr' => array('class' => 'span12')))
            ->add('cat_recu', null, array('attr' => array('class' => 'span12')))
            ->add('gra_com', null, array('attr' => array('class' => 'span12')))
            ->add('gra_recu', null, array('attr' => array('class' => 'span12')))
            ->add('cat_envoy', null, array('attr' => array('class' => 'span12')))
            ->add('gra_envoy', null, array('attr' => array('class' => 'span12')))
            ->add('id_adresse', 'sonata_type_model_list')
            ->end()
        ;
    }

    /**

    * {@inheritdoc}

    */

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fichier')
            ->add('annee')
            ->add('cat_recu')
            ->add('gra_com')
            ->add('gra_recu')
            ->add('cat_envoy')
            ->add('gra_envoy')
            ->add('id_adresse')
            ->end()
        ;
    }
}
