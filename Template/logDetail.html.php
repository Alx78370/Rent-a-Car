
<!DOCTYPE html>
<html lang="fr">

<body>
    <h1>Mes informations</h1>
    <?php 
    if (session_status() === PHP_SESSION_NONE) {
        // La session n'est pas active
        session_start();
        echo "La session a été démarrée.";
    } else {
        echo "Une session est déjà active.";
    } ?>


</body>
</html>