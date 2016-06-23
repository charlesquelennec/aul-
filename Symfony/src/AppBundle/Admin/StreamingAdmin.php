<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Streaming;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StreamingAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Streaming', array('class' => 'col-md-2'))
            ->add('activated', 'boolean')
            ->add('url', 'text')
            ->add('comment', 'text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
            ->add('activated')
            ->add('url')
            ->add('comment');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('')
            ->add('activated')
            ->add('url')
            ->add('comment')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Streaming
            ? $object->getId()
            : 'Streaming';
    }

}