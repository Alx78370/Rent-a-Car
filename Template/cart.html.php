<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mon Panier</title>
</head>

<body>

    <div class="container">
        <br>
        <h1 class="d-flex justify-content-center">Votre Panier</h1><br><br>
        <?php if (!empty($_SESSION['cart'])) : ?>
                <table class="table table-bordered">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Produit</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Date de départ</th>
                        <th scope="col">Date de retour</th>
                        <th scope="col">Prix Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                    <?php foreach ($_SESSION['cart'] as $item) : ?>
                        <tr>
                            <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="Image de <?= htmlspecialchars($item['brand']) . ' ' . htmlspecialchars($item['model']) ?>" style="width:100px;"></td>
                            <td><?= htmlspecialchars($item['brand']) . ' ' . htmlspecialchars($item['model']) ?></td>
                            <td><?= htmlspecialchars($item['dailyRate']) ?>€</td>
                            <td><?= htmlspecialchars($item['startDate']) ?></td>
                            <td><?= htmlspecialchars($item['endDate']) ?></td>
                            <td><?= htmlspecialchars($item['dailyRate']) ?>€</td> <!-- Total basé sur une quantité de 1 -->
                            <td>
                                <a href="index.php?page=removeFromCart&vehicleId=<?= $item['vehicleId'] ?>">Supprimer</a>
                                <!-- Ajouter un lien pour modifier la quantité si nécessaire -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                <button class="btn btn-primary">Réserver</button>
    </div>
<?php else : ?>
    <p>Votre panier est vide.</p>
<?php endif; ?>
</body>

</html>