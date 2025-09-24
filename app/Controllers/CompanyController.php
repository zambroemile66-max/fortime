<?php

namespace App\Controllers;
use App\Controllers\Admin\ApplicantController;
use App\Models\Company;

class CompanyController extends Controller{
    public function browseCompaniesPage(){
        $companies = (new Company($this->getDB()))->getAllCompanies();
        $this->view('pages.browse-companies',compact('companies'));
    }
    public function companyDetailsPage(string $id){
        $company_details = (new Company($this->getDB()))->getCompany($id);
        $team = (new Company($this->getDB()))->getCompanyTeamMember($company_details->id);
        $count_member = (new ApplicantController($this->getDB()))->countTeamMember($company_details->id);
        $this->view('pages.company-details',compact('company_details','team','count_member'));
    }
    public function createCompany($userId) {
        return (new Company($this->getDB()))->insertCompany($userId);
    }
    public function retrieveCompany(): array{
        return (new Company($this->getDB()))->getCompanies();
    }
}