<?php

require_once 'model/model.php';
require_once 'view/view.php';


class HistoricalController
{
    public function historical()
    {
        $view = new View('historical');
        $view->generate(array());
    }
}