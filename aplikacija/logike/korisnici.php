<?php
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");
include(ROOT_PATH . "/aplikacija/pomoc/provjeriKorisnika.php");
$greške = array();
$brojac=0;
$email = '';
$password = '';

function ulogirajKorisnika($korisnik)
{
    $_SESSION['id'] = $korisnik['id'];
    $_SESSION['ime'] = $korisnik['ime'];
    $_SESSION['prezime'] = $korisnik['prezime'];
    $_SESSION['razred'] = $korisnik['razred'];
    $_SESSION['smjer'] = $korisnik['smjer'];
    $_SESSION['admin'] = $korisnik['admin'];
}

if(isset($_POST['register_btn'])){

    $greške = provjeriKorisnika($_POST);
    
    if (count($greške) === 0) {
        unset($_POST['register_btn']);
        $_POST['admin'] = 0;
        $_POST['password'] = hash('sha512', $_POST['password']);

        $korisnik_id = unesi('korisnici', $_POST);
        $korisnik = odaberiJedan('korisnici', ['id' => $korisnik_id]);
        $_SESSION['id'] = $korisnik_id;
     
        ulogirajKorisnika($korisnik);
        header("Location: index.php");
      
        exit();
    } else {
        $errors = $greške; 
    }
}
if (isset($_POST["prijava"])) {
    $greške = provjeriPodatke($_POST);
    if (count($greške) === 0) {
        $korisnik = odaberiJedan('korisnici', ['email' => $_POST['email']]);

        $password_hash = $korisnik['password'];
        $_POST['password'] = hash('sha512', $_POST['password']);
        if ($korisnik && substr($password_hash, 0, 200) === substr($_POST['password'], 0, 200)) {
      
            ulogirajKorisnika($korisnik);


            header("Location: index.php");
            exit();
        } 
        else {
            $brojac=1;
    
        }

    }
    else {
        $brojac=1;

    }
}


?>