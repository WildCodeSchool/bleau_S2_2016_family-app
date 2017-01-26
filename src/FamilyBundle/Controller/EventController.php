<?php

namespace FamilyBundle\Controller;

use FamilyBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{
    public function showEventOnCalendarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FamilyBundle:Event')->findAll();

        $normalizer = new ObjectNormalizer();

        $encoder = new JsonEncoder();

        $dateCallback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format(\DateTime::ISO8601)
                : '';
        };

        $normalizer->setCallbacks(array('start' => $dateCallback, 'end' => $dateCallback));

        $serializer = new Serializer(array($normalizer), array($encoder));
        $jsonObject = $serializer->serialize($entities, 'json');

        $response = new Response();
        $response->setContent($jsonObject);

        return $response;
    }

    /**
     * Creates a new Events entity.
     *
     */
    public function newAction(Request $request, $start)
    {
        $event = new Event();
        if ($start == 0) {
            $newTime = new \DateTime();
            $startEvent = $newTime->format('d-m-Y H:i:s');
            $event->setStart(new \DateTime($startEvent));
            $endtime = new \DateTime();
            $endEvent = $endtime->format('d-m-Y H:i:s');
            $event->setEnd(new \DateTime($endEvent));
        }
        else {
            $event->setStart(new \DateTime($start));
            $event->setEnd(new \DateTime($start));
        }

        $form = $this->createForm('FamilyBundle\Form\EventType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('family_calendar');
        }

        return $this->render('@Family/event/new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Events entity.
     *
     */
    public function editAction(Request $request, Event $event)
    {
        $editForm = $this->createForm('FamilyBundle\Form\EventType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('family_calendar', array('id' => $event->getId()));
        }

        return $this->render('@Family/event/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('FamilyBundle:Event')->findOneById($id);

        if (!empty($event))
        {
            $em->remove($event);
            $em->flush();
        }

        return $this->redirectToRoute('family_calendar');
    }
}
