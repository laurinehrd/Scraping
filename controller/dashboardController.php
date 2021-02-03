<?php

require_once 'model/model.php';
require_once 'view/view.php';


class DashboardController 
{
    public function dashboard()
    {
        $view = new View('dashboard');
        $view->generate(array());
    }
}