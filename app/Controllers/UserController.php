<?php

namespace App\Controllers;

use Exception;
use App\Models\User;

class UserController extends Controller{
    
    public function loginPage() {
        return $this->view('pages.login');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            try {
                $userChecked = (new User($this->getDB()))->checkIfUserExists($_POST['email']);
                if (!empty($userChecked) && password_verify($_POST['password'], $userChecked['password_hash'])) {
                    $this->userRedirect($userChecked['type']);
                }else{
                    throw new Exception('Mot de passe ou email incorrect');
                }
            } catch (\Throwable $th) {
                $_SESSION['error'] = "❌ Erreur : " . $th->getMessage();
                header('Location: login');
                exit;
            }
        }
    }

    public function userRedirect(string $userType) : void {
        $_SESSION['success'] = "✅ Utilisateur connecté";
        $userType === 'company' ? header('Location: admin/dashboard') : header('Location: /fortime');
    }
    public function signupPage() {
        return $this->view('pages.signup');
    }
    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

                // Insère l'utilisateur et récupère son ID
                $userId = (new User($this->getDB()))->insertUser(
                    $_POST['name'],
                    $_POST['email'],
                    $hashedPassword,
                    $_POST['type']
                );

                // Si c'est une entreprise → créer une entrée dans company
                if ($_POST['type'] === 'company') {
                    (new CompanyController($this->getDB()))->createCompany($userId);
                }

                $_SESSION['success'] = "✅ Utilisateur ajouté avec succès";
                header('Location: login');
                exit;

            } catch (Exception $e) {
                // if ($e->getCode() == 23000) {
                //     $_SESSION['error'] = "❌ Cet utilisateur existe déjà !";
                // } else {
                    
                // }
                $_SESSION['error'] = "❌ Erreur : " . $e->getMessage();
                header('Location: signup');
                exit;
            }
        }
    }

}