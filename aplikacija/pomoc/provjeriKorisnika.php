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
function provjeriPodatke($korisnik)
{
    $greške = array();

    if(empty($korisnik['email'])) {
        array_push($greške, 'Email je obavezan');
    } else {
        $email = $korisnik['email'];
        $korisnik_iz_baze = odaberiJedan('korisnici', ['email' => $email]);
        if (!$korisnik_iz_baze) {
            array_push($greške, 'Ne postoji korisnik s ovim e-mailom');
        }
    }

    return $greške;
}
?>