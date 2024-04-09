<?php include ("path.php");
include (ROOT_PATH . "/aplikacija/baza/funkcije.php");
?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />
    <link rel="stylesheet" href="dodaci/css/pocetna.css" />
    <!--FONTOVI-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
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
        <!--UMETNUTO ZAGLAVLJE-->
        <?php include ("aplikacija/umetci/zaglavlje.php") ?>
        <!--//UMETNUTO ZAGLAVLJE-->


        <!--PROJEKT OKVIR-->
        <section id="projekt-okvir">
            <h1 class="naslov-slider">PROJEKT</h1>
            <div>
                <p>Ovaj digitalni sustav omogućuje učenicima četverogodišnjih zanimanja Tehničke škole Čakovec
                    jednostavnu i
                    praktičnu mogućnost kupnje ili prodaje rabljenih udžbenika na kraju svake školske godine.<br><br>
                    Registracija ili prijava na web aplikaciju omogućuje korisnicima pristup određenim razredima ili
                    smjerovima
                    koje odaberu, pružajući im personalizirano iskustvo temeljeno na njihovim interesima. Također,
                    korisnici
                    imaju mogućnost stvaranja vlastitih objava kako bi predstavili udžbenike koje žele prodati drugim
                    korisnicima. Ova mogućnost omogućuje korisnicima direktno prezentiranje udžbenika koje žele prodati,
                    što
                    stvara prostor za obostrano zadovoljstvo prodavatelja i kupca.<br><br>
                    Kroz ovaj sustav, pruža se jednostavan, efikasan i profesionalan način olakšavanja procesa kupnje i
                    prodaje udžbenika, čime se štedi vrijeme i trud učenika te se im olakšava pristup potrebnim
                    materijalima
                    za učenje.<br><br>
                    Administrator ima dvije dodatne mogućnosti koje osiguravaju sigurno i profesionalno okruženje. To
                    uključuje
                    mogućnost brisanja objava koje su napravili korisnici, kao i mogućnost brisanja korisničkih računa.
                    Ove
                    funkcije omogućuju administratoru da održava red i sigurnost na platformi, čime se osigurava
                    povjerenje
                    svih korisnika u sustav.<br><br>

                    Smatra se da bi ova aplikacija uštedjela novac brojnim učenicima Tehničke škole Čakovec, a kasnije i
                    učenicima diljem regije. Pomoglo bi se i okolišu jer bi se štedjelo na proizvodnji novih udžbenika
                    te
                    inzistiralo na korištenju starih.</p>
            </div>
        </section>
        <!--//PROJEKT OKVIR-->


        <!--UMETANJE PODNOŽJA-->
        <?php include ("aplikacija/umetci/podnožje.php") ?>
        <!--//UMETANJE PODNOŽJA-->


        <!--JQueary-->
        <script src="
    https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
    "></script>

        <!--SKRIPTA ZA SLIDER-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>

        <script src="/js/custom.js"></script>


        <!--SKRIPTA ZA DROPDOWN NA MOBITELU-->
        <script src="dodaci/js/skripta_dropdown.js"></script>

        <!--SKRIPTA ZA SKROLANJE NA VRH-->
        <script>
        function naVrh() {
            window.scrollTo(0, 0)
        }
        </script>
</body>

</html>