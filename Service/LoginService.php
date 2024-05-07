<?php

require_once __DIR__ . '/../Model/Repository/UserRepository.php';

class LoginService {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function login() {
        session_start();

        // Traitement du formulaire de connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Recherche de l'utilisateur par email
            $user = $this->userRepository->findUserByEmail($email);

            // Vérification du mot de passe et des données utilisateur
            if ($user && password_verify($password, $user['password'])) {
                // Enregistrement des données utilisateur dans la session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['username']; // Assurez-vous que ces champs existent dans votre base de données

                // Redirection vers la page de profil de l'utilisateur
                header('Location: index.php?page=logDetail');
                exit;
            } 
        } 
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php?page=home');
        exit;
    }
}