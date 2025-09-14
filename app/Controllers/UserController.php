<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{
    
    public function loginPage() {
        return $this->view('pages.login');
    }
    public function signupPage() {
        return $this->view('pages.signup');
    }
}