<?php

namespace App\Models;

use App\Exceptions\NotFoundException;

class Job extends Model{
    protected string $table = "job";

    public function getJobs(): array{
        $sql = "SELECT title,company.name,job.location,type,job.id FROM $this->table
        JOIN company ON job.company_id = company.id LIMIT 6";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getJobsLocationAndTitle(): array{
        $sql = "SELECT title,location FROM $this->table";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAllJobs(): array{
        $sql = "SELECT title,company.name,job.location,type,job.id FROM $this->table
        JOIN company ON job.company_id = company.id";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function countJobs(): int{
        $sql = "SELECT COUNT(*) AS total_jobs FROM $this->table";
        $stmt = $this->db->getPDO()->query($sql);
        $result = $stmt->fetch();
        return $result ? (int)$result->total_jobs : 0;
    }
    public function countJobsAdmin(): int{
        $sql = "SELECT COUNT(*) AS total_jobs FROM $this->table WHERE company_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([(new Company($this->db))->getCompanyId($_SESSION['auth']['admin'])->id]);
        $result = $stmt->fetch();
        return $result ? (int)$result->total_jobs : 0;
    }
    public function getJobsAdmin(){
        $sql = "SELECT type,posted_on,title,apply_before FROM $this->table WHERE company_id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([(new Company($this->db))->getCompanyId($_SESSION['auth']['admin'])->id]);
        return $stmt->fetchAll();
    }
    public function getJob(string $id){
        $sql = "SELECT title,company.name,job.location,DATE_FORMAT(posted_on, '%M %d, %Y') AS posted_on,DATE_FORMAT(apply_before, '%M %d, %Y') AS apply_before, skills, job.description AS job_des, company.description AS comp_des, type, company.id AS comp_id, job.id as job_id,salary FROM $this->table
        JOIN company ON job.company_id = company.id WHERE job.id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }

        throw new NotFoundException("job");
    }
    public function getJobApplication(string $id){
        $sql = "SELECT title,company.name, company.id AS comp_id,job.location,type,job.id AS job_id,job.location FROM $this->table
        JOIN company ON job.company_id = company.id WHERE job.id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }

        throw new NotFoundException("job");
    }
    public function publishJob(array $data){
        $sql = "INSERT INTO $this->table (company_id,title,description,location,type,salary,apply_before,skills) values (:company_id,:title,:description,:location,:type,:salary,:apply_before,:skills) ";
        $stmt = $this->db->getPDO()->prepare($sql);
        return $stmt->execute([
            ":company_id" => $data['company_id'],
            ":title" => $data['title'],
            ":description" => $data['field'],
            ":location" => $data['location'],
            ":type" => $data['type'],
            ":salary" => $data['salary'],
            ":apply_before" => $data['apply_before'],
            ":skills" => $data['skills']
        ]);

    }
}