/* script du modal connexion */
const connexionLink = document.getElementById('connexionLink');
const connexionModal = new bootstrap.Modal(document.getElementById('connexionModal'));

connexionLink.onclick = function() {
    connexionModal.show();
}

function redirectToGoogle() {  
    window.location.href = 'URL_DE_CONNEXION_GOOGLE';
}

/* script du modal reservation */
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
    const startDateInput = document.getElementById('start_Date');
    const endDateInput = document.getElementById('end_Date');

    if (startDateInput && endDateInput) {
        startDateInput.addEventListener('change', function() {
            const startDate = new Date(this.value);
            const endDate = new Date(startDate);
            endDate.setFullYear(startDate.getFullYear() + 1);

            endDateInput.min = this.value;
            endDateInput.max = endDate.toISOString().split('T')[0];
        });
    } else {
        console.error("Les éléments avec les ID 'start_Date' ou 'end_Date' n'ont pas été trouvés.");
    }
});


/* script du modal véhicule */
function loadVehicleDetails(vehicle) {
    console.log("Vehicle details loaded:", vehicle); // Confirmer que les données sont correctes

    const modalBody = document.querySelector('#vehicleModal .modal-body');
    const modal = new bootstrap.Modal(document.getElementById('vehicleModal'));

    // Construction du contenu HTML pour le modal
    modalBody.innerHTML = `
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="${vehicle.image}" class="img-fluid" alt="Image de ${vehicle.brand} ${vehicle.model}">
                </div>
                <div class="col-md-6">
                    <p><strong>Marque:</strong> ${vehicle.brand}</p>
                    <p><strong>Modèle:</strong> ${vehicle.model}</p>
                    <p><strong>Type:</strong> ${vehicle.type}</p>
                    <p><strong>Énergie:</strong> ${vehicle.energy_type}</p>
                    <p><strong>Nombre de passagers:</strong> ${vehicle.passenger_Nb}</p>
                    <p><strong>Boîte de vitesses:</strong> ${vehicle.gear}</p>
                    <p><strong>Tarif journalier:</strong> ${vehicle.daily_Rate}€</p>
                </div>
            </div>
        </div>
    `;

    // Afficher le modal avec les détails du véhicule
    modal.show();
}






