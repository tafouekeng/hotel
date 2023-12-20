<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE DE RESERVATION</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("entete.php");?>
    <div class="container space col-md-6">
        <div class="card">
            <div class="card-header bg-secondary"><h2>VEIULEZ VOUS CONNECTER</h2></div>
            <div class="card-body">
                <form action="authentification.php"  method="POST">
                <div class="form-group">
                    <label for="" class="label-control">LOGIN :</label>
                    <input type="text" name="login" class="form-control">

                </div>
                <div class="form-group">
                    <label for="" class="label-control">PASS :</label>
                    <input type="password" name="pwd" class="form-control">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">CONNEXION </button>

                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>