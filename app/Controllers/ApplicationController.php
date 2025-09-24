<?php

namespace App\Controllers;

use App\Models\Application;

class ApplicationController extends Controller{
    private $allowedTypes = ['pdf'];
    private $uploadDir = 'pdfs/';
    public function jobApplication(){
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $this->sanitizeJobApplicationForm();
            $fileName = $this->uploadJobApplicationForm($_FILES['applicant-portfolio']);
            (new Application($this->getDB()))->createApplication($_POST, $fileName);
            $_SESSION['success'] = "Your application has been submitted successfully.";
            header('Location: /fortime/job-application/'.$_SESSION['job_id']);
            exit();

        } catch (\Throwable $th) {
            //throw $th;
            $_SESSION['error'] = $th->getMessage();
            header('Location: /fortime/job-application/'.$_SESSION['job_id']);
            exit();
        }
       }
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