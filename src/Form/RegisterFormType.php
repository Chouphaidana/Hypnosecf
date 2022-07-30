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
use Symfony\Component\Validator\Constraints\Length;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class ,[
                'label'=> 'Adresse Mail :',
                'constraints'=> new Length([
                    'min' => 2,
                    'max'=>30
                ]),
                'attr'=> [
                    'placeholder'=> 'contact@hypnos.fr'
                ]
            ] )
            ->add('lastname',TextType::class,[
                'label'=> 'Nom :',
                'constraints'=> new Length([
                    'min' => 2,
                    'max'=>30
                ]),
                'attr'=>[
                    'placeholder'=>'Tintin'
                ],
            ])
            ->add('firstname', TextType::class,[
                'label'=>'Prénom :',
                'constraints'=> new Length([
            'min' => 2,
            'max'=>30
        ]),
                'attr'=>[
                    'placeholder'=>'Milou'
                ]
            ])
            ->add('adress',TextType::class,[
                'label'=>'Adresse :',
                'attr'=>[
                    'placeholder'=>'Avenue des Champs Élysées'
    ]
            ])
            ->add('postcode', TextType::class,[
                'label'=>'Code Postale :',
                'attr'=>[
                    'placeholder'=>'75000'
                    ]
            ])
            ->add('town', TextType::class,[
                'label'=>'Ville :',
                'attr'=>[
                    'placeholder'=>'Paris'
                ]
            ])
            ->add('country', TextType::class,[
                'label'=>'Pays :',
                'attr'=>[
                    'placeholder'=>'France'
                ]
            ])
            ->add('phone', NumberType::class,[
                'label'=>'Numéro de Téléphone :',
                'attr'=>[
                    'placeholder'=>'0756905686'
                ]
            ])
            ->add('password',RepeatedType::class,[
                'type'=>PasswordType::class,
                'invalid_message'=>'Vos Mot de Passe de Correspondent Pas !!!',
                'label'=>'Votre Mot de Passe :',
                'required'=>true,
                'first_options'=>[
                    'label'=>'Mot de Passe :',
                    'attr'=>[
                        'placeholder'=>'hypnos.chouphaidana.org'
                    ]
                    ],
                'second_options'=>[
                    'label'=>'Confirmez votre Mot de Passe :',
                    'attr'=>[
                        'placeholder'=>'hypnos.chouphaidana.org'
                ],
                    ]
                ])

            ->add('submit',SubmitType::class,[
                'label'=>'Inscription',
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
