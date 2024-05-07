<?php
class LoginService {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function login() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Recherche de l'utilisateur par email
            $user = $this->userRepository->findUserByEmail($email);
    
            // Vérification du mot de passe et des données utilisateur
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'firstname' => $user['firstname'],  
                    'lastname' => $user['lastname'],
                    'phone' => $user['phone'],  
                    'address' => $user['address']
                ];
            
                // Redirection vers la page de profil de l'utilisateur
                header('Location: index.php?page=logDetail');
                exit;
            } else {
                // Optionnel: Ajouter un message d'erreur à afficher
                $_SESSION['error'] = "Identifiant ou mot de passe incorrect.";
                header('Location: index.php?page=login');
                exit;
            }            
        }
    }
    
    public function logout() {
        session_start();
        unset($_SESSION['user']);
        header('Location: index.php?page=home');
        exit;
    }    
}