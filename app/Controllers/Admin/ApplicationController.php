<?php

namespace App\Controllers\Admin;
use App\Controllers\CompanyController;
use App\Controllers\Controller;
use App\Models\Application;

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
}