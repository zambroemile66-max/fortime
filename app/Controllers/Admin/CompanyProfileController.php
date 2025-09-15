<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class CompanyProfileController extends Controller{
    public function companyProfilePage(){
        $this->viewAdmin('admin.company-profile');
    }
}