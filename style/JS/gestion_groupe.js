document.getElementById('formpfof').addEventListener('submit', function (evt) {
    evt.preventDefault();
    ajaxGet('http://localhost/420-aw6-ro/?action=connexion', function (reponse) {
        console.log("LASERRE");
    });
})