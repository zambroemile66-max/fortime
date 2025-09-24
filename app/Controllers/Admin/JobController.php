<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;

class JobController extends Controller
{
    public function jobListingPage()
    {   $jobs_listing = (new Job($this->getDB()))->getJobsAdmin();
        $this->viewAdmin('admin.jobs',compact('jobs_listing'));
    }
    public function jobPublishPage()
    {
        $companyId = (new CompanyProfileController($this->getDB()))->Company();
        $location = (new Company($this->getDB()))->getCompany($companyId->id)->location;
        $this->viewAdmin('admin.job-publish',compact('location'));
    }
    public function jobPublish(){
        $title =  htmlspecialchars(trim($_POST['title']));
        $location =  htmlspecialchars(trim($_POST['location']));
        $type =  htmlspecialchars(trim($_POST['type']));
        $salary =  htmlspecialchars(trim($_POST['salary']));
        $apply_before =  htmlspecialchars(trim($_POST['apply_before']));
        $skills =  htmlspecialchars(trim($_POST['skills']));
        $field =  htmlspecialchars(trim($_POST['field']));

        $data = [
            "company_id" => (new Company($this->getDB()))->getCompanyId($_SESSION['auth']['admin']['id'])->id,
            "title" => $title,
            "location" => $location,
            "type" => $type,
            "salary" => $salary,
            "apply_before" => $apply_before,
            "skills" => $skills,
            "field" => $field
        ];

        try {
            (new Job($this->getDB()))->publishJob($data);
            $_SESSION['success'] = "✅ Offre d'emploi publiée avec succès";
            header('Location: /fortime/admin/job-publish');
        } catch (\Throwable $th) {
            $_SESSION['error'] = "❌ Erreur : " . $th->getMessage();
            header('Location: /fortime/admin/job-publish');
        }
    }
    public function jobListingDestroy(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            try {
                if(!isset($_POST['ids']))throw new \Exception('No jobs selected'); 
                $ids = array_unique($_POST['ids']);
                foreach($ids as $id){
                    (new Job($this->getDB()))->jobDestroy($id);
                }
                $_SESSION['success'] = "✅ Job(s) deleted";
                header('Location: /fortime/admin/jobs');
                exit();
            } catch (\Throwable $th) {
                //throw $th;
                $_SESSION['error'] = "❌ Failled ".$th->getMessage();
                header('Location: /fortime/admin/jobs');
                exit();
            }
        }
    }
}