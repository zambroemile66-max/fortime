<?php

namespace App\Models;

class Job extends Model{
    protected string $table = "job";

    public function getAllJobs(){
        $sql = "SELECT * FROM job_category ";
    }
}