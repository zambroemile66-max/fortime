<?php

namespace App\Controllers;

class BlogController extends Controller{
    public function homePage(){
        $companies = (new CompanyController($this->getDB()))->retrieveCompany();
        return $this->view('pages.home', compact('companies'));
    }
    public function error404(string $error){
        header("HTTP/1.1 404 Not Found");
        return $this->view('errors.404', compact('error'));
    }

}