<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class Aul2014LolAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Aul2014Lol', array('class' => 'col-md-2'))
            ->add('ip', 'text')
            ->add('createdAt','datetime')
            ->add('lastName','text')
            ->add('firstName','text')
            ->add('email','text')
            ->add('birthDay','datetime')
            ->add('school','text')
            ->add('major','text')
            ->add('degreeDate','datetime')
            ->add('nickname','text')
            ->add('lolRole', 'text')
            ->add('lolTeamname', 'text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
            ->add('ip')
            ->add('createdAt')
            ->add('lastName')
            ->add('firstName')
            ->add('email')
            ->add('birthDay')
            ->add('school')
            ->add('major')
            ->add('degreeDate')
            ->add('nickname')
            ->add('lolRole')
            ->add('lolTeamname');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('ip')
            ->add('createdAt')
            ->add('lastName')
            ->add('firstName')
            ->add('email')
            ->add('birthDay')
            ->add('school')
            ->add('major')
            ->add('degreeDate')
            ->add('nickname')
            ->add('lolRole')
            ->add('lolTeamname')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Aul2014Lol
            ? $object->getId()
            : 'Aul2014Lol';
    }

}