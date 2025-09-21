<?php

namespace App\Controllers;

use App\Models\Job;

class JobController extends Controller{
    private $allowedTypes = ['pdf'];
    private $uploadDir = 'pdfs/';

    public function jobsDetailsPage(string $id){
        $jobs_details = (new Job($this->getDB()))->getJob($id);
        $this->view('pages.jobs-details',compact('jobs_details'));
    }
    public function jobApplicationPage(string $id){
        $jobs_application = (new Job($this->getDB()))->getJobApplication($id);
        $this->view('pages.job-application',compact('jobs_application'));
    }
    public function jobApplication(){
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # code...
       }
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
    public function sanitizeJobApplicationForm(){
        htmlspecialchars($_POST['applicant-name']);
        htmlspecialchars($_POST['applicant-email']);
        htmlspecialchars($_POST['applicant-phone']);
        htmlspecialchars($_POST['applicant-prev-job']);
        htmlspecialchars($_POST['applicant-linkedind']);
        htmlspecialchars($_POST['applicant-field']);
    }
    public function uploadJobApplicationForm(mixed $file)
    {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new \Exception("Erreur lors de l'upload du fichier.");
        }

        $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($fileType, $this->allowedTypes)) {
            throw new \Exception("Format de fichier non autorisé.");
        }

        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 0755, true);
        }

        $fileName = uniqid() . '_' . basename($file['name']);
        $targetFile = $this->uploadDir . $fileName;

        if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
            throw new \Exception("Impossible de sauvegarder le fichier.");
        }

        return $fileName;
    }
}