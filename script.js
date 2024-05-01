/*script du modal connexion*/

let connexionLink = document.getElementById('connexionLink');
let connexionModal = new bootstrap.Modal(document.getElementById('connexionModal'));

connexionLink.onclick = function() {
    connexionModal.show();
}

function redirectToGoogle() {
    
    window.location.href = 'URL_DE_CONNEXION_GOOGLE';
}

/*script du modal reservation*/

let reservationLink = document.getElementById('reservationLink');
let reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'));

reservationLink.onclick = function() {
    reservationModal.show();
}