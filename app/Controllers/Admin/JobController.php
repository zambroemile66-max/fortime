<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class JobController extends Controller
{
    public function jobListingPage()
    {
        $this->viewAdmin('admin.jobs');
    }
    public function jobPublishPage()
    {
        $this->viewAdmin('admin.job-publish');
    }
}