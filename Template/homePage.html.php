<!DOCTYPE html>
<html lang="fr">

<head>

</head>

<body>
    <div class="expDiv">879 ans d'expertise</div>
    <div class="divBigHomePage1">
        <header>
            <div class="container divHomepage1">
                <nav class="navbar navbar-expand-lg">
                    <div class="container divHomepage2">
                        <a href="homePage.html.php">
                            <img src="/image/car-logo.png" class="ms-2" alt="Logo" height="80" width="80">
                        </a>
                        <h2 class="text-white ml-1"><strong>Sext</strong></h2>
                    </div>
                    <div class="container divHomepage3">
                        <a id="reservationLink" class="nav-link underline-animation" href="#"><i class="fa-solid fa-car"></i> <strong>Gérer mes réservations</strong></a>
                        <a class="nav-link underline-animation" href="index.php?page=vehicleAvailable"><i class="fa-solid fa-globe"></i> <strong>FR</strong></a>
                        <a id="connexionLink" class="nav-link underline-animation" href="#"><i class="bi bi-person-fill"></i> <strong>Connexion | Inscription</strong></a>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Connexion Modal -->
        <div id="connexionModal" class="modal" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-zoom-in">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="connexionModalLabel">Créer un compte ou se connecter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-outline-secondary d-block mx-auto mb-3">
                            <i class="fab fa-google me-2"></i>Connexion avec Google
                        </button>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label visually-hidden">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label visually-hidden">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary d-block mx-auto mb-3">Connexion</button>
                            <div class="text-center">
                                <a href="suscribe.html.php" class="text-decoration-none d-block mb-2 custom-link fs-3">S'inscrire</a>
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
                        <h5 class="modal-title" id="reservationModalLabel">Gérer votre réservation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center homePageReservation">
                        <p class="card-text fs-5">Modifiez votre réservation comme vous le souhaitez, rapidement et facilement.</p>
                        <form class="w-75">
                            <div class="mb-3">
                                <label for="reservationNumber" class="form-label fs-5">Numéro de réservation</label>
                                <input type="text" class="form-control fs-5" id="reservationNumber" placeholder="Entrez votre numéro de réservation">
                            </div>
                            <div class="mb-3">
                                <label for="emailAddress" class="form-label fs-5">Adresse e-mail</label>
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

        <div class="container homePageCardGen">
            <div class="card p-5 homePageCard">
                <form class="formHomePage" action="index.php?page=vehicleAvailable" method="POST">
                    <?php foreach ($agencies as $agency) : ?>
                        <div class="mb-3">
                        <label class=" form-label" for="agencyStart">Prise en charge</label>
                            <select class="form-select" aria-label="Default select example" name="agencyStart">
                                <option selected disabled hidden>Nos agences</option>
                                <option value=""><?= htmlspecialchars($agency->name) ?></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agency">Retour</label>
                            <select class="form-select" aria-label="Default select example" name="agencyReturn">
                                <option selected disabled hidden>Nos agences</option>
                                <option value=""><?= htmlspecialchars($agency->name) ?></option>
                            </select>
                        </div>
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label class="form-label" for="start_Date">Date de départ</label>
                        <input class="form-control" type="date" id="start_Date" name="start_Date" min="<?= $date ?>" max="2025-05-03">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="end_Date">Date de retour</label>
                        <input class="form-control" type="date" id="end_Date" name="end_Date">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-lg btn-outline-secondary homePageBtn" type="submit">Voir les véhicules</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="homePageH1H2">
        <h1 class="homePageH1">Louez une voiture <br> en toute simplicité</h1>
        <h2 class="homePageH2">Trouvez la voiture idéale pour votre prochain voyage</h2>

    </div>
    <div class="container divHomePage4">
        <div class="card divHomePageCard4">
            <h3>Portée galactique</h3>
            <p><strong>Plus de 3 stations Sext dans seulement 1 pays ! Profitez-en</strong></p>
        </div>
        <div class="card divHomePageCard4">
            <h3>Qualité garantie</h3>
            <p><strong>Voitures neuves - en moyenne 3 mois d'ancienneté</strong></p>
        </div>
        <div class="card divHomePageCard4">
            <h3>Service client</h3>
            <p><strong>Service client 24h/24 et 7j/7 <br> pour votre satisfaction</strong></p>
        </div>
    </div>
    <div class="container">
        <div id="vehicleCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php if (!empty($images)) : ?>
                    <?php $isActive = true; ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                            <img src="<?= $image->image ?>" class="d-block w-100" alt="Vehicle Image">
                        </div>
                        <?php $isActive = false; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#vehicleCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#vehicleCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <footer>
        <div class=" divFooter">
            <div class="divFooter2">
                <a class="nav-link underline-animation" href="homePage.html.php"><i class="fa-solid fa-car"></i> <strong>Gérer mes réservations</strong></a>
                <a class="nav-link underline-animation" href="homePage.html.php"><i class="fa-solid fa-globe"></i> <strong>FR</strong></a>
                <a class="nav-link underline-animation" href="homePage.html.php"><i class="bi bi-person-fill"></i> <strong>Connexion | Deconnexion</strong></a>
            </div>
            <div class="divFooter3">
                <p>© 2022 Sext - Tous droits réservés</p>
            </div>
        </div>
    </footer>
    <script src="../script.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>

</html>