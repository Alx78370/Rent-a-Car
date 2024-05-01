<?php
include "../include.php";
include "./layout.html.php";
?>
<!DOCTYPE html>
<html lang="fr">

<html>

<body>
    <div>
        <h1>QUEL VÉHICULE SOUHAITEZ-VOUS CONDUIRE ?</h1>
    </div>
    <div class="btn-group">
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
            <li><a class="dropdown-item" href="#">Popularité</a></li>
            <li><a class="dropdown-item" href="#">Prix du plus bas au plus élevé</a></li>
            <li><a class="dropdown-item" href="#">Prix du plus élevé au plus bas</a></li>
        </ul>
    </div>

</body>

</html>