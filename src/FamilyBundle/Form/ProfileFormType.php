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


use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', null, array('label' => 'Nom'))
            ->add('prenom', null, array('label' => 'Prenom'))
            ->add('adresse', null, array('label' => 'Adresse'))
            ->add('tel_03', null, array('label' => 'Tel Domicile'))
            ->add('tel_06', null, array('label' => 'Tel Portable'))
            ->add('tel_09', null, array('label' => 'Tel Internet'))
            ->add('code_postal', null, array('label' => 'Code_Postal'))
            ->add('ville', null, array('label' => 'Ville'))
            ->add('anniversaire', null, array('label' => 'Anniversaire'))
            
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                        'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                        'options' => array('translation_domain' => 'FOSUserBundle'),
                        'first_options' => array('label' => 'form.new_password'),
                        'second_options' => array('label' => 'form.new_password_confirmation'),
                        'invalid_message' => 'fos_user.password.mismatch',
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