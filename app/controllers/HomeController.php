<?php

namespace controllers;

use controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return $this->view('home');
    }
}
