<?php

namespace App\Models;

use App\Exceptions\NotFoundException;

class Job extends Model{
    protected string $table = "job";

    public function getJobs(): array{
        $sql = "SELECT title,company.name,job.location,type,category,job.id FROM $this->table
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
        $sql = "SELECT title,company.name,job.location,type,category,job.id FROM $this->table
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
        $stmt->execute([$_SESSION['auth']['admin']]);
        $result = $stmt->fetch();
        return $result ? (int)$result->total_jobs : 0;
    }
    public function getJob(string $id){
        $sql = "SELECT title,company.name,job.location,DATE_FORMAT(posted_on, '%M %d, %Y') AS posted_on,DATE_FORMAT(apply_before, '%M %d, %Y') AS apply_before, skills, job.description AS job_des, company.description AS comp_des, type,category, company.id AS comp_id, job.id as job_id,salary FROM $this->table
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
}