<?php

namespace App\Controllers\Admin;
use App\Models\Company;
use App\Controllers\Controller;

class CompanyProfileController extends Controller{
    private $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    private $uploadDir = 'uploads/';
    public function companyProfilePage(){
        $company = $this->Company(); 
        $this->viewAdmin('admin.company-profile',compact('company'));
    }
    public function updateCompanyProfilePicture(){
        $company = $this->Company();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            try {
                $fileName = $this->uploadProfilePicture($_FILES['file']);
                (new Company($this->getDB()))->updateProfilePicture($company->id,$fileName);
                $_SESSION['company_logo'] = $fileName;
                $_SESSION['success'] = "Photo de profil mise à jour.";
                header('Location: /fortime/admin/company-profile');
                exit;
            } catch (\Throwable $th) {
                $_SESSION['error'] = $th->getMessage();
                header('Location: /fortime/admin/company-profile');
                exit;
            }
        }
    }
    public function uploadProfilePicture(mixed $file): string
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
    public function Company(): object{
        return (new Company($this->getDB()))->getCompanyId($_SESSION['auth']['admin']['id'] ?? '');
    }
    public function sanitizeCompanyInfo() {
        htmlspecialchars($_POST['comp_name']);
        htmlspecialchars($_POST['comp_web']);
        htmlspecialchars($_POST['founded']);
        htmlspecialchars($_POST['industry']);
        htmlspecialchars($_POST['tech_stack']);
        htmlspecialchars($_POST['location']);

    }
    public function updateCompanyInfo(){
        $company = $this->Company();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->sanitizeCompanyInfo();
                (new Company($this->getDB()))->updateCompanyInfo($_POST,$company->id);
                $_SESSION['success'] = "✅ Informations mises à jour.";
                header('Location: /fortime/admin/company-profile');
                exit;
            } catch (\Throwable $th) {
                $_SESSION['error'] = "❌ ".$th->getMessage();
                header('Location: /fortime/admin/company-profile');
                exit;
            }
        }
    }

    public function updateCompanyMoreInfo(){
        $company = $this->Company();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->sanitizeCompanyInfo();
                (new Company($this->getDB()))->updateCompanyMoreInfo($_POST,$company->id);
                $_SESSION['success'] = "✅ Informations mises à jour.";
                header('Location: /fortime/admin/company-profile');
                exit;
            } catch (\Throwable $th) {
                $_SESSION['error'] = "❌ ".$th->getMessage();
                header('Location: /fortime/admin/company-profile');
                exit;
            }
        }
    }

}