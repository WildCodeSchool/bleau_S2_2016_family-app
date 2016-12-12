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
       
       $em = $this->getDoctrine()->getManager();
       
       $phone = $em->getRepository('FamilyBundle:User')->findAll();
       
       return $this->render('@Family/Default/phone.html.twig', array(
           'phones'=>$phone,
       ));
   }
}