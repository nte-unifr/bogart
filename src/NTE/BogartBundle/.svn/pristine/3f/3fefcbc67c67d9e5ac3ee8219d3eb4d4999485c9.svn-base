<?php

namespace NTE\BogartBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
use Knp\Menu\ItemInterface as MenuItemInterface;
 
use NTE\BogartBundle\Entity\BotaniqueBiblio;
 
class BotaniqueBibliographieAdmin extends Admin
{
    /**
     * @return array
     */
    // surcharge de la méthode pour avoir TOUS les champs (y compris les liaisons) dans l'exportation CSV, XLS, ..
    public function getExportFields()
    {
        $accession = $this->container->get('doctrine.orm.entity_manager')->getClassMetadata('NTE\BogartBundle\Entity\BotaniqueBiblio');
        return array_merge($accession->getFieldNames(), $accession->getAssociationNames());
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('titre')
            ->add('auteur1')
            ->add('maison')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titre')
            ->addIdentifier('auteur1')
            ->addIdentifier('auteur2')
            ->addIdentifier('auteur3')
            ->addIdentifier('auteur4')
            ->addIdentifier('maison')
            ->add('annee')
            ->add('edition')
            ->add('isbn')
            ->add('dokpe')
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
        $emplacements = array('Bureau jardiniers' => 'Bureau jardiniers', 'Bureau Susanne' => 'Bureau Susanne', 'Bibliotèque jardin' => 'Bibliotèque jardin', 'Bibliothèque institut' => 'Bibliothèque institut',
                              'DOKPE' => 'DOKPE', 'Internet' => 'Internet', 'Privé' => 'Privé');
        
        $formMapper
            ->add('titre')
            ->add('auteur1')
            ->add('auteur2')
            ->add('auteur3')
            ->add('auteur4')
            ->add('maison')
            ->add('annee')
            ->add('edition')
            ->add('isbn')
            ->add('dokpe')
            ->add('emplacement', 'choice', array('choices' => $emplacements, 'empty_value' => '- - - - - -','required' => false))
            ->add('inventaire')
            ->add('utilisationEdition1')
            ->add('utilisationEdition2')
            ->add('utilisationEdition3')
            ->add('utilisationEdition4')
            ->add('utilisationEdition5')
            ->add('listeChoix')
            ->end()
        ;
    }
     
    /**
     
    * {@inheritdoc}
     
    */
     
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('titre')
            ->add('auteur1')
            ->add('auteur2')
            ->add('auteur3')
            ->add('auteur4')
            ->add('maison')
            ->add('annee')
            ->add('edition')
            ->add('isbn')
            ->add('dokpe')
            ->add('emplacement')
            ->add('inventaire')
            ->add('utilisationEdition1')
            ->add('utilisationEdition2')
            ->add('utilisationEdition3')
            ->add('utilisationEdition4')
            ->add('utilisationEdition5')
            ->add('listeChoix')
            ->end()
        ;
    }
}
