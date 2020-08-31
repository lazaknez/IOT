<!DOCTYPE html>
<html lang="en">

<?php require 'init.php';
if ($_SESSION['status'] == true) {
    header("Location: error.php");
} ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>BeoStan Agencija</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/site.css" rel="stylesheet">

</head>

<body>

    <?php include 'header.php'; ?>
    
    <div class="container page-content">
        <div class="row">
            <div class="col-md-12 login-form bg-secondary my-2" >
                <h2>Prijava korisnika</h2>
                <form class="form" id="login_form" name="login_form" method="post" action="obradaLogin.php">
                    <div class="form-group">
                        <label for="email">Vaša e-mail adresa:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">   
                        <label for="lozinka">Vaša lozinka:</label>    
                        <input id="lozinka" name="lozinka" type="password" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="frm_submit" class="btn btn-primary my-2">Uloguj se</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['loginError'])) {?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['loginError'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['loginError']);
                 } ?>
            </div>
            <div class="col-md-12 register-form bg-secondary my-4" >
                <h2>Registracija korisnika</h2>
                <form class="form" id="dodaj_korisnika" name="dodaj_korisnika" method="post" action="obradaRegistracije.php">
                    <div class="form-group">
                        <label for="email">E-mail adresa:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">              
                        <label for="ime">Ime:</label>
                        <input id="ime" name="ime" type="text" class="form-control" required autocomplete="off">
                    </div>   
                    <div class="form-group">              
                        <label for="prezime">Prezime:</label>
                        <input id="prezime" name="prezime" type="text" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">   
                        <label for="lozinka">Lozinka:</label>    
                        <input id="lozinka" name="lozinka" type="password" class="form-control" required>
                    </div>    
                    <div class="form-group">   
                        <label for="lozinka2">Ponoviti lozinku:</label>    
                        <input id="lozinka2" name="lozinka2" type="password" class="form-control" required>
                    </div> 
                    <div class="form-submit">
                        <button type="submit" name="frm_submit" class="btn btn-primary my-2">Registruj se</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['registerInfo'])) {?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['registerInfo'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['registerInfo']);
                 }
                 if(isset($_SESSION['registerError'])) {?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['registerError'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['registerError']);
                 } ?>
            </div>
        </div>
        
    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
