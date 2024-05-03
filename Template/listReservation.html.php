<?php if (isset($reservation)) : ?>
    <h1>Détails de la Réservation</h1>
    <p><strong>Numéro de réservation :</strong> <?= htmlspecialchars($reservation['reservation_Nb']) ?></p>
    <p><strong>Nom du client :</strong> <?= htmlspecialchars($reservation['last_Name']) . ' ' . htmlspecialchars($reservation['first_Name']) ?></p>
    <!-- Ajouter d'autres champs au besoin -->
<?php else: ?>
    <p>Informations non disponibles.</p>
<?php endif; ?>

