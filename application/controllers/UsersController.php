<?php


namespace application\controllers;

use application\core\Controller;
use application\models\User;
use PDO;

class UsersController extends Controller
{
    public function createAction(){
        var_dump('sfdfsd');
        $data = [
            "firstName"=>$_POST['firstName'],
            "lastName"=>$_POST['lastName'],
            "birthdate"=>$_POST['birthdate'],
            "reportSubject"=>$_POST['reportSubject'],
            "country"=>$_POST['country'],
            "phone"=>$_POST['phone'],
            "email"=>$_POST['email'],

        ];

       $userModel = new User();
       $users = $userModel->create($data);




    }
    public function indexAction()
    {
        $userModel = new User();
        $users = $userModel->getAll();
        $this->view->render('Users Page', ['users' => $users]);
    }
}