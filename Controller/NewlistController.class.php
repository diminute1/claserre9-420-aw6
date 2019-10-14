<?php

require_once './Modele/DAO/EtudiantDAO.php';
require_once './Modele/Etudiant.php';

class NewlistController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_FILES["file"])) {
            return new Page('connected', "Accueil", null, null);
        }
        if ($_FILES["file"]["error"] > 0) {
            return new Page('connected', "Accueil", null, null);
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
                
                $j = 0;
                foreach ($dsatz[$i] as $isa) {
                    $isa = str_replace('=', "", $isa);
                    $dsatz[$i][$j++] = str_replace('"', "", $isa);                    
                }
                

                $etu = new Etudiant($dsatz[$i][0], $dsatz[$i][2], $dsatz[$i][3], $dsatz[$i][4]);
                EtudiantDAO::Create($etu);
                $i++;
            }
        } else {
            return new Page('connected', "Accueil", null, null);
        }
        return new Page("liste_etu", "Groupe", null, null);
    }

}
