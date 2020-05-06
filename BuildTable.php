<?php

if(count($result) == 0) 
    echo "<div id = \"result\" class = \"empty-result\">Запрос вернул пустой результат!!!</div>";
else 
{
    echo "<table border=\"1\" id = \"result\">";
    echo "<caption><h4>Таблица результатов:</h4></caption>";

    echo "<tr>";
    foreach ($result[0] as $key => $value) {
        if($key != "_id")
            echo "<th>$key</th>";
    }
    echo "</tr>";

    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            if($key != "_id")
                echo "<td>$value</td>";
        }
        echo "</th>";
    }
    echo "</table>";
}

?>