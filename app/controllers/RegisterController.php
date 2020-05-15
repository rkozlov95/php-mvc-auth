<?php

namespace controllers;

use controllers\Controller;
use models\User;

class RegisterController extends Controller
{
    public function get()
    {
        return $this->view('register');
    }

    public function post()
    {
        $user = new User();

        $post = $this->filterPost();

        $username = $post['username'];
        $email = $post['email'];
        $password = $post['password'];
        $confirmPassword = $post['confirm_password'];
        $about = $post['about'];
        $file = $_FILES['file'];

        $data = compact(
            'username',
            'email',
            'password',
            'confirmPassword',
            'about',
        );

        if (strlen($username) < '3') {
            $error = 'Username_too_short';
            return $this->view('register', compact('error', 'data'));
        }

        if (strlen($username) > '50') {
            $error = 'Username_too_long';
            return $this->view('register', compact('error', 'data'));
        }

        if ($user->isUsernameAvailable($username) > 0) {
            $error = 'Username_exists';
            return $this->view('register', compact('error', 'data'));
        }

        if (!preg_match('/^[A-Za-z0-9]+$/', $username)) {
            $error = 'Username_contains_disallowed';
            return $this->view('register', compact('error', 'data'));
        }

        if ($user->isEmailAvailable($email) > 0) {
            $error = 'Email_exists';
            return $this->view('register', compact('error', 'data'));
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Incorrect_email';
            return $this->view('register', compact('error', 'data'));
        }

        if ($password !== $confirmPassword) {
            $error = 'Password_missmatch';
            return $this->view('register', compact('error', 'data'));
        }

        if (strlen($password) < '8') {
            $error = 'Password_too_short';
            return $this->view('register', compact('error', 'data'));
        }

        if (strlen($about) < '3') {
            $error = 'About_too_short';
            return $this->view('register', compact('error', 'data'));
        }

        if ($file['size'] > 5000000) {
            $error = 'File_size_max';
            return $this->view('register', compact('error', 'data'));
        }

        if (!$this->isAllowedFileExtension($file['name'], ['jpeg', 'jpg', 'png', 'gif'])) {
            $error = 'Not_allowed_file_extension';
            return $this->view('register', compact('error', 'data'));
        }

        $fileExtension = strtolower(end(explode('.', $file['name'])));
        $newFileName = uniqid(rand(), true) . $fileExtension;
        $this->uploadFile($file['tmp_name'], $newFileName);

        $pathToImage = '/../public/images/' . $newFileName;
        $encryptPassword = $this->encryptPassword($password);
        $user->registerNewUser($username, $email, $encryptPassword, $about, $pathToImage);

        return $this->view('auth');
    }
}
