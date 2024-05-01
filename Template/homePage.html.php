<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rent a car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <img src="../image/mercedes-benz-car-wallpaper" alt="">
        <div class="container">
            <div class="card p-5">
                <form action="vehicleAvailable.html.php" method="POST">
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
                </form>
            </div>
        </div>
    </div>
</body>

</html>