<?php

    $SoftwareName = $_POST["software"];
    include "ConnectionDB.php";
    include "index.php";

    $softwareId = $db->software->findOne(['software_name' => $SoftwareName])["ID_software"];
    $softwareItems = $db->computers_software->find(['FID_software' => $softwareId]);

    $result = array();
    $count = 0;
    foreach ($softwareItems as $item) {
        foreach ($db->computers->find() as $row) {
            if($row["ID_computer"] == $item["FID_computer"]) 
            {
                $result[$count] = $row;
                $count++;
            }
        }
    }
    
    include "BuildTable.php";
?>