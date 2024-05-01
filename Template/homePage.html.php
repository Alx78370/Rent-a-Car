<?php
 include "../include.php";
require_once "../Model/Repository/AgencyRepository.php";
$agencyRepository = new AgencyRepository();
$agencys = $agencyRepository->getAll();
?>

<!DOCTYPE html>
<html lang="fr">

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
                    </div>
                    <div class="container divHomepage3">
                        <a class="nav-link underline-animation" href="/Template/reservation.html.php"><i class="fa-solid fa-car"></i> <strong>Gérer mes réservations</strong></a>
                        <a class="nav-link underline-animation" href="/Template/vehicleAvailable.html.php"><i class="fa-solid fa-globe"></i> <strong>FR</strong></a>
                        <a class="nav-link underline-animation" href="homePage.html.php"><i class="bi bi-person-fill"></i> <strong>Connexion | Deconnexion</strong></a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container">
            <div class="card p-5 homePageCard">
                <form class="formHomePage" action="vehicleAvailable.html.php" method="POST">
                    <?php foreach ($agencys as $agency) : ?>
                        <div class="mb-3">
                            <label class="form-label
                        <label class=" form-label" for="agencyStart">Prise en charge</label>
                            <select class="form-select" aria-label="Default select example" name="agencyStart">
                                <option selected disabled>Nos agences</option>
                                <option value=""><?= htmlspecialchars($agency->name)?></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agency">Retour</label>
                            <select class="form-select" aria-label="Default select example" name="agencyReturn">
                                <option selected disabled>Nos agences</option>
                                <option value=""><?= htmlspecialchars($agency->name)?></option>
                            </select>
                        </div>
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label class="form-label" for="">Date de départ</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Date de retour</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-lg homePageBtn" type="submit"><a href="">Voir les véhicules</a></button>
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

</body>

</html>