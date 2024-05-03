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

document.addEventListener("DOMContentLoaded", function() {
    const startDateInput = document.getElementById('start_Date'); // accès à l'élément de date de départ
    const endDateInput = document.getElementById('end_Date'); // accès à l'élément de date de retour

    startDateInput.addEventListener('change', function() {
        const startDate = new Date(this.value); // obtention de la date de départ
        const endDate = new Date(startDate); // copie de la date de départ pour calculer la date de fin
        endDate.setFullYear(startDate.getFullYear() + 1); // ajout d'un an à la date de départ

        // mise à jour des attributs min et max de la date de retour
        endDateInput.min = this.value; // la date min est la date de départ
        endDateInput.max = endDate.toISOString().split('T')[0]; // formatage et mise à jour de la date max
    });
});

