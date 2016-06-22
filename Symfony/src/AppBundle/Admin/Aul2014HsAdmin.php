<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class Aul2014HsAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Aul2014Devs', array('class' => 'col-md-2'))
            ->add('ip', 'text')
            ->add('createdAt','datetime')
            ->add('languages','text')
            ->add('lastName','text')
            ->add('firstName','text')
            ->add('email','text')
            ->add('birthDay','text')
            ->add('school','text')
            ->add('major','text')
            ->add('degreeDate','text')
            ->add('nickname','text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nickname');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Aul2014Devs
            ? $object->getNickname()
            : 'Aul2014Devs';
    }

}