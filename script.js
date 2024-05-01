/*script du modal*/

var connexionLink = document.getElementById('connexionLink');
var connexionModal = new bootstrap.Modal(document.getElementById('connexionModal'));

connexionLink.onclick = function() {
    connexionModal.show();
}

function redirectToGoogle() {
    // Redirection vers la page de connexion Google
    window.location.href = 'URL_DE_CONNEXION_GOOGLE';
}