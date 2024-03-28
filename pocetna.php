<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />
    <link rel="stylesheet" href="dodaci/css/pocetna.css">
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
    <?php include("aplikacija/umetci/zaglavlje.php")?>
    <!--//UMETNUTO ZAGLAVLJE-->



    <!--PROJEKT OKVIR-->
    <section id="projekt-okvir">
        <h1 class="naslov-slider">PROJEKT</h1>
        <p></p>
        </div>
    </section>
    <!--//PROJEKT OKVIR-->

    <!--UMETANJE PODNOŽJA-->
    <?php include("aplikacija/umetci/podnožje.php")?>
    <!--//UMETANJE PODNOŽJA-->

    <!--SKRIPTA ZA DROPDOWN NA MOBITELU-->
    <script src="dodaci/js/skripta_dropdown.js"></script>
    <!--//SKRIPTA ZA DROPDOWN NA MOBITELU-->


    <!--SKRIPTA ZA SKROLANJE NA VRH-->
    <script>
    function naVrh() {
        window.scrollTo(0, 0)
    }
    </script>
    <!--//SKRIPTA ZA SKROLANJE NA VRH-->

</body>

</html>