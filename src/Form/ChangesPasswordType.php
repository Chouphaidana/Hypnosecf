<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangesPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname',TextType::class,[
                'disabled'=>true,
                'label'=>'Prénom :',
            ])
            ->add('lastname',TextType::class,[
                'disabled'=>true,
                'label'=>'Nom :',
            ])
            ->add('phone',NumberType::class,[
                'disabled'=>true,
                'label'=>'Téléphone :',
            ])
            ->add('email',EmailType::class,[
                'disabled'=>true,
                'label'=>'Adresse Mail :',
            ])
            ->add('old_password',PasswordType::class,[
                'label'=>'Mot de Passe :',
                'mapped'=>false,
                'attr'=>[
                    'placeholder'=>'Veuillez Saisir votre Mot de Passe actuel',
                ]
    ])
            ->add('new_password',RepeatedType::class,[
                'type'=>PasswordType::class,
                'invalid_message'=>'Le Mot de Passe et le confirmation doivent être identique',
                'label'=>'Mon nouveau Mot de Passe',
                'required'=>true,
                'mapped'=>false,
                'first_options'=>[
                    'label'=>'Mon nouveau Mot de Passe',
                    'attr'=>[
                        'placeholder'=>'Merci de Saisir votre Nouveau Mot de Passe ?',
                    ]
                    ],
                'second_options'=>[
                    'label'=>'Confirmez votre Nouveau Mot de Passe ?',
                    'attr'=>[
                        'placeholder'=>'Confirmez Votre Nouveau Mot de Passe ?'
                    ]
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>'Changez Votre Mot de Passe ?',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
