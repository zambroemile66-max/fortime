<?php

namespace App\Controllers;
use App\Models\Company;

class CompanyController extends Controller{
    public function browseCompaniesPage(){
        $companies = (new Company($this->getDB()))->getAllCompanies();
        $this->view('pages.browse-companies',compact('companies'));
    }
    public function companyDetailsPage(string $id){
        $company_details = (new Company($this->getDB()))->getCompany($id);
        $this->view('pages.company-details',compact('company_details'));
    }
    public function createCompany($userId) {
        return (new Company($this->getDB()))->insertCompany($userId);
    }
    public function retrieveCompany(): array{
        return (new Company($this->getDB()))->getCompanies();
    }
}