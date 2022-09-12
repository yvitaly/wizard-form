<?php


namespace application\controllers;

use application\core\Controller;
use application\models\User;

class UsersController extends Controller
{
    public function indexAction()
    {
        $userModel = new User();
        $users = $userModel->getAll();
        $this->view->render('Users Page', ['users' => $users]);
    }
}