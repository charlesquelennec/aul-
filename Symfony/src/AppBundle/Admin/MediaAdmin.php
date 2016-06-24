<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MediaAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Media', array('class' => 'col-md-2'))
            ->add('title','text')
            ->add('path','text')
            ->add('link','text')
            ->add('width','text')
            ->add('height','text')
            ->add('page','text')
            ->add('block','text')
            ->add('replaced','text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
            ->add('title')
            ->add('path')
            ->add('link')
            ->add('width')
            ->add('height')
            ->add('page')
            ->add('block')
            ->add('replaced')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('title')
            ->add('path')
            ->add('link')
            ->add('width')
            ->add('height')
            ->add('page')
            ->add('block')
            ->add('replaced')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Media
            ? $object->getId()
            : 'Media';
    }

}