<?php 

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class DashboardController extends Controller {
    public function dashboardPage() {
        $this->viewAdmin('admin.dashboard');
    }
}