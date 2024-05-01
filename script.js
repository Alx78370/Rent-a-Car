/*script du modal connexion*/

const connexionLink = document.getElementById('connexionLink');
const connexionModal = new bootstrap.Modal(document.getElementById('connexionModal'));

connexionLink.onclick = function() {
    connexionModal.show();
}

function redirectToGoogle() {
    
    window.location.href = 'URL_DE_CONNEXION_GOOGLE';
}

/*script du modal reservation*/

const reservationLink = document.getElementById('reservationLink');
const reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'));

reservationLink.onclick = function() {
    reservationModal.show();
}

function applyZoomOutAndClose(modalId) {
    const modalElement = document.getElementById(modalId);
    const modalInstance = bootstrap.Modal.getInstance(modalElement); // Récupère l'instance du modal
    const modalDialog = modalElement.querySelector('.modal-dialog');

    modalDialog.classList.add('modal-zoom-out');
    modalDialog.addEventListener('animationend', function() {
        modalInstance.hide(); // Ferme le modal une fois l'animation terminée
    }, { once: true });
}
