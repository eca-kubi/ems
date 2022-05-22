<?php

class Admin extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Admin Login',
            'pageId' => PageId::ADMIN_LOGIN
            ];
        $this->view('admin/login', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Admin Contact',
            'pageId' => PageId::ADMIN_CONTACT
        ];
        $this->view('admin/contact', $data);
    }

}