<?php
class Home extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $dto = new HomeDTO();

        $this->view('home/index', $dto->toArray());
    }
}
