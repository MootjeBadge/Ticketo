<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketo</title>
    <link rel="stylesheet" href="./support/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./support/assets/css/app.css">
    <style>
        body,
        html {
            background-image: url(support/assets/img/ticketologo.png);
            background-size: cover;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Bekijk hier uw ticket.</h3>
                            <p>Heeft u in het verleden al een ticket gemaakt? Bekijk deze dan doormiddel van de ticket
                                ID die u heeft mee gekregen om uw ticket te bekijken.</p>
                            <a href="./view-ticket.php" class="btn btn-success">Ticket bekijken</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Maak een nieuwe ticket aan.</h3>
                            <p>Heeft u een IT vraag of probleem? klik het onderstaande knop om een nieuwe ticket aan te
                                maken. U krijgt zo spoedig mogelijk een reactie. <br></br></p>
                            <a href="./submit-ticket.php" class="btn btn-success">Maak ticket aan</a>
                        </div>
                    </div>
                    <form method="POST">
                        <div class="container ml-5 pl-5 ">
                            <div class="row ml-5 pl-5">
                                <div class="ml-5 pl-5">
                                <div class="pl-3">
                                        <div class="card-body ml-5 pl-5">
                                            
                                            <a href="./admin-login.php" class="btn btn-danger">Admin inloggen</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
</body>
<script src="./support/assets/js/jquery-3.6.0.min.js"></script>
<script src="./support/assets/js/popper.min.js"></script>
<script src="./support/assets/js/bootstrap.min.js"></script>

</html>