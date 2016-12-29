<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 28/12/16
 * Time: 12:25
 */
namespace FamilyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FamilyBundle\Entity\User;

//Datetime de php
use \DateTime;

class TimeController extends Controller
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
        $time = $em->getRepository('FamilyBundle:User')->findAll();

        //Variables date présent et date prochaine anniv
        $dateNow = new DateTime();
        $dateNextAnniv = new DateTime();

        //echo $dt->format('Y-m-d H:i:s');
        //Get current month, day, year and next year
        $currentMonth=$dateNow->format('m');
        $currentDay=$dateNow->format('d');
        $currentYear = $dateNow->format('Y');
        $nextYear = $currentYear+1;


        foreach ($time as $cle => $object_user) {

            foreach ($object_user as $champ => $value) {

                if($champ == 'anniversaire'){
                    $object_user->setAnniversaireString($value->format('Y-m-d'));
                    //Récupère le mois et jour de l'anniversaire pour tester l'année à utiliser
                    $annivMonth =$value->format('m');
                    $annivDay =$value->format('d');
                    //Teste si on prend l'année future ou courante
                    if($currentMonth > $annivMonth ||
                        ($currentMonth == $annivMonth && $currentDay>$annivDay)){
                        //Prendre l'année prochaine
                        $dateNextAnniv = new DateTime($nextYear.'-'.$annivMonth.'-'.$annivDay);

                    }else{
                        //prendre l'année courante
                        $dateNextAnniv = new DateTime($currentYear.'-'.$annivMonth.'-'.$annivDay);

                    }
                    //Différence entre les 2 dates, prochaine anniversaire et maintenant
                    $diff = $dateNextAnniv->diff($dateNow)->format("%a");
                    //bug +1 pour calcul exact j rstant
                    $diff = $diff+1;
                    $object_user->setCountdown($diff);
                }
            }
        }

        // Retour à la page concernée avec une valeur appelée
        return $this->render('@Family/Default/time.html.twig', array(
            'times'=>$time,
        ));
    }
}