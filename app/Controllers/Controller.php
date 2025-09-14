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
        require VIEWS.'layout.php';
    }

   protected function getDB(){
        return $this->db;
   }
}