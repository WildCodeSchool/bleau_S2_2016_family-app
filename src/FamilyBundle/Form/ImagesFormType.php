<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 13/12/16
 * Time: 16:20
 */
namespace FamilyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ImagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
           
            ->add('source', FileType::class, array('label' => 'Image (fichier JPG)', 'data_class' => null))
            ->add('alt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FamilyBundle\Entity\Images',
        ));
    }
}