<?php

namespace controllers;

use controllers\Controller;

class RegisterController extends Controller
{
    public function show()
    {
        return $this->view('register');
    }
}
