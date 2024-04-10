<?php
include("path.php");
include("aplikacija/logike/objavaljuj.php");


if(isset($_GET['id']))
{
    $objava = odaberiJedan('objave', ['id '=> $_GET['id']]);
    $korisnik_id = $objava['korisnik_id'];
    $korisnik = odaberiJedan('korisnici', ['id'=>  $korisnik_id]);
    $smjerovi = array(
        'RT' => 'Tehničar za računalstvo',
        'ST' => 'Strojarski računalni tehničar',
        'MT' => 'Tehničar za mehatroniku',
        'ET' => 'Elektrotehničar'
    );
    
}

?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />

    <!--CSS-->
    <link rel="stylesheet" href="dodaci/css/gotova_objava.css" />

    <!--FONTOVI-->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Lista oglasa</title>
</head>

<body>
    <header class="zaglavlje">
        <!--LOGO TSC RABLJENE-->
        <div class="logo">
            <h1 class="logo-tekst">
                <a href="#" class="strelica" onclick="history.back(); return false;"><i
                        class="fa-solid fa-arrow-left"></i></a>
                <a><span>OBJAVA</span></a>


            </h1>
        </div>


    </header>

    <div class="glavni-okvir">
        <div class="lijevi-pokaznik">

            <ul>
                <h3>Oglas objavio:<span> <?php echo $korisnik['ime'] . ' ' . $korisnik ['prezime'] ?></span></h3>
                <h3>Smjer: <span> <?php
                if (isset($objava['smjer'])) {
           
                    if (array_key_exists($objava['smjer'], $smjerovi)) {
               
                        echo $smjerovi[$objava['smjer']];
                    } else {
                      
                        echo $objava['smjer'];
                    }
                }
                    
                ?> </span></h3>
                <h3>Razred:<span> <?php echo $objava['razred'] ?>.</span></h3>
                <h3>Kontakt:<span> <?php echo $objava['kontakt'] ?> </span></h3>
                <h3>Cijena:<span> <?php echo $objava['cijena'] ?>€</span></h3>
                <h3>Datum:<span> <?php echo date('F j, Y', strtotime($objava['datum']));?></span></h3>
                <h3>Opis:<p><?php echo $objava['opis'] ?>
                    </p>
                </h3>





            </ul>
        </div>
        <div class="admin-komande">
            <div class="sadrzaj">
                <h2 class="naziv-stranice">Fotografija</h2>
                <img src="dodaci/slike/<?php echo $objava['slika'] ?>" alt="slika nije učitana">
            </div>
        </div>
    </div>



</body>

</html>