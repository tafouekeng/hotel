<?php

include("connexion.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_arriver = $_POST['date_arriver'];
$date_depart = $_POST['date_depart'];

$sql =$pdo->prepare("INSERT INTO reservation(nom, prenom, date_arriver, date_depart)VALUES(?,?,?,?)");
$params =array($nom,$prenom,$date_arriver,$date_depart);
$sql->execute($params);
header("location:listehotel.php");