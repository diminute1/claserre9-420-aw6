<script>
    function showExo() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("body_exo").innerHTML += this.responseText;
            }
        };
        xmlhttp.open("GET", "./voir_exo.php", true);
        xmlhttp.send();
    }

    
    function update(id) {
        var n = document.getElementById('n' + id).value;
        var d = document.getElementById('d' + id).value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(id).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "./update_exo.php?id=" + id + '&name=' + n + "&duree=" + d, true);
        xmlhttp.send();
    }

    function addExo() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("body_exo").innerHTML += this.responseText;
            }
        };
        xmlhttp.open("GET", "./add_exo.php", true);
        xmlhttp.send();
    }
    window.onload = showExo();
</script>

<div class="container" >
    <form class="form" style="text-align:center" style="margin-left: 20%;margin-right: 20%">
        Nom de l'activité
        <br>
        <input type="text">
        <br>
        Type de l'activité
        <br>
        <select name="type">
            <option value="-1">---</option>
            <option value=0>continue</option>
            <option value=1>interval</option>
            <option value=2>varié</option>
        </select>
        <br>
        <div id="body_exo" >
        </div>
        <hr style="margin-left: 30%;margin-right: 30%">
        <a class="btn btn-primary" onclick="addExo()">ajouter un exercice</a>
        <hr style="margin-left: 20%;margin-right: 20%">
        Fréquence cardiaque
        <br>
        <input type="number">
        <br><br><hr>
    </form>
</div>