<?php

namespace App\Models;

class Application extends Model{
    protected string $table = "application";

    public function getAllApplications(string $id){
        $sql = "SELECT $this->table.id,DATE_FORMAT(applied_at, '%M %d, %Y %H:%i') AS applied_at ,full_name,job_title,additional_info FROM $this->table 
        JOIN job ON job.id = $this->table.job_id WHERE job.company_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();

        if ($result && is_array($result)) {
            return $result;
        }
    }
    public function getApplication(string $id){
        $sql = "SELECT DATE_FORMAT(applied_at, '%M %d, %Y %H:%i') AS applied_at,full_name,email,phone,job_title,additional_info,linkedin_url,portfolio_url FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}