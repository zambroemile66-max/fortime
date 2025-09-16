<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

class EmailController extends Controller
{
    public function emailPage()
    {
        $this->viewAdmin('admin.emails');
    }
}