<header>
    <!--LOGO TSC RABLJENE-->
    <div class="logo">
        <h1 class="logo-tekst">
            <a href="https://tsck.hr/"><span>TŠČ</span></a>Rabljene
            <i class="fa-solid fa-book"></i>
        </h1>
    </div>
    <i class="fa fa-bars meni-crtice"></i>
    <ul class="navigacija">
        <li>
            <!--TIPKA PROJEKT-->
            <a href="index.php">PROJEKT</a>
        </li>
        <li>
            <!--DROP DOWN RAZREDI-->
            <a href="index.php">RAZRED
                <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
            </a>

            <ul>
                <li><a href="prvi.php">1. razred</a></li>
                <li><a href="drugi.php">2. razred</a></li>
                <li><a href="treci.php">3. razred</a></li>
                <li><a href="cetvrti.php">4. razred</a></li>
            </ul>
        </li>

        <!-- Uvjetno prikazivanje ovisno o statusu prijave korisnika -->
        <?php if(isset($_SESSION['id'])): ?>
        <li>
            <!--DROP DOWN IME PREZIME RAZRED-->
            <a href="#" class="ime">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['ime'] . ' ' . $_SESSION['prezime'] . ' ' . $_SESSION['razred'] . '. ' . $_SESSION['smjer']; ?>
                <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
            </a>
            <ul>
                <!-- Ako je korisnik admin, prikaži Dashboard, inače prikaži opciju za objavu oglasa -->
                <?php if($_SESSION['admin']): ?>
                <li><a href="admin/objave/index.php">Dashboard</a></li>
                <?php else: ?>
                <li><a href="korisnik/index.php">Objavi oglas</a></li>
                <?php endif; ?>
                <li><a href="odjava.php" class="odjava">Odjavi se</a></li>
            </ul>
        </li>
        <?php else: ?>
        <!-- Ako korisnik nije prijavljen, prikaži opcije za registraciju i prijavu -->
        <li><a href="register.php">Registriraj se</a></li>
        <li><a href="login.php">Logiraj se</a></li>
        <?php endif; ?>
    </ul>
</header>


</html>