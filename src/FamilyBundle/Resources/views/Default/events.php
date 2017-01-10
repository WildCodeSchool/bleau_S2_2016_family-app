<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 09/01/17
 * Time: 14:40
 */

// liste des événements
 $json = array();
 // requête qui récupère les événements
 $requete = "SELECT * FROM evenement ORDER BY id";

 // connexion à la base de données
 try {
     $bdd = new PDO('mysql:host=localhost;dbname=familydb', 'root', 'root');
 } catch(Exception $e) {
     exit('Impossible de se connecter à la base de données.');
 }
 // exécution de la requête
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // envoi du résultat au success
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

