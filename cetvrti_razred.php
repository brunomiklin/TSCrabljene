<?php include ("path.php");
include (ROOT_PATH . "/aplikacija/baza/funkcije.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />
    <link rel="stylesheet" href="dodaci/css/razred.css" />
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
    <!--UMETNUTO ZAGLAVLJE-->
    <?php include ("aplikacija/umetci/zaglavlje.php") ?>
    <!--//UMETNUTO ZAGLAVLJE-->


    <!--OKVIR SLIDERA-->

    <div class="okvir-slidera">
        <!--SLIDER ZA OBJAVE - STROJARSTVO-->

        <div class="slider-objave" id="strojarstvo">
            <h1 class="naslov-slider">STROJARSKI RAČUNALNI TEHNIČAR - 4.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-strojari"></i>
            <i class="fas fa-chevron-right sljedeca-strojari"></i>
            <div class="okvir-objava-strojari">
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">
                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udžbenici.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Strojarski računalni teničar.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Niko Trstenjak</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href=""></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/tscklogo.png" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenici-osnovna-skola.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za mehatroniku.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Franjo Kranjčec</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>

                </div>
            </div>

        </div>


        <!--//SLIDER ZA OBJAVE-->

        <!--SLIDER ZA OBJAVE - RAČUNALSTVO-->

        <div class="slider-objave" id="racunalstvo">
            <h1 class="naslov-slider">TEHNIČAR ZA RAČUNALSTVO - 4.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-racunalci"></i>
            <i class="fas fa-chevron-right sljedeca-racunalci"></i>
            <div class="okvir-objava-racunalci">
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udžbenici.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Strojarski računalni teničar.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Niko Trstenjak</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/tscklogo.png" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenici-osnovna-skola.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za mehatroniku.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Franjo Kranjčec</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
            </div>

        </div>


        <!--//SLIDER ZA OBJAVE-->

        <!--SLIDER ZA OBJAVE - TEHNIČAR ZA MEHATRONIKU-->

        <div class="slider-objave" id="mehatronika">
            <h1 class="naslov-slider">TEHNIČAR ZA MEHATORNIKU - 4.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-mehici"></i>
            <i class="fas fa-chevron-right sljedeca-mehici"></i>
            <div class="okvir-objava-mehici">
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udžbenici.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Strojarski računalni teničar.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Niko Trstenjak</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        &nbsp;
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>

                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/tscklogo.png" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenici-osnovna-skola.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za mehatroniku.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Franjo Kranjčec</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
            </div>
        </div>





        <!--SLIDER ZA OBJAVE - ELEKTROTENHIČAR-->
        <div class="slider-objave" id="elektrotehnika">
            <h1 class="naslov-slider">ELEKTROTENHIČAR - 4.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-elektrici"></i>
            <i class="fas fa-chevron-right sljedeca-elektrici"></i>
            <div class="okvir-objava-elektrici">
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udžbenici.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Strojarski računalni teničar.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Niko Trstenjak</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenik-test1.jpeg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/tscklogo.png" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za računalstvo.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Bruno Miklin</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
                <div class="objava">
                    <img src="/slike/udzbenici-osnovna-skola.jpg" alt="" class="slika-objava" />
                    <br>
                    <div class="objava-opis">

                        <a href="objava.php">
                            Prodajem udžbenike - Tehničar za mehatroniku.</a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a>Franjo Kranjčec</a>
                        &nbsp;
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a> 11.1.2024.</a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: 25€</a>
                    </div>
                </div>
            </div>


        </div>

        <!--UMETANJE PODNOŽJA-->
        <?php include ("aplikacija/umetci/podnožje.php") ?>
        <!--//UMETANJE PODNOŽJA-->



        <!--JQueary-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

        <!--SKRIPTA ZA SLIDER-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>

        <script src="dodaci/js/skripta_slider_sliki.js"></script>

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