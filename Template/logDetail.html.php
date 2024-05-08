<?php
if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');  // Redirection si l'utilisateur n'est pas connecté
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Détails de l'utilisateur</title>
</head>
<body>
    <h1>Mes informations</h1>
    <p>Nom : <?= htmlspecialchars($user['lastname']) ?></p>
    <p>Prénom : <?= htmlspecialchars($user['firstname']) ?></p>
    <p>Email : <?= htmlspecialchars($user['email']) ?></p>
    <p>Téléphone : <?= htmlspecialchars($user['phone']) ?></p>
    <p>Adresse : <?= htmlspecialchars($user['address']) ?></p>
</body>
</html>


