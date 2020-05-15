<?php

namespace models;

use core\Database;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
