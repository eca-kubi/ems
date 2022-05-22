<?php

class Login extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => 'Login page'
        ];

        $this->view('login/index', $data);
    }

    public function submit() {

    }

}
