<?php

namespace NTE\BogartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use NTE\BogartBundle\Entity\BotaniqueParcoursPosition;

class BotaniqueParcoursPositionAdmin extends Admin
{
    /**
     * @return array
     */
    public function getExportFields()
    {
        return array('id', 'taxon', 'parcours', 'numero', 'direction', 'distance', 'commentaireFr', 'commentaireDe');
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('parcours')
            ->add('numero')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('taxon')
            ->add('parcours')
            ->add('numero')
            ->add('direction')
            ->add('distance', null, array('label' => 'Distance (m)'))
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
#            ->add('parcours', 'sonata_type_model')
            ->add('numero', null, array('attr' => array('class' => 'span12')))
            ->add('taxon', 'sonata_type_model_list', array('required' => true))
            ->add('direction', 'choice', array('choices' => array('←' => '←', '↑' => '↑', '→' => '→', '↓' => '↓'), 'empty_value' => '- - - - - -','required' => false, 'attr' => array('class' => 'span12')))
            ->add('distance', null, array('label' => 'Distance (m)', 'attr' => array('class' => 'span12')))
            ->add('commentaireFr', null, array('attr' => array('class' => 'span12')))
            ->add('commentaireDe', null, array('attr' => array('class' => 'span12')))
            ->setHelps(array(
                'numero' => 'doit être unique',
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
            ->add('parcours')
            ->add('numero')
#            ->add('taxon')
            ->with('Prochain élement')
                ->add('direction')
                ->add('distance', null, array('label' => 'Distance (m)'))
                ->add('commentaireFr')
                ->add('commentaireDe')
            ->end()
        ;
    }
}
