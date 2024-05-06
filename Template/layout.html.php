
<!DOCTYPE html>
<html lang="fr">

<body>
    <header class="header">
        <div class="row align-items-start">
            <div class="col-md-2 d-flex align-items-center">
                <a href="index.php?page=home">
                    <img src="/image/car-logo.png" class="ms-2" alt="Logo" height="80" width="80">
                </a>
                <h2 class="text-white ml-1"><strong>Sext</strong></h2>
            </div>
            <div class="col-md-10 d-flex justify-content-end align-items-center text-white">
                <a id="reservationLink" class="nav-link me-3 mt-4 underline-animation" href="#">
                    <i class="fa-solid fa-car me-2"></i><strong>Gérer mes réservations</strong>
                </a>
                <a class="nav-link me-3 mt-4 underline-animation" href="/Template/vehicleAvailable.html.php">
                    <i class="fa-solid fa-globe"></i> <strong>FR</strong>
                </a>
                <a id="connexionLink" class="nav-link me-3 mt-4 underline-animation" href="#">
                    <i class="fa-solid fa-user me-2"></i><strong>Connexion | Inscription</strong>
                </a>
            </div>
        </div>
    </header>
    <!-- Connexion Modal -->
    <div id="connexionModal" class="modal" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-zoom-in">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="connexionModalLabel">Créer un compte ou se connecter</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-outline-secondary d-block mx-auto mb-3">
                        <i class="fab fa-google me-2"></i>Connexion avec Google
                    </button>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label visually-hidden">Email</label>
                            <input type="email" class="form-control fs-5" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label visually-hidden">Mot de passe</label>
                            <input type="password" class="form-control fs-5" id="password" name="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary d-block mx-auto mb-3">Connexion</button>
                        <div class="text-center">
                            <a href="/Template/subscribe.html.php" class="text-decoration-none d-block mb-2 custom-link fs-3">S'inscrire</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservation Modal -->
    <div id="reservationModal" class="modal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-zoom-in">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="reservationModalLabel">Gérer votre réservation</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center homePageReservation">
                    <p class="card-text fs-5">Modifiez votre réservation comme vous le souhaitez, rapidement et facilement.</p>
                    <form class="w-75">
                        <div class="mb-3">
                            <label for="reservationNumber" class="form-label fs-5"><strong>Numéro de réservation</strong></label>
                            <input type="text" class="form-control fs-5" id="reservationNumber" placeholder="Entrez votre numéro de réservation">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label fs-5"><strong>Adresse e-mail</strong></label>
                            <input type="email" class="form-control fs-5" id="emailAddress" placeholder="Entrez votre adresse e-mail">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-secondary fs-5">Suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="row align-items-start">
            <div class="col-md-12 d-flex justify-content-center align-items-start text-white">
                <p class="footer-text me-3 mt-1">rental.com©</p>
                <a href="" class="nav-link me-3 mt-1 underline-animation">Aide & Contact</a>
                <a href="" class="nav-link me-3 mt-1 underline-animation">Informations générales</a>
                <a href="" class="nav-link me-3 mt-1 underline-animation">Mentions légales</a>
                <a href="" class="nav-link me-3 mt-1 underline-animation">Données personnelles</a>
                <a href="" class="nav-link me-3 mt-1 underline-animation">CGL</a>
                <a href="" class="nav-link me-3 mt-1 underline-animation">Paramètres des cookies</a>
                <p class="footer-text mt-1">©rental.com</p>
            </div>

        </div>
    </footer>
    <script src="../script.js" type="text/javascript"></script>
</body>

</html>