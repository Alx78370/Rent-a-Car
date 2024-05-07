<?php
require_once __DIR__ . '../../Model/Repository/UserRepository.php';

class SubscriptionController {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collecter les données du formulaire
            $username = $_POST['username'];
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $passwordConfirm = $_POST['password_confirm'];

            // Vérifier si les mots de passe correspondent
            if ($_POST['password'] !== $passwordConfirm) {
                $errors['password'] = "Les mots de passe ne correspondent pas.";
                // Gérer l'affichage des erreurs ici
            } else {
                // Insérer les données de l'utilisateur
                $result = $this->userRepository->createUser([
                    'username' => $username,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'password' => $password,
                    'firstname' => $firstName,
                    'lastname' => $lastName
                ]);

                if ($result) {
                    // Redirection vers la page d'accueil après inscription réussie
                    header('Location: homePage.html.php');
                    exit();
                } else {
                    
                }
            }
        }
    }
}
?>
