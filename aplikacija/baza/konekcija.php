<?php

$host = 'localhost';
$korisnik = 'root';
$lozinka = '';
$baza_ime = 'tscrabljene_baza';

$konekcija = new MySQLi($host,$korisnik,$lozinka,$baza_ime);

if ($konekcija->connect_error) {
   die('Konekcija na bazu nije uspjela: ' . $konekcija->connect_error);

}

