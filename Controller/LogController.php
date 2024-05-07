<?php
require_once __DIR__ . '../../Service/RegisterService.php';
require_once __DIR__ . '../../Service/LoginService.php';

class LogController {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
        
    }
    public function showRegisterPage() {
        require_once './Template/layout.html.php';
        require_once __DIR__ . '../../Template/register.html.php';
    }
    public function showLogDetailPage() {
        require_once './Template/layout.html.php';
        require_once __DIR__ . '../../Template/logDetail.html.php';
    }
}


