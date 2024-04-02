<?php
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");
include(ROOT_PATH . "/aplikacija/pomoc/provjeriKorisnika.php");
$greške = array();
if(isset($_POST['register_btn'])){

    $greške = provjeriKorisnika($_POST);
    
    if (count($greške) === 0) {
        unset($_POST['register_btn']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $korisnik_id = unesi('korisnici', $_POST);
        $korisnik = odaberiJedan('korisnici', ['id' => $korisnik_id]);

        $_SESSION['id'] = $korisnik_id;
   
        $_SESSION['ime'] = $korisnik['ime'];
        $_SESSION['prezime'] = $korisnik['prezime'];
       
        $_SESSION['razred'] = $korisnik['razred'];
        $_SESSION['smjer'] = $korisnik['smjer'];
        $_SESSION['admin'] = $korisnik['admin'];

        header("Location: index.php");
      
        exit();
    } else {
        $errors = $greške; 
    }
}
?>