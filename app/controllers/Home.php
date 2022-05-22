<?php
class Home extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home'
        ];

        $this->view('home/index', $data);
    }
}
