<?php
include("connexion.php");
$id_reservation =$_GET['id_reservation'];
$sql=$pdo->prepare("SELECT * FROM reservation WHERE id_reservation=?");
$sql->execute(array($id_reservation));
$reservation=$sql->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DE RESERVATION</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    <div class="container space col-md-6">
    <div class="card">
    <div  class="card-header bg-secondary"> <h2>MODIFICATION DE RESERVATION</h2> </div>
    <div class="card-body">
        <form action="updatereservation.php" method="POST">
        <input type="hidden" name="id_reservation" class="form-control" value="<?php echo($reservation['id_reservation']);?>">
            <div class="form-group">
                <label for="" class="label-control">NOM :</label>
                <input type="text" name="nom" class="form-control" value="<?php echo($reservation['nom']);?>">
            </div>
            <div class="form-group">
                <label for="" class="label-control">PRENOM:</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo($reservation['prenom']);?>">
            </div>
            <div class="form-group">
                <label for="" class="label-control">DATE DE ARRIVER:</label>
                <input type="date" name="date_arriver" class="form-control" value="<?php echo($reservation['date_arriver']);?>">
            </div>
            <div class="form-group">
                <label for="" class="label-control">DATE DE DEPART:</label>
                <input type="date" name="date_depart" class="form-control" value="<?php echo($reservation['date_depart']);?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>