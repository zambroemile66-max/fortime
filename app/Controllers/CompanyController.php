<?php

namespace App\Controllers;
use App\Models\Company;

class CompanyController extends Controller{
    public function browseCompaniesPage(){
        $this->view('pages.browse-companies');
    }
    public function companyDetailsPage(string $id){
        $company_details = (new Company($this->getDB()))->getCompany($id);
        $this->view('pages.company-details',compact('company_details'));
    }
    public function createCompany($userId) {
        return (new Company($this->getDB()))->insertCompany($userId);
    }
    public function retrieveCompany(){
        return (new Company($this->getDB()))->getAllCompanies();
    }
}