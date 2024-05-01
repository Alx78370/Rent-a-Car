<?php include "../include.php"; ?>
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
                        <a class="nav-link" href="homePage.html.php"><i class="fa-solid fa-car"></i> <strong>Gérer mes réservations</strong></a>
                        <a class="nav-link" href="homePage.html.php"><i class="fa-solid fa-globe"></i> <strong>FR</strong></a>
                        <a class="nav-link" href="homePage.html.php"><i class="bi bi-person-fill"></i> <strong>Connexion | Deconnexion</strong></a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container">
            <div class="card p-5 homePageCard">
                <form class="formHomePage" action="vehicleAvailable.html.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="agencyStart">Prise en charge</label>
                        <select class="form-select" aria-label="Default select example" name="agencyStart">
                            <option selected disabled>Nos agences</option>
                            <option value="1">Paris</option>
                            <option value="2">Marseille</option>
                            <option value="3">Bordeaux</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agency">Retour</label>
                        <select class="form-select" aria-label="Default select example" name="agencyReturn">
                            <option selected disabled>Nos agences</option>
                            <option value="1">Paris</option>
                            <option value="2">Marseille</option>
                            <option value="3">Bordeaux</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Date de départ</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Date de retour</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg" type="submit"><a href="">Voir les véhicules</a></button>
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
        <div class="card">
            <p>Portée mondiale</p>
            <p>Plus de 2 000 stations SIXT dans plus de 105 pays</p>
        </div>
        <div class="card">
            <p>Qualité garantie</p>
            <p>Voitures neuves - en moyenne 3 mois d'ancienneté</p>
        </div>
        <div class="card">
            <p>Service client</p>
            <p>Service client 24h/24 et 7j/7</p>
        </div>
    </div>

        

</body>

</html>