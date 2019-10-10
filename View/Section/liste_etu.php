<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_FILES["file"])) {

            //if there was an error uploading the file
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else {
                //Print file details
                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
            }
            if ($file = fopen($_FILES["file"]["tmp_name"], "r")) {
                $firstline = fgets($file, 4096);
                //Gets the number of fields, in CSV-files the names of the fields are mostly given in the first line
                $num = strlen($firstline) - strlen(str_replace(";", "", $firstline));

                //save the different fields of the firstline in an array called fields
                $fields = array();
                $fields = explode(";", $firstline, ($num + 1));

                $line = array();
                $i = 0;

                //CSV: one line is one record and the cells/fields are seperated by ";"
                //so $dsatz is an two dimensional array saving the records like this: $dsatz[number of record][number of cell]
                while ($line[$i] = fgets($file, 4096)) {

                    $dsatz[$i] = array();
                    $dsatz[$i] = explode(";", $line[$i], ($num + 1));
                    $j=0;
                    foreach($dsatz[$i] as $isa){
                        $isa=str_replace('=', "",$isa);
                        $dsatz[$i][$j]=str_replace('"', "",$isa);
                        echo $j++." ".$isa;
                    }echo'<br/>';
                    
                    $etu=new Etudiant($dsatz[$i][0],$dsatz[$i][2],$dsatz[$i][3],$dsatz[$i][4]);
                    echo $etu;
                    EtudiantDAO::Create($etu);
                    $i++;
                }

                echo "<table>";
                echo "<tr>";
                for ($k = 0; $k != ($num + 1); $k++) {
                    echo "<td>" . $fields[$k] . "</td>";
                }
                echo "</tr>";

                foreach ($dsatz as $key => $number) {
                    //new table row for every record
                    echo "<tr>";
                    foreach ($number as $k => $content) {
                        //new table cell for every field of the record
                        echo "<td>" . $content . "</td>";
                    }
                }

                echo "</table>";
            }
        } else {
            echo "No file selected <br />";
        }
        ?>
    </body>
</html>
