<?php 

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Job;

class DashboardController extends Controller {
    public function dashboardPage() {
        $this->isAdmin();
        $company = (new CompanyProfileController($this->getDB()))->Company();
        $_SESSION['company_logo'] = $company->logo_url; 
        $count_jobs = (new Job($this->getDB()))->countJobsAdmin();
        $this->viewAdmin('admin.dashboard',compact('count_jobs'));
    }
}