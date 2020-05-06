<?php
    $guarantee = $_POST["guarantee"];
    include "ConnectionDB.php";
    include "index.php";

    $today = new DateTime();
    $result = array();
    $count = 0;
    foreach ($db->computers->find() as $row) {
        $g = $row["guarantee"];
        $date = new DateTime($row["buy_date"]);
        $date->modify("+$g month");

        if(($guarantee == ">" &&  $date > $today ) ||
            ($guarantee == "<" && $date < $today)) 
        {
            $result[$count] = $row;
            $count++;
        }
    }
    
    include "BuildTable.php";
?>