<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 10/01/17
 * Time: 14:23
 */

namespace FamilyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EvenementFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...

            ->add('title', null, array('label' => 'title'))
            ->add('start', null, array('label' => 'start'))
            ->add('end', null, array('label' => 'end'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FamilyBundle\Entity\Evenement',
        ));
    }
}