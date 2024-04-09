<?php 
require_once(__DIR__ . "/path.php"); 
include(ROOT_PATH . "/aplikacija/logike/korisnici.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta nmame="author" content="Bruno Miklin 4RT" />
    <link rel="stylesheet" href="dodaci/css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <title>Završni rad - login stranica</title>
</head>

<body>
    <div class="glavni-div">
        <img class="tscklogo" src="dodaci\slike\tscklogo.png" alt="tscklogo" />
        <div class="okvir okvir-forma">
            <header>Logiraj se</header>
            <?php if($brojac>0): ?>
            <h1 style="color: red;">Krivi pristupni podaci!</h1>
            <?php endif;?>
            <form action="" method="post">
                <div class="unos podataka">
                    <label for="ime">Email</label>
                    <input type="text" name="email" id="email" required />
                </div>

                <div class="unos podataka">
                    <label for="lozinka">Lozinka</label>
                    <input type="password" name="password" required />
                </div>

                <div class="unos">
                    <input type="submit" class="tipka" name="prijava" value="Prijava" required />
                </div>

                <div class="links">
                    Nemaš račun? <a href="register.php">Registriraj se</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>