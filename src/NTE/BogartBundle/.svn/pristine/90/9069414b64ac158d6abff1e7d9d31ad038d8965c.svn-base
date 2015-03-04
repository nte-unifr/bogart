<?php

namespace NTE\BogartBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
use Knp\Menu\ItemInterface as MenuItemInterface;
 
use NTE\BogartBundle\Entity\Pages;
 
class PagesAdmin extends Admin
{
    protected $baseRouteName = 'admin_nte_bogartbundle_pagesadmin';
    protected $baseRoutePattern = 'parcours-pages';
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('title')
            ->add('text')
            ->add('titleDe')
            ->add('textDe')
        ;
    }
    

    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        $query->andWhere(
            $query->expr()->eq($query->getRootAlias() . '.type', ':type')
        );
        $query->setParameter('type', 'parcours');
        return $query;
    }
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('text', 'html')
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
			->with('Français')
                ->add('type', 'hidden', array('data' => 'parcours'))
				->add('title')
				->add('text', null, array('attr' => array('class' => 'ckeditor'), 'required' => true))
				->add('parcours_type_page', choice, array('label' => 'Type de page', 'choices' => array('message page accueil' => 'message page accueil', 'aide' => 'aide')))
            ->end()
            ->with('Deutsch')
				->add('titleDe')
				->add('textDe', null, array('attr' => array('class' => 'ckeditor'), 'required' => true))
            ->end()
        ;
    }
     
    /**
     
    * {@inheritdoc}
     
    */
     
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->with('Français')
				->add('title')
				->add('text', 'html')
				->add('parcours_type_page', null, array('label' => 'Type de page'))
            ->end()
            ->with('Deutsch')
				->add('titleDe')
				->add('textDe', 'html')
            ->end()
            ->end()
        ;
    }
}
