<?php 

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Job;

class DashboardController extends Controller {
    public function dashboardPage() {
        $_SESSION['auth']['admin'] = '87285b1e-9333-11f0-aeef-106530278473';
        $count_jobs = (new Job($this->getDB()))->countJobsAdmin();
        $this->viewAdmin('admin.dashboard',compact('count_jobs'));
    }
}