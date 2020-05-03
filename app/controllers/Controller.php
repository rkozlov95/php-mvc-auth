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
}
