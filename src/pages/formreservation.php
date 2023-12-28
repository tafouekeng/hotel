<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE RESERVATION</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<?php include("../components/head/entete1.php"); ?>

<body>
    <div class="container space col-md-6">
        <div class="card">
            <div class="card-header bg-secondary">
                <h2> NOUVEAU RESERVATION </h2>
            </div>
            <div class="card-body">
                <form action="/server/savereservation.php" method="POST">
                    <div class="form-group">
                        <label for="" class="label-control">NOM :</label>
                        <input type="text" name="nom" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">PRENOM :</label>
                        <input type="text" name="prenom" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">DATE DE ARRIVER:</label>
                        <input type="date" name="date_arriver" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="" class="label-control">DATE DE DEPART:</label>
                        <input type="date" name="date_depart" class="form-control">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">ENREGISTRER </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>