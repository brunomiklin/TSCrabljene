<?php

$host = 'localhost';
$korisnik = 'root';
$lozinka = '';
$baza_ime = 'tscrabljene_baza';

$konek = new MySQLi($host,$korisnik,$lozinka,$baza_ime);

if ($konek->connect_error) {
   die('Konekcija na bazu nije uspjela: ' . $konek->connect_error);

}