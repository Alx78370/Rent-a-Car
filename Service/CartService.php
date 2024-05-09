<?php
class CartService {
    public function addVehicleToCart($vehicleId, $dailyRate, $brand, $model, $image, $startDate, $endDate) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][$vehicleId] = [
            'vehicleId' => $vehicleId,
            'dailyRate' => $dailyRate,
            'brand' => $brand,
            'model' => $model,
            'image' => $image,
            'startDate' => $startDate,
            'endDate' => $endDate
        ];
    }
    

    public function getReservationDate() {
        $startDate = $_POST['start_Date'];
        $endDate = $_POST['end_Date'];
        return [
            'startDate' => $startDate,
            'endDate' => $endDate
        ];
    }
}
