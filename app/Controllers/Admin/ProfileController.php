<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class ProfileController extends Controller{
    public function profilePage(){
        $this->viewAdmin('admin.profile');
    }
}