/*script du modal*/

var connexionLink = document.getElementById('connexionLink');
var connexionModal = new bootstrap.Modal(document.getElementById('connexionModal'));

connexionLink.onclick = function() {
    connexionModal.show();
}

function redirectToGoogle() {
    
    window.location.href = 'URL_DE_CONNEXION_GOOGLE';
}


var reservationLink = document.getElementById('reservationLink');
var reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'));

reservationLink.onclick = function() {
    reservationModal.show();
}