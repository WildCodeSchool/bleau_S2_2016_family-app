<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 12/12/16
 * Time: 12:44
 */

namespace FamilyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FamilyBundle\Entity\User;


class PhoneController extends Controller
{
    /**
     * Lists all user entities.
     *
     */
    
   public function indexAction(){

       // Appel à la base de donnée
       //getDoctrine appel la methode Doctrine
       //getManager appel des ORM
       $em = $this->getDoctrine()->getManager();

       // Appel à l'entity
       $phone = $em->getRepository('FamilyBundle:User')->findAll();

       // Retour à la page concernée avec une valeur appelée
       return $this->render('@Family/Default/phone.html.twig', array(
           'phones'=>$phone,
       ));
   }
}