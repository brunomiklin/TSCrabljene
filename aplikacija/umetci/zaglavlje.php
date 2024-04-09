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
            <a href="#">RAZRED
                <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
            </a>

            <ul>
                <li><a href="prvi_razred.php">1. razred</a></li>
                <li><a href="drugi_razred.php">2. razred</a></li>
                <li><a href="treci_razred.php">3. razred</a></li>
                <li><a href="cetvrti_razred.php">4. razred</a></li>
            </ul>
        </li>

        <!-- Uvjetno prikazivanje ovisno o statusu prijave korisnika -->
        <?php if(isset($_SESSION['id'])): ?>
        <li>
            <!--DROP DOWN IME PREZIME RAZRED-->
            <a href="#" class="ime">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['ime'] . ' ' . $_SESSION['prezime'] . ' ' . $_SESSION['razred'] . '.' . $_SESSION['smjer']; ?>
                <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
            </a>
            <ul>
                <!-- Ako je korisnik admin, prikaži Dashboard, inače prikaži opciju za objavu oglasa -->
                <?php if($_SESSION['admin']): ?>
                <li><a href="admin/objave/index.php">Dashboard</a></li>
                <?php else: ?>
                <li><a href="korisnik/index.php">Objavi oglas</a></li>
                <?php endif; ?>
                <li><a href="../../tscrabljene/odjava.php" class="odjava">Odjavi se</a></li>
            </ul>
        </li>
        <?php else: ?>
        <!-- Ako korisnik nije prijavljen, prikaži opcije za registraciju i prijavu -->
        <li><a href="register.php">Registriraj se</a></li>
        <li><a href="login.php">Prijavi se</a></li>
        <?php endif; ?>
    </ul>
</header>