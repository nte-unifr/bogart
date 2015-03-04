<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniquePays;

class BotaniquePaysAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniquePays');
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames());
    }

    /**
     * Default Datagrid values
     *
     * @var array
     */
    protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'ASC',
        '_sort_by' => 'numero'
    );

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('numero')
            ->add('abreviation')
            ->add('pays')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numero')
            ->addIdentifier('abreviation')
            ->addIdentifier('pays')
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
            ->add('numero')
            ->add('abreviation')
            ->add('pays')
            ->end()
        ;
    }

    /**

    * {@inheritdoc}

    */

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('numero')
            ->add('abreviation')
            ->add('pays')
            ->end()
        ;
    }
}
