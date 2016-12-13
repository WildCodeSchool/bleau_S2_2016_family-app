<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FamilyBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', null, array('label' => 'Nom'))
            ->add('prenom', null, array('label' => 'Prenom'))
            ->add('adresse', null, array('label' => 'Adresse'))
            ->add('tel_03', null, array('label' => 'Tel_03'))
            ->add('tel_06', null, array('label' => 'Tel_06'))
            ->add('tel_09', null, array('label' => 'Tel_09'))
            ->add('code_postal', null, array('label' => 'Code_Postal'))
            ->add('ville', null, array('label' => 'Ville'))
            ->add('anniversaire');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}