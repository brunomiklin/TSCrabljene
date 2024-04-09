<?php include("path.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dodaci/css/gotova_objava.css">

    <title>OBJAVA</title>
    <!--FONTOVI-->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Pocetna</title>
</head>

<body>
    <header>
        <!--LOGO TSC RABLJENE-->
        <div class="logo">
            <h1 class="logo-tekst">
                <a><span>OBJAVA</span></a>
                <i class="fa-solid fa-book"></i>
            </h1>
        </div>
        <i class="fa fa-bars meni-crtice"></i>
        <ul class="navigacija">
            <li>
                <!--DROP DOWN IME PREZIME RAZRED-->
                <a href="#" class="ime">
                    <i class="fa fa-user"></i>
                    Bruno Miklin 4.RT
                    <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
                </a>
                <ul>
                    <li><a href="#">Objavi oglas</a></li>
                    <li><a href="#" class="odjava">Odjavi se</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!--SLIKE-->
    <h3>PRODAJEM RABLJENE KNJIGE ZA SMJER TEHNIČAR ZA RAČUNALSTVO</h3>
    <div class="content-container">
        <div class="opis">
            <h1>Oglas objavio:<span> Bruno Miklin</span></h1>
            <h1>Smjer: <span> Tehničar za računalstvo </span></h1>
            <h1>Razred:<span> 4.</span></h1>
            <h1>Kontakt:<span> 099 655 9429</span></h1>
            <h1>Cijena:<span> 50$</span></h1>
            <h1>Datum:<span> 21.1.2021.</span></h1>
            <h1>Opis:</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum,
                libero? Illo reprehender
            </p>

        </div>
        <div class="slider-container">
            <div class="slider">
                <img class="mySlides" src="/slike/slika1.png">
            </div>

        </div>

    </div>
    <!--/SLIKE-->

    <!--ZAGLAVLJE-->
    <div class="zaglavlje">
        <div class="zaglavlje-tekst">
            <div class="zaglavlje-sekcija logorabljene">
                <h1>
                    <span>TŠČ </span>Rabljene
                    <i class="fa-solid fa-book"></i>
                </h1>
            </div>
            <div class="zaglavlje-sekcija povratak">
                <a id="tipka" href="#">VRATI ME GORE <i class="fa-solid fa-arrow-up" style="font-size: 0.8em"></i></a>
            </div>
            <div class="zaglavlje-sekcija logotsc">
                <img src="/slike/tscklogo2.png" alt="">
            </div>
        </div>
        <div class="dnozaglavlja">
            <br></br>
            &copy; TŠČ 2024. | Izradio Bruno Miklin
        </div>
    </div>
    <!--SKRIPTE-->
    <!--JQueary-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--SKRIPTA ZA DROPDOWN NA MOBITELU-->
    <script src="/js/scripts.js"></script>

</body>

</html>