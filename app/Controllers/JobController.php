<?php

namespace App\Controllers;

class JobController extends Controller{

    public function jobDetailsPage(){
        $this->view('pages.jobs-details');
    }
}