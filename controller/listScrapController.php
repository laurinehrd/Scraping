<?php

require_once 'model/model.php';
require_once 'view/view.php';


class ListScrapController 
{
    public function listScrap()
    {
        $view = new View('listScrap');
        $view->generate(array());
    }
}