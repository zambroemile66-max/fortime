<?php

namespace App\Controllers;

class JobController extends Controller{

    public function jobsDetailsPage(){
        $this->view('pages.jobs-details');
    }
    public function jobApplicationPage(){
        $this->view('pages.job-application');
    }
    public function findJobsPage(){
        $this->view('pages.find-jobs');
    }
    public function searchPage(){
        $this->view('pages.search');
    }
}