<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class ApplicantController extends Controller
{
    public function applicantPage()
    {
        $this->viewAdmin('admin.applicant');
    }
}