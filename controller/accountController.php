<?php

require_once 'model/model.php';
require_once 'view/view.php';


class AccountController
{
    public function account()
    {
        $view = new View('account');
        $view->generate(array());
    }
}