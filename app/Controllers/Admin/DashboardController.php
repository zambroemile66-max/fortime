<?php 

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Job;

class DashboardController extends Controller {
    public function dashboardPage() {
        $this->isAdmin();
        $count_jobs = (new Job($this->getDB()))->countJobsAdmin();
        $this->viewAdmin('admin.dashboard',compact('count_jobs'));
    }
}