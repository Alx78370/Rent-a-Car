<?php
class CartService {
    public function addVehicleToCart($vehicleId, $dailyRate, $brand, $model, $image) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][$vehicleId] = [
            'vehicleId' => $vehicleId,
            'dailyRate' => $dailyRate,
            'brand' => $brand,
            'model' => $model,
            'image' => $image
        ];
    }
}
