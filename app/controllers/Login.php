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
        // check password
        //compare against password in the database
        // fetch the users data ==> repository function
        // validation functions
        return true;
    }

    public function submit() {
        // receive the login details
        if ($this->authenticate() == true) {
            // allow them access to their dashboard.
            redirect('dashboard');
        } else {
            // display an error "Incorrect password!

        }
    }

}
