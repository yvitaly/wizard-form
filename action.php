<?php
echo 'new page';
$data = [
    "firstName"=>$_POST['firstName'],
    "lastName"=>$_POST['lastName'],
    "birthdate"=>$_POST['birthdate'],
    "reportSubject"=>$_POST['reportSubject'],
    "country"=>$_POST['country'],
    "phone"=>$_POST['phone'],
    "email"=>$_POST['email'],

];

$connection = new PDO('mysql:host=localhost;dbname=wizard-db','root', '');
$sql = 'INSERT INTO users (firstName, lastName, birthdate, reportSubject, country,phone, email)
VALUES(:firstName, :lastName, :birthdate, :reportSubject, :country, :phone, :email)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);