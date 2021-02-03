<?php

require_once 'model/model.php';
require_once 'view/view.php';


class SignOnController
{
    public function signOn()
    {
        $view = new View('signOn');
        $view->generate(array());
    }
}