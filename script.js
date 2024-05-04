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
                <div class="col-md-6 col-img colDetails">
                    <h3>${vehicle.brand} ${vehicle.model}</h3>
                    <p class="vehicleType">${vehicle.type} | ${vehicle.energy_type}</p>
                    <img src="${vehicle.image}" class="img-fluid" alt="Image de ${vehicle.brand} ${vehicle.model}">
                    <div class="infoVehicle">
                        <p><i class="bi bi-person-fill"></i> ${vehicle.passenger_Nb} sièges</p>
                        <p><img class="iconGear" src="../Image/icon_gearbox.png" alt="">${vehicle.gear}</p>
                        <p><i class="bi bi-calendar2-check"></i> ${vehicle.year}</p>
                        <p><img class="iconGear" src="../Image/icon_door.png" alt="">${vehicle.door_nb} portes</p>
                    </div>
                </div>
                <div class="col-md-6 colDetails">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <p>${vehicle.daily_Rate}€ / jour</p>
                <a href="" class="btn btn-primary btn-suivant">Suivant</a>
                </div>
            </div>
        </div>
    `;

    // Afficher le modal avec les détails du véhicule
    modal.show();
}






