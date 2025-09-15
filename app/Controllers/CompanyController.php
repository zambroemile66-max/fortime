<?php

namespace App\Controllers;

class CompanyController extends Controller{
    public function browseCompaniesPage(){
        $this->view('pages.browse-companies');
    }
    public function companyDetailsPage(){
        $this->view('pages.company-details');
    }
}