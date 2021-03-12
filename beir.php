<?php

require './MySqlDB.php';
$mySql = new MySqlDB();
$nev = $_POST["nev"];
$tel = $_POST["tel"];
$kep = $_POST["kep"];

$mySql->ujRekord("telefonkonyvem", "(nev,tel,kep)", "('$nev','$tel','$kep')");
//print_r($_POST);
echo json_encode($_POST);
