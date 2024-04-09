<?php
include("../path.php");
include(ROOT_PATH . "/aplikacija/logike/objavaljuj.php");

?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />

    <!-- CSS -->
    <link rel="stylesheet" href="../dodaci/css/objava.css" />

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <link href="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous" rel="stylesheet">

    <title>Objavi oglas</title>
</head>

<body>
    <header>
        <!-- LOGO TSC RABLJENE -->
        <div class="logo">
            <h1 class="logo-tekst">
                <a href="https://tsck.hr/"><span>TŠČ</span></a>
                Rabljene
                <i class="fas fa-book"></i>
            </h1>
        </div>
    </header>

    <div class="glavni-okvir">
        <div class="lijevi-pokaznik">
            <ul>
                <li><a href="index.php">Uredi Objave</a></li>
            </ul>
        </div>

        <div class="admin-komande">
            <div class="sadrzaj">
                <h2 class="naziv-stranice">Objavi oglas</h2>
                <form action="objavioglas.php" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Naslov oglasa</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="naslov"
                            placeholder="Prodajem rabljene..." maxlength="50" required>
                    </div>
                    <label for="razred" class="form-label">Razred</label>
                    <div class="unos podataka">
                        <select id="razred" name="razred">
                            <option value="4">4. razred</option>
                            <option value="3">3. razred</option>
                            <option value="2">2. razred</option>
                            <option value="1">1. razred</option>
                        </select>
                    </div>
                    <label for="smjer" class="form-label">Smjer</label>
                    <div class="unos podataka">
                        <select id="razred" name="smjer">
                            <option value="RT">Tehničar za računalstvo</option>
                            <option value="ST">Strojarski računalni tehničar</option>
                            <option value="MT">Tehničar za mehatroniku</option>
                            <option value="ET">Tehničar za elektrotehniku</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kontakt" class="form-label">Kontakt</label>
                        <input type="text" class="form-control" id="kontakt" name="kontakt" placeholder="09********"
                            maxlength="11" required>
                    </div>
                    <div class="mb-3">
                        <label for="cijena" class="form-label">Cijena</label>
                        <input type="text" class="form-control" id="cijena" name="cijena" placeholder="25 (€)"
                            maxlength="5" required>
                    </div>
                    <div class="mb-3">
                        <label for="opis" class="form-label">Opis</label>
                        <textarea class="form-control" id="opis" name="opis" rows="3" maxlength="250"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="slika" class="form-label">Prenesi jednu sliku:</label>
                        <input class="form-control form-control-sm" id="slika" name="slika" type="file" required>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm" name="objavi"
                        style="background-color: #ADD08B; border: 1px black;" value="OBJAVI">Objavi</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="/js/skriptaadmin.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>