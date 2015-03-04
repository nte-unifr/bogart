<?php

namespace NTE\BogartBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
use Knp\Menu\ItemInterface as MenuItemInterface;
 
use NTE\BogartBundle\Entity\BotaniqueParcours;
 
class BotaniqueParcoursAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueParcours');
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames());
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('nom_fr')
            ->add('nom_de')
            ->add('numero')
            ->add('actif')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom_fr')
            ->addIdentifier('nom_de')
            ->add('numero')
            ->add('actif')
            ->add('couleur')
            ->add('image', null, array('template' => 'NTEBogartBundle:Croissance:crudimage.html.twig'))
            ->add('parcoursposition', null, array('label' => 'Taxons et position'))
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
            ->add('nom_fr')
            ->add('nom_de')
            ->add('numero')
            ->add('couleur', 'genemu_jquerycolor', array(
                    'widget' => 'image'
                ))
            ->add('actif')
            ->add('image', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'default', 'provider'=>'sonata.media.provider.image')))
#            ->with('Taxons du parcours')
                ->add('parcoursposition', 'sonata_type_collection', array('by_reference' => false, 'required' => false, 'label' => 'Taxons / position dans le parcours'), array(
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
            ->add('nom_fr')
            ->add('nom_de')
            ->add('numero')
            ->add('couleur')
            ->add('actif')
            ->add('image', null, array('template' => 'NTEBogartBundle::media.html.twig'))
            ->with('Taxons du parcours')
                ->add('parcoursposition', null, array('label' => 'Taxons et position'))
            ->end()
        ;
    }
}
