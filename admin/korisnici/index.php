<?php
include("../../path.php");
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");
?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />

    <!--CSS-->
    <link rel="stylesheet" href="..\..\dodaci\css\objava.css" />

    <!--FONTOVI-->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Uredi korisnike</title>
</head>

<body>
    <!--ZAGLAVLJE-->
    <header>
        <!--LOGO TSC RABLJENE-->
        <div class="logo">
            <h1 class="logo-tekst">
                <a href="https://tsck.hr/"><span><i class="fa-solid fa-gears"></i></i></span></a>
                ADMIN

                <!-- Koristite 'fas' umjesto 'fa-solid' za Font Awesome ikonu -->
            </h1>
        </div>
        <i class="fa fa-bars meni-crtice"></i>
        <ul class="navigacija">
            <li> <a href="../../index.php" class="ime">PROJEKT</a></li>
            <li>
            <li><a href="../../odjava.php" class="ime" style="color:red">Odjavi se</a></li>

            </li>
        </ul>
    </header>
    <!--//ZAGLAVLJE-->
    <div class="glavni-okvir">
        <div class="lijevi-pokaznik">
            <ul>
                <li><a href="../objave">Uredi Objave</a></li>
                <li><a href="index.php">Uredi Korisnike</a></li>
            </ul>
        </div>
        <div class="admin-komande">

            <div class="sadrzaj">
                <h2 class="naziv-stranice">Uredi korisnike</h2>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Ime i Prezime</th>
                        <th>Razred</th>
                        <th>Smjer</th>
                        <th>Uloga</th>
                        <th colspan="5">Akcija</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bruno Miklin</td>
                            <td>4.</td>
                            <td>Tehničar za računlastvo</td>
                            <td>Admin</td>
                            <td><a href="#" class="obrisi">Obriši</a></td>
                            <td><a href="#" class="obrisi" style="color: green;">Uredi</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Niko Trstenjak</td>
                            <td>4.</td>
                            <td>Strojraski računalni tehničar</td>
                            <td>Korisnik</td>
                            <td><a href="#" class="obrisi">Obriši</a></td>
                            <td><a href="#" class="obrisi" style="color: green;">Uredi</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--JQuery-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!--SKRIPTA ZA ADMIN-->
    <script src="/js/skriptaadmin.js"></script>
    <!--SKRIPTA ZA DROPDOWN NA MOBITELU-->
    <script src="/js/scripts.js"></script>
</body>

</html>