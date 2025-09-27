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
        $stmt = $this->db->getPDO()->prepare("SELECT id FROM user WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn();
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
    public function updateProfilePicture(string $userId, string $fileName){
        $stmt = $this->db->getPDO()->prepare("UPDATE $this->table SET photo = ? WHERE id = ?");
        if (!$stmt->execute([$fileName, $userId])) {
            throw new \Exception("Erreur lors de la mise à jour de la base de données.");
        }
    }
}