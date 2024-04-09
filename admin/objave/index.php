<?php
include("../../path.php");
include(ROOT_PATH . "/aplikacija/logike/objavaljuj.php");

if ($_SESSION['admin'] != 1) {

    header("Location: ../../index.php"); 
    exit();
}
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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Lista oglasa</title>
</head>

<body>
    <header>
        <!--LOGO TSC RABLJENE-->
        <div class="logo">
            <h1 class="logo-tekst">
                <a href="https://tsck.hr/"><span><i class="fa-solid fa-gear"></i></span></a>
                ADMIN

                <!-- Koristite 'fas' umjesto 'fa-solid' za Font Awesome ikonu -->
            </h1>
        </div>




    </header>

    <div class="glavni-okvir">
        <div class="lijevi-pokaznik">
            <ul>
                <li><a href="index.php">Uredi Objave</a></li>
                <li><a href="../korisnici/index.php">Uredi Korisnike</a></li>
                <li> <a href="../../index.php" class="ime">PROJEKT</a></li>
                <li><a href="../../odjava.php" class="ime" style="color:red">Odjavi se</a></li>

            </ul>
        </div>
        <div class="admin-komande">


            <div class="sadrzaj">
                <h2 class="naziv-stranice">Uredi Objave</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Naziv</th>
                        <th>Autor</th>
                        <th colspan="1">Akcija</th>
                        <th>Objava</th>
                    </thead>
                    <tbody>
                        <?php  $brojac=1;
                        foreach ($objave as $key => $objava): ?>


                        <tr>
                            <td><?php echo $brojac++;?></td>
                            <td><?php echo $objava['naslov']?></td>
                            <td><?php $korisnik_id = $objava['korisnik_id'];
                                    $korisnik = odaberiJedan('korisnici',['id' => $korisnik_id ]);
                                    echo ($korisnik['ime']. ' ' . $korisnik['prezime']);
                            ?>

                            <td><a href="?delete_id2=<?php echo $objava['id'];?>" class="obrisi">Obriši</a></td>
                            <td><a href="../../objava.php?id=<?php echo $objava['id']; ?>"
                                    style="color: green;">LINK</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
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