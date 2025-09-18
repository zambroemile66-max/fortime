<?php

namespace App\Models;

use App\Exceptions\NotFoundException;

class Company extends Model{
    protected string $table = 'company';

    public function insertCompany(string $userId) {
        // Commence une transaction
        $this->db->getPDO()->beginTransaction();

        try {
            $sql = "INSERT INTO $this->table (user_id) VALUES (:user_id)";
            $stmt = $this->db->getPDO()->prepare($sql);
            $stmt->execute([':user_id' => $userId]);

            // Valide la transaction
            $this->db->getPDO()->commit();

        } catch (\Throwable $th) {
            // En cas d'erreur, annule la transaction
            $this->db->getPDO()->rollBack();
        }
    }
    public function getCompanies(){
        $sql = "SELECT id,name,logo_url,description FROM $this->table LIMIT 3";
        $stmt = $this->db->getPDO()->query($sql);
        return $stmt->fetchAll();
    }
    public function getAllCompanies(){
        $sql = "SELECT id,name,logo_url,description FROM $this->table";
        $stmt = $this->db->getPDO()->query($sql);
        return $stmt->fetchAll();
    }
    public function getCompany(string $id): object{
        $sql = "SELECT name, logo_url, website, founded_date, industry, 
        description, tech_stack,location FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }

        throw new NotFoundException("company");
    }
}