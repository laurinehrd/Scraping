<?php

require_once 'view/view.php';


class DisconnectController 
{
    public function disconnect()
    {
        unset($_SESSION['user']);

        $view = new View('home');
        $view->generate(array());
    }
}