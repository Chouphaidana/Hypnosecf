<?php


namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id',label:'Numéro Identifiant'),
            TextField::new('firstname',label:'Nom :'),
            TextField::new('lastname', label: 'Prénom :'),
            NumberField::new('phone',label:'Numéro de Téléphone :'),
            EmailField::new('email',label:'Adresse Mail :'),
        ];
    }

}
