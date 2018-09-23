<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', 'text',[
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('sumario','textarea',[
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 2, 'cols' => 100,
                    'required' => true
                ]
            ])
            ->add('conteudo', 'textarea',[
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 10, 'cols' => 100,
                    'required' => true
                ]
            ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_post';
    }
}
