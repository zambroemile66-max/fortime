<?php

namespace App\Controllers;

use App\Controllers\Admin\CompanyProfileController;
use App\Models\User;

class UserProfileController extends Controller{
    private $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    private $uploadDir = 'uploads/';

    public function userProfilePage(string $id){
        $user = (new User($this->getDB()))->getUserById($id);
        $this->viewUserProfile('pages.user-profile',compact('user'));
    }
    public function updateUserPicture(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $filename = (new CompanyProfileController($this->getDB()))->uploadProfilePicture($_FILES['file']);
                (new User($this->getDB()))->updateProfilePicture($_SESSION['auth']['user']['id'],$filename);
                $_SESSION['auth']['user']['photo'] = $filename;
                $_SESSION['success'] = "✅ Profile up-to-date";
                header('Location: /fortime/user-profile/'.$_SESSION['auth']['user']['id']);
                exit;
            } catch (\Throwable $th) {
                $_SESSION['error'] = "❌ Failed";
                header('Location: /fortime/user-profile/'.$_SESSION['auth']['user']['id']);
                exit;
            }
        }
    }
}