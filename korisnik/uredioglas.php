<?php
include("../path.php");
include(ROOT_PATH . "/aplikacija/logike/objavaljuj.php");
if (!isset($_SESSION['ime'])) {  header("Location: ../index.php"); 
    exit();
}
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
                <li><a href="index">Uredi Objave</a></li>
            </ul>
        </div>

        <div class="admin-komande">
            <div class="sadrzaj">
                <h2 class="naziv-stranice">Uredi oglas</h2>
                <form action="uredioglas.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Naslov oglasa</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="naslov"
                            placeholder="Prodajem rabljene..." maxlength="50" required value="<?php echo $naslov; ?>">
                    </div>
                    <label for="razred" class="form-label">Razred</label>
                    <div class="unos podataka">
                        <select id="razred" name="razred">
                            <option value="4" <?php if($razred == "4") echo "selected"; ?>>4. razred</option>
                            <option value="3" <?php if($razred == "3") echo "selected"; ?>>3. razred</option>
                            <option value="2" <?php if($razred == "2") echo "selected"; ?>>2. razred</option>
                            <option value="1" <?php if($razred == "1") echo "selected"; ?>>1. razred</option>
                        </select>
                    </div>
                    <label for="smjer" class="form-label">Smjer</label>
                    <div class="unos podataka">
                        <select id="razred" name="smjer">
                            <option value="RT" <?php if($smjer == "RT") echo "selected"; ?>>Tehničar za računalstvo
                            </option>
                            <option value="ST" <?php if($smjer == "ST") echo "selected"; ?>>Strojarski računalni
                                tehničar</option>
                            <option value="MT" <?php if($smjer == "MT") echo "selected"; ?>>Tehničar za mehatroniku
                            </option>
                            <option value="ET" <?php if($smjer == "ET") echo "selected"; ?>>Tehničar za elektrotehniku
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kontakt" class="form-label">Kontakt</label>
                        <input type="text" class="form-control" id="kontakt" name="kontakt" placeholder="09********"
                            maxlength="11" required value="<?php echo $kontakt; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cijena" class="form-label">Cijena</label>
                        <input type="text" class="form-control" id="cijena" name="cijena" placeholder="25 (€)"
                            maxlength="5" required value="<?php echo $cijena; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="opis" class="form-label">Opis</label>
                        <textarea class="form-control" id="opis" name="opis" rows="3" maxlength="250"
                            required><?php echo $opis; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="slika" class="form-label">Prenesi jednu sliku:</label>
                        <input class="form-control form-control-sm" id="slika" name="slika" type="file"
                            accept=".jpg, .jpeg .png" required>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm" name="uredi"
                        style="background-color: #ADD08B; border: 1px black;" value="OBJAVI">Azuriraj</button>
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