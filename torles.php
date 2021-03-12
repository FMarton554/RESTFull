<?php

require './MySqlDB.php';


if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    $mysqldb = new MySqlDB();
    $mysqldb->torol("telefonkonyvem", "ID=" . $_GET['ID']);
}

