<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Bruno Miklin 4RT" />

    <!--CSS-->
    <link rel="stylesheet" href="..\dodaci\css\objava.css" />

    <!--FONTOVI-->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5b2a28928a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet" />
    <title>Objavi oglas</title>
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
                <li><a href="index.php">Uredi Objave</a></li>
            </ul>
        </div>

        <div class="admin-komande">

            <div class="sadrzaj">
                <h2 class="naziv-stranice">Objavi oglas</h2>


                <form action="objavioglas.php" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Naziv oglasa</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Prodajem rabljene...">
                    </div>
                    <label for="formGroupExampleInput" class="form-label">Razred</label>
                    <div class="unos podataka">
                        <select id="razred">
                            <option value="razred">4. razred</option>
                            <option value="razred">3. razred</option>
                            <option value="razred">2. razred</option>
                            <option value="razred">1. razred</option>
                        </select>
                    </div>
                    </br>
                    <label for="formGroupExampleInput" class="form-label">Smjer</label>
                    <div class="unos podataka">

                        <select id="razred">
                            <option value="razred">Tehničar za računalstvo</option>
                            <option value="razred">Strojarski računalni tehničar</option>
                            <option value="razred">Tehničar za mehatroniku</option>
                            <option value="razred">Tehničar za elektroniku</option>
                        </select>
                    </div>

                    </br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Kontakt</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="09********">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Cijena</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="25 (€)">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
            </textarea>
                        </br>

                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label" style="border: 1px black;">Prenesi jednu
                            sliku:</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm"
                        style="background-color: #ADD08B; border: 1px black;">OBJAVI</button>
            </div>
        </div>
        </form>
    </div>

    <!--JQuery-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!--SKRIPTA ZA ADMIN-->
    <script src="/js/skriptaadmin.js"></script>
    <!--SKRIPTA ZA DROPDOWN NA MOBITELU-->
    <script src="/js/scripts.js"></script>
</body>

</html>