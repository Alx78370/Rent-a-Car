<?php

require_once __DIR__ . '../../Model/Repository/ClientRepository.php';
require_once __DIR__ . '../../Model/Repository/EntityRepository.php';

class clientController
{
    private $clientRepo;

    public function __construct()
    {
        $this->clientRepo = new ClientRepository();
    }

    public function showClientDetails()
    {
        if (isset($_POST['email'], $_POST['password'])) {
            $client = $this->clientRepo->getClientDetails($_POST['email'], $_POST['password']);
            if ($client) {
                require_once './Template/layout.html.php';
                require_once __DIR__ . '/../Template/login.html.php';
            } else {
                echo "Aucun client trouvé";
            }
        } else {
            echo "Données du formulaire manquantes";
        }
    }
}