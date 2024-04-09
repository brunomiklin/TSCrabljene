<?php 
include(ROOT_PATH . "/aplikacija/baza/funkcije.php");
include(ROOT_PATH . "/aplikacija/pomoc/provjeriPost.php");
$tablica = 'objave';

$objave = odaberiSve($tablica);

$greške = array();



if(isset($_GET['id']))
{
    $objava = odaberiJedan($tablica, ['id'=> $_GET['id']]);


    $id = $objava['id'];
    $naslov=$objava['naslov'];
    $razred=$objava['razred'];
    $smjer=$objava['smjer'];
    $kontakt=$objava['kontakt'];
    $cijena=$objava['cijena'];
    $opis=$objava['opis'];
}
if(isset($_GET['delete_id2']))
{
   $broji = obrisi($tablica,$_GET['delete_id2']);
  
   header("location: ".$_SERVER['PHP_SELF']); 

 
}

if(isset($_GET['delete_id']))
{
   $broji = obrisi($tablica,$_GET['delete_id']);

   header("location:  ../korisnik/index.php");
   
}



if(isset($_POST['objavi'])) {

     if(!empty($_FILES['slika']['name']))
     {
         $slika_ime = time() . '_' . $_FILES['slika']['name'];
         $put = ROOT_PATH . "/dodaci/slike/" . $slika_ime;
         $rez = move_uploaded_file($_FILES['slika']['tmp_name'],$put);
     
       $_POST['slika'] = $slika_ime;
 }
}

 
if(isset($_POST['objavi'])) {
   
    unset($_POST['objavi']);

    $_POST['korisnik_id']=$_SESSION['id'];
    $post_id = unesi($tablica,$_POST);

header("location:  ../korisnik/index.php");
}

if(isset($_POST["uredi"]))
{
 
   $id = $_POST['id'];
   unset($_POST['uredi'],$_POST['id']);

    if(!empty($_FILES['slika']['name']))
    {
        $slika_ime = time() . '_' . $_FILES['slika']['name'];
        $put = ROOT_PATH . "/dodaci/slike/" . $slika_ime;
        $rez = move_uploaded_file($_FILES['slika']['tmp_name'],$put);
    
      $_POST['slika'] = $slika_ime;
    }
    $_POST['korisnik_id']=$_SESSION['id'];
    $post_id = azuriraj($tablica, $id, $_POST);

    header("location:  ../korisnik/index.php");
}