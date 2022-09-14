<?php

namespace application\models;

use application\core\Model;


class User extends Model
{
    protected $table = 'users';

    public function getAll()
    {
        return $this->db->fetchClass('SELECT * FROM ' . $this->table);
    }

    public function create($data){

       return $this->db->insertUser($data);
    }
}