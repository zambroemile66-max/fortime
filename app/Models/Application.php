<?php

namespace App\Models;

class Application extends Model{
    protected string $table = "application";

    public function getAllApplications(string $id){
        $sql = "SELECT $this->table.id AS id,DATE_FORMAT(applied_at, '%M %d, %Y %H:%i') AS applied_at ,full_name,job_title,additional_info FROM $this->table 
        JOIN job ON job.id = $this->table.job_id WHERE job.company_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();

        if ($result && is_array($result)) {
            return $result;
        }
    }
    public function countApplications(?string $id){
        $sql = "SELECT COUNT(*) AS total_applications FROM $this->table 
        JOIN job ON job.id = $this->table.job_id WHERE job.company_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function getApplication(string $id): mixed{
        $sql = "SELECT DATE_FORMAT(applied_at, '%M %d, %Y %H:%i') AS applied_at,full_name,email,phone,job_title,additional_info,linkedin_url,portfolio_url,id,user_id FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function createApplication(array $data, string $fileName){
        $sql = "INSERT INTO $this->table (user_id,job_id,full_name,email,phone,job_title,linkedin_url,portfolio_url,additional_info) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->db->getPDO()->prepare($sql);
        if(!$stmt->execute([
            $_SESSION['auth']['user']['id'],
            $_SESSION['job_id'],
            $data['applicant-name'],
            $data['applicant-email'],
            $data['applicant-phone'],
            $_SESSION['job_title'],
            $data['applicant-linkedind'],
            $fileName,
            $data['applicant-field']
        ])){
            throw new \Exception();
        }
    }
    public function deleteApplication(string $id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        if(!$stmt->execute([$id])){
            throw new \Exception("Failed to delete application.");
        }
    }
}