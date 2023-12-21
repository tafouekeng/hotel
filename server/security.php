 <?php 
session_start();
if(!(isset($_SESSION['profil']))){
        header("location:src/pages/login.php");
}
?>