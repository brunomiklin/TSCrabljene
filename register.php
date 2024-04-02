<?php 
require_once(__DIR__ . "/path.php"); 
include(ROOT_PATH . "/aplikacija/logike/korisnici.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta nmame="author" content="Bruno Miklin 4RT">
    <link rel="stylesheet" href="dodaci/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Završni rad - register stranica</title>
</head>

<body>
    <div class="glavni-div">
        <div class="okvir okvir-forma">
            <div class="okvir-forma">
                <header>Registriraj se</header>
                <?php if(count($greške)>0): ?>
                <h1 style="color: red;">Email je zauzet!</h1>
                <?php endif;?>

                <form action="register.php" method="post">
                    <div class="unos podataka">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="unos podataka">
                        <label for="ime">Ime</label>
                        <input type="text" name="ime" id="ime" required>
                    </div>
                    <div class="unos podataka">
                        <label for="prezime">Prezime</label>
                        <input type="text" name="prezime" id="prezime" required>
                    </div>
                    <div class="unos podataka">
                        <label for="password">Lozinka</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="unos podataka">
                        <label for="razred">Razred</label>
                        <select name="razred" id="razred">
                            <option value="4">4. razred</option>
                            <option value="3">3. razred</option>
                            <option value="2">2. razred</option>
                            <option value="1">1. razred</option>
                        </select>
                    </div>
                    <div class="unos podataka">
                        <label for="smjer">Smjer</label>
                        <select name="smjer" id="smjer">
                            <option value="RT">Tehničar za računalstvo</option>
                            <option value="ST">Strojarski računalni tehničar</option>
                            <option value="MT">Tehničar za mehatroniku</option>
                            <option value="ET">Tehničar za elektroniku</option>
                        </select>
                    </div>
                    <div class="unos">
                        <input type="submit" class="tipka" name="register_btn" value="Registriraj me">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>