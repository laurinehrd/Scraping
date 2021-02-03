<?php

require_once 'model/model.php';
require_once 'view/view.php';


class NewScrapController 
{
    public function newScrap()
    {
        $view = new View('newScrap');
        $view->generate(array());
    }
}