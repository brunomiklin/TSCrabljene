<?php
include("../path.php");
include(ROOT_PATH . "/aplikacija/logike/objavaljuj.php");
if (!isset($_SESSION['ime'])) {
    // Ako sesija nije postavljena, preusmjeri korisnika na drugu stranicu
    header("Location: ../index.php"); 
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
    <link rel="stylesheet" href="..\dodaci\css\objava.css" />

    <!--FONTOVI-->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
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
                <a href="https://tsck.hr/"><span>TŠČ</span></a>
                Rabljene
                <i class="fas fa-book"></i>
                <!-- Koristite 'fas' umjesto 'fa-solid' za Font Awesome ikonu -->
            </h1>
        </div>


    </header>

    <div class="glavni-okvir">
        <div class="lijevi-pokaznik">

            <ul>
                <li><a href="index">Uredi Objave</a></li>
                <ul class="navigacija">
                    <li>
                        <!--TIPKA PROJEKT-->
                        <a href="../">PROJEKT</a>
                        <a>
                            <?php echo $_SESSION['ime'] . ' ' . $_SESSION['prezime'] . ' ' . $_SESSION['razred'] . '. ' . $_SESSION['smjer']; ?></a>
                    </li>
                    <li><a href="../odjava.php" class="ime" style="color:red">Odjavi se</a></li>
                </ul>

            </ul>
        </div>
        <div class="admin-komande">
            <div class="tipkice">
                <button class="button tipkice">
                    <a href="objavioglas">Dodaj Objavu</a>
                </button>
            </div>

            <div class="sadrzaj">
                <h2 class="naziv-stranice">Moje objave</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Naziv</th>
                        <th>Autor</th>
                        <th colspan="2">Akcija</th>
                    </thead>
                    <tbody>
                        <?php  $brojac=1;
                        foreach ($objave as $key => $objava): ?>

                        <?php  if ($objava['korisnik_id'] == $_SESSION['id']): ?>
                        <tr>
                            <td><?php echo $brojac++;?></td>
                            <td><?php echo $objava['naslov']?></td>
                            <td><?php echo $_SESSION['ime'] . ' ' . $_SESSION['prezime'] ?></td>
                            <td><a href="uredioglas.php?id=<?php echo $objava['id'];?>" class="uredi">Uredi</a></td>
                            <td><a href="index.php?delete_id=<?php echo $objava['id'];?>" class=" obrisi">Obriši</a>
                            </td>
                        </tr>
                        <?php endif; ?>
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

</body>

</html>