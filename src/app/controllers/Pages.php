<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function index()
    {
        $data = [
            'title' => 'Home Page',
        ];
        $this->view('pages/index', $data);
    }
    public function about()
    {
        $this->view('pages/about');
    }
    public function login()
    {
        $this->view('pages/login/header');
        $this->view('pages/login/main');
        $this->view('pages/login/footer');
    }
    public function admin()
    {
        $this->view('pages/admin/dashboard/header');
        $this->view('pages/admin/dashboard/nav');
        $this->view('pages/admin/dashboard/main');
        $this->view('pages/admin/dashboard/footer');
    }
    public function blog() 
    {
         $this->view('pages/blog/header');
         $this->view('pages/blog/main');
         $this->view('pages/blog/footer');

    }
    public function addPost()
    {
        $this->view('pages/blog/header');
        $this->view('pages/addPost/main');

    }
 
}
