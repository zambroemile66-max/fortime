<?php

namespace App\Models;

use Database\DBConnection;

abstract class Model{
    protected string $table;

    public function __construct(protected DBConnection $db){
        $this->db = $db;
    }
}