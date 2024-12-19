<?php

require_once '../app/Models/User.php';
require_once '../core/Controller.php';


class UserController extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();

    }
    public function index()
    {
        $this->view('users/index');
    }
    
    public function registr()
    {
        $this->view('users/registr');
    }


    public function handleRegistr()
    {   
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->registr($username,$email, $password);
        header('Location: /posts/main');
    }
    public function login()
    {
        $this->view('users/login');
    }
    // public function logout()
    // {
    //     $this->view('users/logout');
    // }
    public function handleLogin()
    {   
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->login($email, $password);
        header('Location: /posts/main');
    }



}