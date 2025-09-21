<?php

namespace App\Controllers;

use App\Models\User;

class UserProfileController extends Controller{

    public function userProfilePage(string $id){
        $user = (new User($this->getDB()))->getUserById($id);
        $this->viewUserProfile('pages.user-profile',compact('user'));
    }
}