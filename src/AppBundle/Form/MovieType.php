<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('surname')
            ->add('subject')
            ->add('messageUser', TextareaType::class, array(
                'attr' => array('class' => 'container'),
                'label' => 'Wiadomość',
            ))


            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'AppBundle\Entity\Movie'

        ));
    }

    public function getName()
    {
        return 'app_bundle_movie_type';
    }
}
