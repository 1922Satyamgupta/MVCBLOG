<?php
//load the model and view
class Controller
{
    public function model($model)
    {
        //require model file
        require_once '../app/models/' . $model . '.php';
        //init model
        return new $model;
    }
    // load the view
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View Doesnt Exist");
        }
    }
}
