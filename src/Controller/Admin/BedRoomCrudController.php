<?php

namespace App\Controller\Admin;

use App\Entity\BedRoom;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BedRoomCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BedRoom::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name',label: 'Nom :'),
            AssociationField::new('hotel',label: 'Hôtel :'),
            TextField::new('townAttachement',label:'Ville d\'attache'),
            TextField::new('relation',label: 'Nom Simplifié :'),
            SlugField::new('slug',label: 'Slug :')->setTargetFieldName('name'),
            TextareaField::new('description',label: 'Description :'),
            ImageField::new('illustration')
                ->setBasePath('telechargement/')
                ->setUploadDir('public/telechargement/')
                ->setUploadedFileNamePattern('[randomhash].[extansion]')
                ->setRequired(false),
            TextField::new('subtitle',label: 'Agencement Supplémentaires :'),
            MoneyField::new('price',label: 'Tarif :')->setCurrency('EUR'),
        ];
    }

}
