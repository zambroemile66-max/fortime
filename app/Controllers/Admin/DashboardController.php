<?php 

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Job;

class DashboardController extends Controller {
    public function dashboardPage() {
        $this->isAdmin();
        $company = (new CompanyProfileController($this->getDB()))->Company();
        $_SESSION['company_logo'] = $company->logo_url; 
        $count_applicants = (new ApplicantController($this->getDB()))->countTeamMember($company->id);
        $count_jobs = (new Job($this->getDB()))->countJobsAdmin();
        $count_email = (new ApplicationController($this->getDB()))->countEmail();
        $this->viewAdmin('admin.dashboard',compact('count_jobs','count_email','count_applicants'));
    }
}