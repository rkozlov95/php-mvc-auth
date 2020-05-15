<?php

namespace controllers;

use core\Request;

class Controller
{
    public function view($name, $data = [])
    {
        $lang = $this->checkLanguage();
        $uri = $this->getUri();

        extract($data);
        extract(compact('lang', 'uri'));

        return require "views/{$name}.view.php";
    }

    public function checkLanguage()
    {
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = "ru";
        } elseif ($_GET['lang']) {
            $_SESSION['lang'] = $_GET['lang'];
        }

        require "languages/" . $_SESSION['lang'] . ".php";

        return $lang;
    }

    public function getUri()
    {
        return Request::uri();
    }

    public function filterPost()
    {
        $post = filter_input_array(INPUT_POST);
        return array_map(function ($value) {
            $trimmedValue = trim($value);
            $convertedValue = htmlspecialchars($trimmedValue);
            return $convertedValue;
        }, $post);
    }

    public function filterGet()
    {
        $get = filter_input_array(INPUT_GET);
        return array_map(function ($value) {
            $trimmedValue = trim($value);
            $convertedValue = htmlspecialchars($trimmedValue);
            return $convertedValue;
        }, $get);
    }

    public function encryptPassword($password)
    {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        return $passwordHash;
    }

    public function verifyPassword($submittedPassword, $password)
    {
        $validPassword = password_verify($submittedPassword, $password);

        return $validPassword;
    }

    public function uploadFile($fileTmpName, $newFileName)
    {
        $path = 'public/images/';
        return move_uploaded_file($fileTmpName, $path . $newFileName);
    }

    public function isAllowedFileExtension($fileName, $extensions)
    {
        $fileExtension = strtolower(end(explode('.', $fileName)));
        return in_array($fileExtension, $extensions);
    }
}
