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
        $sql = "SELECT name, logo_url, website,DATE_FORMAT(founded_date, '%M %d, %Y') AS founded_date, industry, 
        description, tech_stack,location FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }

        throw new NotFoundException("company");
    }
    public function getCompanyId(string $id){
        $sql = "SELECT * FROM $this->table WHERE user_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }
    }
    public function updateProfilePicture(string $companyId, string $fileName)
    {
        $stmt = $this->db->getPDO()->prepare("UPDATE company SET logo_url = ? WHERE id = ?");
        if (!$stmt->execute([$fileName, $companyId])) {
            throw new \Exception("Erreur lors de la mise à jour de la base de données.");
        }
    }
    public function updateCompanyInfo(array $data,string $companyId){
        $stmt = $this->db->getPDO()->prepare("UPDATE company SET name=?, website=?, founded_date=?, industry=?, description=? WHERE id=?");
        if (!$stmt->execute([
            $data['comp_name'],
            $data['comp_web'],
            $data['founded'],
            $data['industry'],
            $data['desc'],
            $companyId
        ])) {
           throw new \Exception("Erreur lors de la mise à jour");
        }
    }
    public function updateCompanyMoreInfo(array $data,string $companyId){
        $stmt = $this->db->getPDO()->prepare("UPDATE company SET location=?, tech_stack=? WHERE id=?");
        if (!$stmt->execute([
            $data['location'],
            $data['tech_stack'],
            $companyId
        ])) {
           throw new \Exception("Erreur lors de la mise à jour");
        }
    }
}