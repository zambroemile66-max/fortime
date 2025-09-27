<?php

namespace App\Models;

use App\Exceptions\NotFoundException;

class Team extends Model{
    protected string $table = 'team_member';

    public function getAllTeamMember(?string $id): array{
        $sql = "SELECT team_member.id as id ,role, user.photo, user.name, user.email FROM $this->table
        JOIN user ON team_member.user_id = user.id
        WHERE team_member.company_id = ? AND user.type = 'job_seeker'";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
    public function getTeamMember(string $id): object{
        $sql = "SELECT team_member.id as id ,DATE_FORMAT(created_at, '%M %d, %Y') AS created_at,role, user.photo, user.name, user.email FROM $this->table
        JOIN user ON team_member.user_id = user.id
        WHERE team_member.id = ? AND user.type = 'job_seeker'";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return $result;
        }

        throw new NotFoundException("applicant");
    }
    public function countTeamMember(?string $id): int{
        $sql = "SELECT COUNT(*) as count FROM $this->table
        JOIN user ON team_member.user_id = user.id
        WHERE team_member.company_id = ? AND user.type = 'job_seeker'";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if ($result && is_object($result)) {
            return (int)$result->count ?? 0;
        }

        throw new NotFoundException("applicant");
    }
    public function createTeamMember(string $userId, string $companyId){
        $sql = "INSERT INTO $this->table (role,company_id,user_id) VALUES (?,?,?)";
        $stmt = $this->db->getPDO()->prepare($sql);
        return $stmt->execute([$_SESSION['role'], $companyId, $userId]);
    }
    public function applicantDestroy(string $id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([$id]);
    }
}