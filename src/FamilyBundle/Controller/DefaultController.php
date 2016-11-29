<?php

namespace FamilyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FamilyBundle:Default:index.html.twig');
    }
}
