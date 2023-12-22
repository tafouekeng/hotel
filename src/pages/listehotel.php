<?php
include("security.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DE RESERVATION</title>
    <?php
    include("../server/connexion.php");
    $sql=$pdo->prepare("SELECT*FROM reservation");
    $sql->execute();
    if(isset($_GET['recherche']) AND !empty($_GET['recherche'])){
        $recherche = $_GET['recherche'];
        $sql=$pdo->prepare('SELECT * FROM reservation WHERE nom LIKE "%'.$recherche.'%"');
        $sql->execute();
    }
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include("../components/head/entete1.php"); ?>
    <div class="container space">
        <div class="card">
        <section class="card-header spacerecherche">
            <div class="col-md-8">
                <h3>LISTE DE RESERVATION</h3>
            </div>
            <div class="col-md-4">
                <form action="#admin" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="recherche">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success">rechercher</button>
                    </div>
                </form>
</div>
           </section>
            <div class="card-header bg-secondary"><h2> LISTE DES RESERVATION </h2></div>
            <div class="card-body">
                <a href="formreservation.php" class="btn btn-primary">ajouter une resrvation</a>
            <table class="table">
        <thead>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>date d'arriver</th>
        <th>date depart</th>
        <th colspan="2">option</th>

</thead>
<tbody>
<!-- <tbody> -->
    <?php while($reservation=$sql->fetch()){ ?>
        <tr>
            <td><?php echo($reservation['id_reservation']);?> </td>
            <td><?php echo($reservation['nom']);?> </td>
            <td><?php echo($reservation['prenom']);?> </td>
            <td><?php echo($reservation['date_arriver']);?> </td>
            <td><?php echo($reservation['date_depart']);?> </td>
            <td><a href="form_modif_reservation.php? id_reservation=<?php echo($reservation['id_reservation']);?>"class="btn btn-success"><img src="image/pencil-square.svg" alt="delete"></a></td>
            <td><a href="supreservation.php? id_reservation=<?php echo($reservation['id_reservation']);?>" class="btn btn-danger" onclick="return confirm('voulez-vous vraiment supprimer??')"><img src="image/trash-fill.svg" alt="save"></a></td>
    </tr>
    <?php }?>
</tbody>
</body>
</html>