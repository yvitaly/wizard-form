<?php

$data = [
    "firstName"=>$_POST['firstName'],
    "lastName"=>$_POST['lastName']
];

$connection = new PDO('mysql:host=localhost;dbname=wizard-db','root', '');
$sql = 'INSERT INTO users (firstName, lastName) VALUES(:firstName, :lastName)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);