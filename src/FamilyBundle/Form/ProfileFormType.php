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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', null, array('label' => 'Nom'))
            ->add('prenom', null, array('label' => 'Prenom'))
            ->add('adresse', null, array('label' => 'Adresse'))
            ->add('domicile', null, array('label' => 'Tel Domicile'))
            ->add('portable', null, array('label' => 'Tel Portable'))
            ->add('box', null, array('label' => 'Tel Internet'))
            ->add('code_postal', null, array('label' => 'Code_Postal'))
            ->add('ville', null, array('label' => 'Ville'))
            ->add('anniversaire', DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'datepicker']))
            ->add('current_password', 'password', array(
                'mapped' => false
            ));
    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'app_user_profile';
    }
}