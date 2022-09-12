<?php

namespace application\core;

use application\lib\Db;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new Db;
    }
}