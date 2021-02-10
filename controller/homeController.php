<?php

require_once 'view/view.php';


class HomeController 
{
    public function home()
    {
        $view = new View('home');
        $view->generate(array());
    }
}