<?php

namespace NTE\BogartBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
use Knp\Menu\ItemInterface as MenuItemInterface;
 
use NTE\BogartBundle\Entity\BotaniqueCroissance;
 
class BotaniqueFichierTaxonAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueCroissance');
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames());
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('taxon')
            ->addIdentifier('taxon.parcoursposition')
            ->add('media', 'sonata_type_model', array('template' => 'NTEBogartBundle:Croissance:crudimage.html.twig'))
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
            ->add('media', 'sonata_type_model', array('required' => false), array('link_parameters' => array('context' => 'default', 'provider'=>'sonata.media.provider.image')))
            ->end()
        ;
    }
     
    /**
     
    * {@inheritdoc}
     
    */
     
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('taxon')
            ->add('media', 'sonata_type_model', array('template' => 'NTEBogartBundle:Croissance:crudimage.html.twig'))
            ->end()
        ;
    }
}
