<!DOCTYPE html>

<html>
    <head>
    <title>Компьютеры организации</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lab1.css">
    <script src="localStorage.js"></script>
    </head>

    <body id = "body" onload = "OnLoadBody();">
        <?php
        include "ConnectionDB.php";
        ?>
        <button onclick = "localStorage.clear();">Очистить local storage!</button>
       <div>
        <form action="GetComputersByProcessorType.php" method ="post">
            <select id = "processors" name="processors">
                    <?php
                        foreach ($db->processors->find() as $row) {
                            $value = $row["processor_name"];
                            echo "<option value=\"$value\">$value</option>";
                        }
                    ?>
            </select>
            <input type="submit" value="Вывести результат" onclick = "OnSubmitProcessorType();">
            <input type="button" value="Результат из local storage" onclick = "OnClickProcessorType();">
        </form>

        <form action="GetComputersBySoftware.php" method ="post">
        <select id = "software" name="software">
                <?php
                    foreach ($db->software->find() as $row) {
                        $value = $row["software_name"];
                        echo "<option value=\"$value\">$value</option>";
                    }
                ?>
        </select>
        <input type="submit" value="Вывести результат" onclick = "OnSubmitSoftware();">
        <input type="button" value="Результат из local storage" onclick = "OnClickSoftware();">
        </form>


        <form action="GetComputersByExpiredGuarantee.php" method ="post">
        <select id = "guarantee" name="guarantee">
                <option value="<">Истекший срок гарантии</option>
                <option value=">">Действующий срок гарантии</option>
        </select>
        <input type="submit" value="Вывести результат" onclick = "OnSubmitGuarantee();">
        <input type="button" value="Результат из local storage" onclick = "OnClickGuarantee();">
        </form>
        </div>
        
        <div id = "div_result">
        </div>

    </body>
</html>
