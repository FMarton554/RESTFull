<?php

require './MySqlDB.php';

$mySql = new MySqlDB();

$telefonkonyvem = array();
$result = $mySql->lekerdez("telefonkonyvem");


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $telefonkonyvem[] = $row;
    }
    echo json_encode($telefonkonyvem);
} else {
    echo "0 results";
}
//print_r( $telefonkonyvem);

