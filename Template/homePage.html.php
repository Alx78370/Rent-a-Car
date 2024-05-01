
<?php include "../include.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<body>
    <div class="expDiv">254 ans d'expertise</div>
    <div class="divBigHomePage1">
        <header>
            <div class="container divHomepage1">
                <nav class="navbar navbar-expand-lg">
                    <div class="container divHomepage2">
                        <a class="navbar-brand" href="#">Rent a car</a>
                    </div>
                    <div class="container divHomepage3">
                        <a class="nav-link" href="homePage.html.php">Connexion/Deconnexion</a>
                        <a class="nav-link" href="homePage.html.php">Gerer mes reservations</a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container">
            <div class="card p-5">
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
                        <label class="form-label" for="">Date de départ</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg" type="submit"><a href="">Voir les véhicules</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>