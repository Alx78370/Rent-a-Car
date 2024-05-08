<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon Panier</title>
</head>
<body>
    <h1>Votre Panier</h1>
    <?php if (!empty($_SESSION['cart'])): ?>
        <table>
            <tr>
                <th>Image</th>
                <th>Produit</th>
                <th>Prix</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <tr>
                    <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="Image de <?= htmlspecialchars($item['brand']) . ' ' . htmlspecialchars($item['model']) ?>" style="width:100px;"></td>
                    <td><?= htmlspecialchars($item['brand']) . ' ' . htmlspecialchars($item['model']) ?></td>
                    <td><?= htmlspecialchars($item['dailyRate']) ?>€</td>
                    <td><?= htmlspecialchars($item['dailyRate']) ?>€</td> <!-- Total basé sur une quantité de 1 -->
                    <td>
                        <a href="index.php?page=removeFromCart&vehicleId=<?= $item['vehicleId'] ?>">Supprimer</a>
                        <!-- Ajouter un lien pour modifier la quantité si nécessaire -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Votre panier est vide.</p>
    <?php endif; ?>
</body>
</html>

