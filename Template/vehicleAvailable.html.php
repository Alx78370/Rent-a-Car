<?php
include "../include.php";
include "./layout.html.php";
require_once "../Model/Repository/VehicleRepository.php";
$vehicleRepository = new VehicleRepository();
$vehicles = $vehicleRepository->getAll();
?>

<!DOCTYPE html>
<html lang="fr">

<html>

<body>
    <div class="vehiclePage1">
        <h1>QUEL VÉHICULE SOUHAITEZ-VOUS CONDUIRE ?</h1>
    </div>
    <div class="vehiclePage2">
        <div class="btn-group gap-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Trier par
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Popularité</a></li>
                <li><a class="dropdown-item" href="#">Prix du plus bas au plus élevé</a></li>
                <li><a class="dropdown-item" href="#">Prix du plus élevé au plus bas</a></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Type de véhicule
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Berline</a></li>
                <li><a class="dropdown-item" href="#">SUV</a></li>
                <li><a class="dropdown-item" href="#">Coupé</a></li>
                <li><a class="dropdown-item" href="#">Cabriolet</a></li>
                <li><a class="dropdown-item" href="#">Voiture familiale</a></li>
                <li><a class="dropdown-item" href="#">Break</a></li>
                <li><a class="dropdown-item" href="#">Véhicule électrique</a></li>
                <li><a class="dropdown-item" href="#">Véhicule de luxe</a></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Boîte de vitesses
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Automatique</a></li>
                <li><a class="dropdown-item" href="#">Manuelle</a></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Passagers
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2+</a></li>
                <li><a class="dropdown-item" href="#">4+</a></li>
                <li><a class="dropdown-item" href="#">5+</a></li>
                <li><a class="dropdown-item" href="#">7+</a></li>
            </ul>
        </div>
    </div>
    <div class="vehiclePage3">
        <?php foreach ($vehicles as $vehicle) {
    echo "ID: " . $vehicle->id . "<br>";
    echo "Marque: " . $vehicle->brand . "<br>"; // Assurez-vous que vehicleBrand est un attribut correct
    echo "Nom: " . $vehicle->model . "<br>"; // Assurez-vous que vehicleName est un attribut correct
    echo "Type: " . $vehicle->type . "<br>"; // Assurez-vous que model est un attribut correct
    echo "<hr>";
}?>
    </div>
</body>

</html>