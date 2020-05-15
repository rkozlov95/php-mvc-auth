<?php

namespace controllers;

use controllers\Controller;
use models\User;

class AuthController extends Controller
{
    public function get()
    {
        return $this->view('auth');
    }

    public function post()
    {
        $user = new User();

        $post = $this->filterPost();

        $email = $post['email'];
        $password = $post['password'];

        $data = $user->getUserByEmail($email);

        if ($this->verifyPassword($password, $data['password'])) {
            return $this->view('profile', compact('data'));
        }

        if (empty($data)) {
            $error = 'Email_not_exists';
            return $this->view('auth', compact('error', 'email', 'password'));
        }

        $error = "Login_fail";

        return $this->view('auth', compact('error', 'email', 'password'));
    }
}
