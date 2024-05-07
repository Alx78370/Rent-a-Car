<?php 

require_once 'EntityRepository.php';

class ClientRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "client");
    }

    public function getClientDetails($email, $password){
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM client WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            $client = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($client && password_verify($password, $client['password'])) {
                // Mot de passe correct, renvoie les détails du client
                return $client;
            } else {
                // Aucun client trouvé ou mot de passe incorrect
                return null;
            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            // Vous pouvez journaliser l'erreur ou renvoyer une exception
            return null;
        }
    }
    
}