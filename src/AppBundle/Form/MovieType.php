<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label' => 'Twoje imie'))
            ->add('surname', TextType::class, array('label' => 'Twoje nazwisko'))
            ->add('subject', TextType::class, array('label' => 'Tytuł'))
            ->add('messageUser', TextType::class, array('label_format' => 'Wiadomość'))
            ->add('date', DateType::class, array(
                'years'  => range(date('Y') - 1, date('Y') + 5),
                'months' => range(1, 7),
                'days' => range(1, 31),
                'input' => 'string'

            ));
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
