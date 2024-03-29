<?php

use function PHPSTORM_META\elementType;

require ('konekcija.php');


function ispis($vrijednost)
{
    echo "<pre>",print_r($vrijednost, true),"</pre>";
    die();
}

//FUNKCIJA KOJA IZVRŠAVA UPIT (POZOVE SE KASNIJE U DRUGIM FUNCKIJAMA)
function izvršiUpit($sql, $podaci)
{
global $konek;
$stmt = $konek->prepare($sql);
$vrijednosti = array_values($podaci);
$tipovi = str_repeat('s',count($vrijednosti));
$stmt->bind_param($tipovi, ...$vrijednosti);
$stmt->execute();
return $stmt;
}
//--FUNKCIJA KOJA IZVRŠAVA UPIT (POZOVE SE KASNIJE U DRUGIM FUNCKIJAMA)

//FUNKCIJA KOJA ODABERE SVE IZ TABLICE (ZAŠTITA OD SQL INJECTIONA)
function odaberiSve($tablica , $uvijeti = [])
{
    global $konek;
    $sql = "SELECT * FROM $tablica";
    if(empty($uvijeti))
    {

        $stmt = $konek->prepare($sql);
        $stmt->execute();
        $podaci = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $podaci;
        
    }else{
        $i=0;
        foreach ($uvijeti as $key => $value) {
            if($i===0)
            {
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
       

    }
 
  
    $stmt = izvršiUpit($sql,$uvijeti);
    $podaci = $stmt->get_result()->fetch_assoc();
    return $podaci;
    

}
//--FUNKCIJA KOJA ODABERE SVE IZ TABLICE (ZAŠTITA OD SQL INJECTIONA)

//FUNKCIJA KOJA ODABERE JEDAN ELEMENT
function odaberiJedan($tablica , $uvijet)
{
    global $konek;
    $sql = "SELECT * FROM $tablica";
    
        $i=0;
        foreach ($uvijet as $key => $value) {
            if($i===0)
            {
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
       
    $sql = $sql . " LIMIT 1";
    
 
    $stmt = izvršiUpit($sql,$uvijet);
    $podaci = $stmt->get_result()->fetch_assoc();
    return $podaci;
    
}
//--FUNKCIJA KOJA ODABERE JEDAN ELEMENT


//FUNKCIJA KOJA UNOSI NESTO U TABLICU

function unesi($tablica,$podaci)
{
    //$sql = "INSERT INTO korisnici SET ....
    global $konek;
  $sql = "INSERT INTO korisnici SET";
  $i=0;
  foreach ($podaci as $key => $value) {
      if($i===0)
      {
          $sql = $sql . " $key=?";
      }else{
          $sql = $sql . ", $key=?";
      }
      $i++;
  }

  $stmt = izvršiUpit($sql,$podaci);
  $id = $stmt->insert_id;
  return $id;

}
//--FUNKCIJA KOJA UNOSI NESTO U TABLICU

$podatkci = [
    'admin' => '1',
    'email' => 'bruno@lol15.hr',
    'lozinka'=> '54321',
    'ime'=>'bruno',

  
   
];

$user = unesi('korisnici', $podatkci);
ispis($user);