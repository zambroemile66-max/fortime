<?php

namespace App\Controllers\Admin;
use App\Models\Team;
use App\Models\Application;
use App\Controllers\Controller;

class ApplicationController extends Controller
{
    public function emailPage(){   
        $companyId = (new CompanyProfileController($this->getDB()))->Company();
        $applications = (new Application($this->getDB()))->getAllApplications($companyId->id);
        $this->viewAdmin('admin.emails',compact('applications'));
    }
    public function emailViewPage(string $id){ 
        $application = (new Application($this->getDB()))->getApplication($id);
        $this->viewAdmin('admin.email-view',compact('application'));
    }
    public function emailViewDelete(string $id){
        try {
            (new Application($this->getDB()))->deleteApplication($id);
            $_SESSION['success'] = "✅ Application deleted successfully.";
            header('Location: /fortime/admin/emails');
            exit();
        } catch (\Throwable $th) {
            //throw $th;
            $_SESSION['error'] = "❌ Failed to delete application.";
            header('Location: /fortime/admin/emails');
            exit();
        }
    }
    public function countEmail(){
        $companyId = (new CompanyProfileController($this->getDB()))->Company();
        return (new Application($this->getDB()))->countApplications($companyId->id);
    }
}