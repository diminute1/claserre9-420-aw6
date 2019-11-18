<?php
include_once './Model/Class/Formulaire.php';
include_once './Model/DAO/FormulaireDAO.php';
$id = 0;
$form = $data;
?>
<script>
    function showExo() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("body_exo").innerHTML += this.responseText;
            }
        };
        xmlhttp.open("GET", "./voir_exo.php?form=<?= $form->getId() ?>", true);
        xmlhttp.send();
    }

    function delete_exo(id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(id).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "./delete_exo.php?id=" + id + '', true);
        xmlhttp.send();
    }


    function update(id) {
        var n = document.getElementById('n' + id).value;
        var d = document.getElementById('d' + id).value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(id).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "./update_exo.php?id=" + id + '&name=' + n + "&duree=" + d, true);
        xmlhttp.send();
    }

    function addExo() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("body_exo").innerHTML += this.responseText;
            }
        };
        xmlhttp.open("GET", "./add_exo.php?form=<?= $form->getId() ?>", true);
        xmlhttp.send();
    }

    function save() {
        var sport = document.getElementById('sport').value;
        var bpm = document.getElementById('bpm').value;
        var fre = document.getElementById('frequence').value;
        var type = document.getElementById('type').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./save_changes.php?id=<?= $form->getId() ?>" + '&sport=' + sport + "&bpm=" + bpm + "&fre=" + fre + "&type=" + type, true);
        xmlhttp.send();
    }


    window.onload = showExo();
</script>
<a href="?" class="btn btn-primary">retour</a>
<div class="container border rounded">
    <form class="form" style="text-align:center" style="margin-left: 20%;margin-right: 20%">
        Nom de l'activité
        <br>
        <input id="sport" class="formuElement" onchange="save()" type="text" value="<?= $form->getSport() ?>">
        <br>
        Type de l'activité
        <br>
        <select id="type" onchange="save()" class="formuElement" name="type">
            <option>---</option>
            <option id="continue">continue</option>
            <option id="interval">interval</option>
            <option id="varié">varié</option>
        </select>
        <br>
        <div id="body_exo">
        </div>
        <hr style="margin-left: 30%;margin-right: 30%">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajouter un exercice</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <span style="cursor: pointer" class="dropdown-item pointer">par nombre de répétition</span>
                <span style="cursor: pointer" class="dropdown-item" onclick="addExo()" href="">par durée</span>

            </div>
        </div>
        <hr style="margin-left: 20%;margin-right: 20%">
        Fréquence cardiaque
        <br>
        <input id="bpm" class="formuElement" onchange="save()" type="number" min="50" placeholder="BPM">
        <hr style="margin-left: 20%;margin-right: 20%">
        Nombre de fois pratiqué cette semaine
        <br>
        <input id="frequence" class="formuElement" onchange="save()" type="number" min="1" max="7" style="width: 3em;">
        <br />
        <hr />
        <button class="btn btn-primary" type="submit">Remettre</button>
        <br><br>
        <hr>
    </form>
</div>
<script>
    //    document.getElementsByClassName('formuElement').onchange = function () {
    //        save('<?= $form->getId() ?>');
    //    };
    if ('<?= $form->getBpm() ?>' != '') {
        document.getElementById('<?= $form->getType() ?>').selected = 'selected';
    }
    if ('<?= $form->getBpm() ?>' != '') {
        document.getElementById('frequence').value = '<?= $form->getFrequence() ?>';
    }
    if ('<?= $form->getBpm() ?>' != '') {
        document.getElementById('bpm').value = '<?= $form->getBpm() ?>';
    }
</script>