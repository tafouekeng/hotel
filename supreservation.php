<?php

$id_reservation =$_GET['id_reservation'];
include("connexion.php");

$sql = $pdo->prepare("DELETE FROM reservation WHERE id_reservation=?");

$sql->execute(array($id_reservation));

header('location:listehotel.php');


