<?php

namespace App\Form;

use App\Classe\Search;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('string',TextType::class,[
            'label'=>'Rechercher',
            'required'=>false,
            'attr'=>[
                'palceholder'=>'Votre Recherche'
                ]
        ]);
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method'=>'GET',
            'crsf'=>false,
        ]);
    }
    public function getBlockPrefix()
    {
        return '';
    }
}