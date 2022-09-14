<?php

namespace application\lib;

use PDO;

class Db{

    protected $db;

    public function __construct(){
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbName'].'', $config['user'], $config['password']);
    }

    public function query($sql) {
        $query = $this->db->query($sql);
        return $query;
    }

    public function row($sql) {
        $result = $this->query($sql);
        return $result->fetchAll();
    }

    public function column($sql) {

        $result = $this->query($sql);
        return $result->fetchColumn();
    }

    public function fetchClass($sql) {

        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS);
    }

    public function fetchAssoc($sql) {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser($data){

        $sql = 'INSERT INTO users (firstName, lastName, birthdate, reportSubject, country,phone, email)
VALUES(:firstName, :lastName, :birthdate, :reportSubject, :country, :phone, :email)';
        $statement= $this->db->prepare($sql);
        return $statement->execute($data);

    }
}