<?php

class Employees extends Controller
{
    public function login()
    {
        $data = ['title' => 'Employee Login'];
        $this->view('employees/login', $data);
    }
}