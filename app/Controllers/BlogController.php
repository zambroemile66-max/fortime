<?php

namespace App\Controllers;

use App\Models\User;

class BlogController extends Controller{
    public function homePage(){
        $user = (new User($this->getDB()))->getUserById($_SESSION['auth']['user']['id'] ?? '');
        $jobs = (new JobController($this->getDB()))->retrieveJobs();
        $companies = (new CompanyController($this->getDB()))->retrieveCompany();
        return $this->view('pages.home', compact('companies', 'jobs','user'));
    }
    public function error404(string $error){
        header("HTTP/1.1 404 Not Found");
        return $this->view('errors.404', compact('error'));
    }

}