<?php 
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");
include(ROOT_PATH . "/aplikacija/pomoc/provjeriPost.php");
$tablica = 'objave';

$objave = odaberiSve($tablica);

$greške = array();
if(isset($_POST['objavi'])) {
    unset($_POST['objavi']);

    $_POST['korisnik_id']=1;
    $post_id = unesi($tablica,$_POST);

    

header("location:  ../korisnik/index.php");
}
?>