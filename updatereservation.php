<?php

include("connexion.php");

$id_reservation = $_POST['id_reservation'];
$nom = $_POST['nom'];
$prenom =$_POST['prenom'];
$date_arriver = $_POST['date_arriver'];
$date_depart = $_POST['date_depart'];

$sql =$pdo->prepare("UPDATE reservation SET nom=?, prenom=?, date_arriver=?, date_depart=? WHERE id_reservation=? ");
$params =array($nom,$prenom,$date_arriver,$date_depart,$id_reservation);
$sql->execute($params);
header("location:listehotel.php");