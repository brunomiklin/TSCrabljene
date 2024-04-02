<?php
function provjeriKorisnika($korisnik)
{
    $greške = array();

    $postojeciKorisnik = odaberiJedan('korisnici', ['email' => $korisnik['email']]);
    if(isset($postojeciKorisnik))
    {
        array_push($greške,'Email je zauzet!');
    }
    return $greške;
}
?>