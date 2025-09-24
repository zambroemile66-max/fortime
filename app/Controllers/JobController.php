<?php

namespace App\Controllers;

use App\Models\Job;

class JobController extends Controller{

    public function jobsDetailsPage(string $id){
        $jobs_details = (new Job($this->getDB()))->getJob($id);
        $this->view('pages.jobs-details',compact('jobs_details'));
    }
    public function jobApplicationPage(string $id){
        $jobs_application = (new Job($this->getDB()))->getJobApplication($id);
        $this->view('pages.job-application',compact('jobs_application'));
    }
    public function findJobsPage(){
        $jobs = (new Job($this->getDB()))->getAllJobs();
        $total_jobs = (new Job($this->getDB()))->countJobs();
        $this->view('pages.find-jobs',compact('jobs','total_jobs'));
    }
    public function searchPage(){
        $this->view('pages.search');
    }
    public function retrieveJobs(){
        return (new Job($this->getDB()))->getJobs();
    }
    public function retrieveTitleLocationJobs(){
        return (new Job($this->getDB()))->getJobsLocationAndTitle();
    }
}