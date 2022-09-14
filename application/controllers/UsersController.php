<?php


namespace application\controllers;

use application\core\Controller;
use application\models\User;

class UsersController extends Controller
{
    public function createAction(){
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

    }
    public function indexAction()
    {
        $userModel = new User();
        $users = $userModel->getAll();
        $this->view->render('Users Page', ['users' => $users]);
    }
}