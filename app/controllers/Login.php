<?php

class Login extends Controller
{
    public function __construct()
    {
        //$this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Login page'
        ];

        $this->view('login/index', $data);
    }

    public function authenticate()
    {
    }
}
