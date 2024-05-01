<?php include "../include.php";
include "layout.html.php"
?>

<body class="reservation">
    <div class="container-fluid vh-75 d-flex justify-content-center align-items-center mt-5">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <h3 class="card-title text-center"><strong>Gérez votre réservation</strong></h3>
                <p class="card-text fs-5">Modifiez votre réservation comme vous le souhaitez, rapidement et facilement.</p>
                <hr>
                <form>
                    <div class="mb-3">
                        <label for="reservationNumber" class="form-label fs-5"><strong>Numéro de réservation</strong></label>
                        <input type="text" class="form-control fs-5" id="reservationNumber" placeholder="Entrez votre numéro de réservation">
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label fs-5"><strong>Adresse e-mail</strong></label>
                        <input type="email" class="form-control fs-5" id="emailAddress" placeholder="Entrez votre adresse e-mail">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="button-reservation btn btn-secondary fs-5">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>