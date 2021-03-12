<?php

require './MySqlDB.php';

parse_str(file_get_contents('php://input'), $adatom);
print_r($adatom);
$mySql = new MySqlDB();
$id = $adatom["id"];
$kep = $adatom["kep"];
$nev = $adatom["nev"];
$tel = $adatom["tel"];

$updateString = "id='" . $id . "', nev='" . $nev . "',tel='" . $tel . "'kep='" . $kep . "'";

$mySql->frissit("telefonkonyvem", $updateString, "id=".$id);
