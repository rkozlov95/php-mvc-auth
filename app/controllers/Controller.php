<?php

namespace controllers;

use core\Request;

class Controller
{
    public function view($name, $data = [])
    {
        $lang = $this->checkLanguage();
        $uri = $this->getUri();

        extract($lang);
        extract($data);
        extract(['uri' => $uri]);

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
}
