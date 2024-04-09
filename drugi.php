<?php 
include("path.php");
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");

$objave_strojarstvo = odaberiSve('objave', ['razred' => 2 , 'smjer' => 'ST']);
$objave_racunlastvo = odaberiSve('objave', ['razred' => 2 , 'smjer' => 'RT']);
$objave_mehatronika = odaberiSve('objave', ['razred' => 2 , 'smjer' => 'MT']);
$objave_eletrotehnika = odaberiSve('objave', ['razred' => 2 , 'smjer' => 'ET']);
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
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Pocetna</title>
</head>

<body>
    <!--UMETNUTO ZAGLAVLJE-->
    <?php include("aplikacija/umetci/zaglavlje.php")?>
    <!--//UMETNUTO ZAGLAVLJE-->

    <!--OKVIR SLIDERA-->
    <div class="okvir-slidera">
        <!--SLIDER ZA OBJAVE - STROJARSTVO-->
        <div class="slider-objave" id="strojarstvo">
            <?php if (!empty($objave_strojarstvo)): ?>
            <h1 class="naslov-slider">STROJARSKI RAČUNALNI TEHNIČAR - 2.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-strojari"></i>
            <i class="fas fa-chevron-right sljedeca-strojari"></i>
            <div class="okvir-objava-strojari">
                <?php foreach ($objave_strojarstvo as $objava):?>
                <div class="objava">
                    <img src="<?php echo 'dodaci/slike/' .$objava ['slika'] ?>"
                        alt="Dogodila se greška kod učitavanja slike!" class="slika-objava" />
                    <br>
                    <div class="objava-opis">
                        <a href="objava.php?id=<?php echo $objava['id']; ?>">
                            <?php echo $objava['naslov'] ?></a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a><?php $korisnik_id = $objava['korisnik_id'];
                                    $korisnik = odaberiJedan('korisnici',['id' => $korisnik_id ]);
                                    echo ($korisnik['ime']. ' ' . $korisnik['prezime']);
                            ?></a>
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a>
                        <?php echo date('F j, Y', strtotime($objava['datum']));?></a></a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: <?php  echo $objava['cijena']?>€</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <?php else: ?>
            <h1 class="naslov-slider">Nema objava</h1>
            <?php endif; ?>
        </div>
        <!--//SLIDER ZA OBJAVE - STROJARSTVO-->

        <!--SLIDER ZA OBJAVE - RAČUNALSTVO-->
        <div class="slider-objave" id="racunalstvo">
            <?php if (!empty($objave_racunlastvo)): ?>
            <h1 class="naslov-slider">TEHNIČAR ZA RAČUNALSTVO - 2.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-racunalci"></i>
            <i class="fas fa-chevron-right sljedeca-racunalci"></i>
            <div class="okvir-objava-racunalci">
                <?php foreach ($objave_racunlastvo as $objava):?>
                <div class="objava">
                    <img src="<?php echo 'dodaci/slike/' .$objava ['slika'] ?>"
                        alt="Dogodila se greška kod učitavanja slike!" class="slika-objava" />
                    <br>
                    <div class="objava-opis">
                        <a href="objava.php?id=<?php echo $objava['id']; ?>">
                            <?php echo $objava['naslov'] ?></a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a><?php $korisnik_id = $objava['korisnik_id'];
                                    $korisnik = odaberiJedan('korisnici',['id' => $korisnik_id ]);
                                    echo ($korisnik['ime']. ' ' . $korisnik['prezime']);
                            ?></a>
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a>
                        <?php echo date('F j, Y', strtotime($objava['datum']));?></a></a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: <?php  echo $objava['cijena']?>€</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <?php else: ?>
            <h1 class="naslov-slider">Nema objava</h1>
            <?php endif; ?>
        </div>
        <!--//SLIDER ZA OBJAVE - RAČUNALSTVO-->

        <!--SLIDER ZA OBJAVE - TEHNIČAR ZA MEHATRONIKU-->
        <div class="slider-objave" id="mehatronika">
            <?php if (!empty($objave_mehatronika)): ?>
            <h1 class="naslov-slider">TEHNIČAR ZA MEHATORNIKU - 2.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-mehici"></i>
            <i class="fas fa-chevron-right sljedeca-mehici"></i>
            <div class="okvir-objava-mehici">
                <?php foreach ($objave_mehatronika as $objava):?>
                <div class="objava">
                    <img src="<?php echo 'dodaci/slike/' .$objava ['slika'] ?>"
                        alt="Dogodila se greška kod učitavanja slike!" class="slika-objava" />
                    <br>
                    <div class="objava-opis">
                        <a href="objava.php?id=<?php echo $objava['id']; ?>">
                            <?php echo $objava['naslov'] ?></a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a><?php $korisnik_id = $objava['korisnik_id'];
                                    $korisnik = odaberiJedan('korisnici',['id' => $korisnik_id ]);
                                    echo ($korisnik['ime']. ' ' . $korisnik['prezime']);
                            ?></a>
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a>
                        <?php echo date('F j, Y', strtotime($objava['datum']));?></a></a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: <?php  echo $objava['cijena']?>€</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <?php else: ?>
            <h1 class="naslov-slider">Nema objava</h1>
            <?php endif; ?>
        </div>
        <!--//SLIDER ZA OBJAVE - TEHNIČAR ZA MEHATRONIKU-->

        <!--SLIDER ZA OBJAVE - ELEKTROTENHIČAR-->
        <div class="slider-objave" id="elektrotehnika">
            <?php if (!empty($objave_eletrotehnika)): ?>
            <h1 class="naslov-slider">ELEKTROTENHIČAR - 2.RAZRED</h1>
            <i class="fas fa-chevron-left prosla-elektrici"></i>
            <i class="fas fa-chevron-right sljedeca-elektrici"></i>
            <div class="okvir-objava-elektrici">
                <?php foreach ($objave_eletrotehnika as $objava):?>
                <div class="objava">
                    <img src="<?php echo 'dodaci/slike/' .$objava ['slika'] ?>"
                        alt="Dogodila se greška kod učitavanja slike!" class="slika-objava" />
                    <br>
                    <div class="objava-opis">
                        <a href="objava.php?id=<?php echo $objava['id']; ?>">
                            <?php echo $objava['naslov'] ?></a>
                        <br>
                        <i class="far fa-user"></i> <a href="" class="ime-autora"></a><?php $korisnik_id = $objava['korisnik_id'];
                                    $korisnik = odaberiJedan('korisnici',['id' => $korisnik_id ]);
                                    echo ($korisnik['ime']. ' ' . $korisnik['prezime']);
                            ?></a>
                        <i class="far fa-calendar"></i><a href="" class="datum-objave"></a>
                        <?php echo date('F j, Y', strtotime($objava['datum']));?></a></a>
                        <br>
                        <a href="" class="datum-objave"></a>Cijena: <?php  echo $objava['cijena']?>€</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <?php else: ?>
            <h1 class="naslov-slider">Nema objava</h1>
            <?php endif; ?>
        </div>
        <!--//SLIDER ZA OBJAVE - ELEKTROTENHIČAR-->
    </div>
    <!--//OKVIR SLIDERA-->

    <!--UMETANJE PODNOŽJA-->
    <?php include("aplikacija/umetci/podnožje.php")?>
    <!--//UMETANJE PODNOŽJA-->

    <!--JQueary-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!--SKRIPTA ZA SLIDER-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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