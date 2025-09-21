<?php

namespace App\Models;

use PDO;

class User extends Model{
    protected string $table = 'user';

    public function insertUser(string $name, string $email, string $hashedPassword, string $type) {
        $sql = "INSERT INTO $this->table (name, email, password_hash, type) 
                VALUES (:name, :email, :password, :type)";
        $stmt = $this->db->getPDO()->prepare($sql);

        $stmt->execute([
            ':name'     => $name,
            ':email'    => $email,
            ':password' => $hashedPassword,
            ':type'     => $type
        ]);

        // Récupère l’ID de l’utilisateur inséré
        return $this->db->getPDO()->lastInsertId();
    }

    public function checkIfUserExists(string $email){
        $sql = "SELECT id,password_hash,type,name,photo,email FROM $this->table WHERE email = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getUserById(string $id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}