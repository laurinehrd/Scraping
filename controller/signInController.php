<?php

require_once 'model/model.php';
require_once 'view/view.php';


class SignInController
{
    public function signIn()
    {
        $view = new View('signIn');
        $view->generate(array());
    }
}