<?php

    $processorName = $_POST["processors"];
    include "ConnectionDB.php";
    include "index.php";
    
    $processorId = $db->processors->findOne(['processor_name' => $processorName])["ID_processor"];

    $result = array();
    $count = 0;
    foreach ($db->computers->find() as $row) {
        if($row["FID_processor"] == $processorId) 
        {
            $result[$count] = $row;
            $count++;
        }
    }
    
    include "BuildTable.php";
?>