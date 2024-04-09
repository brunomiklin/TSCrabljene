<?php
session_start();//STARTAMO SESIJU
require('konekcija.php');

function ispis($vrijednost)
{
    echo "<pre>", print_r($vrijednost, true), "</pre>";
    die();
}

function izvršiUpit($sql, $podaci)
{
    global $konek;
    $stmt = $konek->prepare($sql);
    if (!$stmt) {
        echo "Error: " . $konek->error;
        return false;
    }
    
    $vrijednosti = array_values($podaci);
    $tipovi = !empty($vrijednosti) ? str_repeat('s', count($vrijednosti)) : '';
    
    if (!empty($tipovi)) {
        $stmt->bind_param($tipovi, ...$vrijednosti);
    }
    
    $stmt->execute();
    return $stmt;
}


function odaberiSve($tablica, $uvijeti = [])
{
    global $konek;
    $sql = "SELECT * FROM $tablica";
    if (!empty($uvijeti)) {
        $sql .= " WHERE ";
        $i = 0;
        foreach ($uvijeti as $key => $value) {
            if ($i > 0) {
                $sql .= " AND ";
            }
            $sql .= "$key=?";
            $i++;
        }
    }
    $stmt = izvršiUpit($sql, $uvijeti);
    $result = $stmt->get_result();
    $podaci = $result->fetch_all(MYSQLI_ASSOC);
    return $podaci;
}

function odaberiJedan($tablica, $uvijet)
{
    global $konek;
    $sql = "SELECT * FROM $tablica";
    $i = 0;
    foreach ($uvijet as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $stmt = izvršiUpit($sql, $uvijet);
    $podaci = $stmt->get_result()->fetch_assoc();
    return $podaci;
}

function unesi($tablica, $podaci)
{
    global $konek;
    $sql = "INSERT INTO $tablica SET ";
    $i = 0;
    $vrijednosti = [];
    foreach ($podaci as $key => $value) {
        if ($i === 0) {
            $sql .= "$key=?";
        } else {
            $sql .= ", $key=?";
        }
        $vrijednosti[] = $value;
        $i++;
    }
    $stmt = izvršiUpit($sql, $vrijednosti);
    $id = $stmt->insert_id;
    return $id;
}

function azuriraj($tablica, $id, $podaci)
{
    global $konek;
    $sql = "UPDATE $tablica SET";
    $i = 0;
    foreach ($podaci as $key => $value) {
        if ($i === 0) {
            $sql .= " $key=?";
        } else {
            $sql .= ", $key=?";
        }
        $i++;
    }
    $sql .= " WHERE id=?";
    $podaci['id'] = $id;
    $stmt = izvršiUpit($sql, $podaci);
    return $stmt->affected_rows;
}

function obrisi($tablica, $id)
{
    global $konek;
    $sql = "DELETE FROM $tablica WHERE id=?";
    $stmt = izvršiUpit($sql, ['id' => $id]);
    return $stmt->affected_rows;
}
?>