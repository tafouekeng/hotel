<?php
include("connexion.php");

$login = $_POST['login'];
$pass = $_POST['pwd'];

$sql =$pdo->prepare("SELECT * FROM user WHERE username=? AND pwd=?");

$sql ->execute(array($login,$pass));

if($user =$sql->fetch()){
    session_start();

    $_SESSION['profil']=$user;

    header("location:listehotel.php");
}
else{
    header("location:login.php");
}
?>