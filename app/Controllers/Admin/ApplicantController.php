<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Team;

class ApplicantController extends Controller
{
    public function applicantPage()
    {   $companyId = (new CompanyProfileController($this->getDB()))->Company();
        $applicants = (new Team($this->getDB()))->getAllTeamMember($companyId->id);
        $this->viewAdmin('admin.applicant',compact('applicants'));
    }
    public function applicantDetails(string $id)
    {   $companyId = (new CompanyProfileController($this->getDB()))->Company();
        $applicant = (new Team($this->getDB()))->getTeamMember($id);
        $this->viewAdmin('admin.applicant-details',compact('applicant'));
    }
    public function createApplicant(string $id){
        $companyId = (new CompanyProfileController($this->getDB()))->Company();
        try {
            (new Team($this->getDB()))->createTeamMember($id,$companyId->id);
            $_SESSION['success'] = "✅ New Applicant Added";
            header('Location: /fortime/admin/applicants');
            exit;
        } catch (\Throwable $th) {
            $_SESSION['error'] = "❌ This Applicant Already Exists";
            header('Location: /fortime/admin/email-view/'.$_SESSION['email_view']);
            exit;
        }
    }
    public function countTeamMember(string $id){
        return (new Team($this->getDB()))->countTeamMember($id);
    }
    public function applicantDestroy(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            try {
                if(!isset($_POST['ids']))throw new \Exception('No Applicants selected'); 
                $ids = array_unique($_POST['ids']);
                foreach($ids as $id){
                    (new Team($this->getDB()))->applicantDestroy($id);
                }
                $_SESSION['success'] = "✅ Applicant(s) deleted";
                header('Location: /fortime/admin/applicants');
                exit();
            } catch (\Throwable $th) {
                //throw $th;
                $_SESSION['error'] = "❌ Failled ".$th->getMessage();
                header('Location: /fortime/admin/applicants');
                exit();
            }
        }
    }
}