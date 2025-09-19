<?php

namespace App\Controllers;

use Database\DBConnection;

class Controller{

    public function __construct(
        protected ?DBConnection $db = null
    ){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $this->db = $db;
    }

    public function view(string $path, ?array $params = null){
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS.$path.'.php';
        if ($params) {
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS.'templates/layout.php';
    }

    public function viewAdmin(string $path, ?array $params = null){
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS.$path.'.php';
        if ($params) {
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS.'templates/admin-layout.php';
    }

   protected function getDB(){
        return $this->db;
   }
    public  function isAdmin(){
        if (!isset($_SESSION['auth']['admin'])) {
            header('Location: /fortime');
            exit;
        }
    }
}