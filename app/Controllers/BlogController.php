<?php

namespace App\Controllers;

class BlogController extends Controller{
    public function homePage(){
        return $this->view('pages.home');
    }

    public function error404(string $error){
        header("HTTP/1.1 404 Not Found");
        return $this->view('errors.404', compact(['error']));
    }

}