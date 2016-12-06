<?php

namespace FamilyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Family/Default/index.html.twig');
    }

    public function phoneAction()
    {
        return $this->render('@Family/Default/phone.html.twig');
    }

    public function calendarAction()
    {
        return $this->render('@Family/Default/calendar.html.twig');
    }

    public function timeAction()
    {
        return $this->render('@Family/Default/time.html.twig');
    }

    public function mapAction()
    {
        return $this->render('@Family/Default/map.html.twig');
    }

    public function mentionAction()
    {
        return $this->render('@Family/Default/mention.html.twig');
    }

}
