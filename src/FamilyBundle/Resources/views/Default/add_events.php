<?php
/**
 * Created by PhpStorm.
 * User: baur
 * Date: 09/01/17
 * Time: 14:48
 */

$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];

// connexion à la base de données
 try {
     $bdd = new PDO('mysql:host=localhost;dbname=familydb', 'root', 'root');
 } catch(Exception $e) {
     exit('Impossible de se connecter à la base de données.');
 }

$sql = "INSERT INTO evenement (title, start, end) VALUES (:title, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));