<?php

namespace controllers;

class Controller
{
    public function view($name, $data = [])
    {
        $lang = $this->checkLanguage();

        extract($lang);
        extract($data);

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
}
