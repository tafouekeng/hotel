<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE RESERVATION</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php include("entete1.php");?>
<body>
    <div class="container space col-md-6">
        <div class="card">
            <div class="card-header bg-secondary"><h2> NOUVEAU RESERVATION </h2></div>
            <div class="card-body">
                <form action="savereservation.php"  method="POST">
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

                </div>
                <div class="form-group">
                    <p> TYPE OF ROOM :<BR>
                    <input type="checkbox" name="jazz" id="jazz">
                    <label for="jazz" class="label-control">DELUXE ROOM</label><br>
                    <input type="checkbox" name="jazz" id="jazz">
                    <label for="jazz" class="label-control">SINGLE ROOM</label><br>
                    <input type="checkbox" name="jazz" id="jazz">
                    <label for="jazz" class="label-control">GUEST ROOM</label><br>
                    <input type="checkbox" name="jazz" id="jazz">
                    <label for="jazz" class="label-control">ECONOMY ROOM</label><br>
                    <input type="checkbox" name="jazz" id="jazz">
                    <label for="jazz" class="label-control">LUXURY ROOM</label><br>          
</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">ENREGISTRER </button>
                </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>