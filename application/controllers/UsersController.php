<?php


namespace application\controllers;

use application\core\Controller;
use application\models\User;
use PDO;

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

       $userModel = new User();
       $userId = $userModel->create($data);
       $_SESSION['userId']=$userId;
       echo $userId;
    }

    public function updateAction(){
        $data = [
            "company"=>$_POST['company'],
            "posittion"=>$_POST['posittion'],
            "aboutMe"=>$_POST['aboutMe'],
            "photo"=>$_POST['photo'],
        ];

        $userModel = new User();
        $userModel->update($data);


    }


    public function indexAction()
    {
        $userModel = new User();
        $users = $userModel->getAll();
        $this->view->render('Users Page', ['users' => $users]);
    }
}