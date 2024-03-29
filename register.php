<?php include("put.php")?>
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
                <form action="" method="post">
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
                        <label for="lozinka">Lozinka</label>
                        <input type="password" name="lozinka" id="lozinka" required>
                    </div>

                    <div class="unos podataka">
                        <label for="razred">Razred</label>
                        <select id="razred">
                            <option value="razred">4. razred</option>
                            <option value="razred">3. razred</option>
                            <option value="razred">2. razred</option>
                            <option value="razred">1. razred</option>
                        </select>
                    </div>

                    <div class="unos podataka">
                        <label for="razred">Smjer</label>
                        <select id="razred">
                            <option value="razred">Tehničar za računalstvo</option>
                            <option value="razred">Strojarski računalni tehničar</option>
                            <option value="razred">Tehničar za mehatroniku</option>
                            <option value="razred">Tehničar za elektroniku</option>
                        </select>
                        <div class="unos">
                            <input type="submit" class="tipka" name="registriraj" value="Registriraj me" required>
                        </div>
                    </div>
            </div>
        </div>



</body>

</html>