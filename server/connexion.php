<?php
$env = require('env.php');
try {
    //code...
    $str = "mysql:host= " . $env['DB_HOST'] . ";dbname=" . $env['DB_NAME'];
    $pdo=new PDO($str,'root','');
} catch (PDOException $e) {
    //throw $th;
    $msg = 'erreur PDO'.$e->getMessage();
    die($msg);
}