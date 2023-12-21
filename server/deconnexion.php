<?php
session_start();
session_destroy();
header("location:src/pages/listehotel.php");
?>