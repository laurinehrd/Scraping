<?php

require_once 'view/view.php';
require_once 'controller/homeController.php';
require_once 'controller/signInController.php';
require_once 'controller/signOnController.php';
require_once 'controller/dashboardController.php';
require_once 'controller/accountController.php';
require_once 'controller/newScrapController.php';
require_once 'controller/listScrapController.php';
require_once 'controller/historicalController.php';

class Router
{
    private $homeController;
    private $signInController;
    private $signOnController;
    private $dashboardController;
    private $accountController;
    private $newScrapController;
    private $listScrapController;
    private $historicalController;

    public function __construct()
    {
        $this->homeController= new HomeController;
        $this->signInController = new SignInController;
        $this->signOnController = new SignOnController;
        $this->dashboardController = new DashboardController;
        $this->accountController = new AccountController;
        $this->newScrapController = new NewScrapController;
        $this->listScrapController = new ListScrapController;
        $this->historicalController = new HistoricalController;
    }

    public function routerRequest()
    {
        if(isset($_GET['action'])){
            if($_GET['action']=='signIn'){
                $this->signInController->signIn();
            }
            if($_GET['action']=='signOn'){
                $this->signOnController->signOn();
            }
            if($_GET['action']=='home'){
                $this->homeController->home();
            }
            if($_GET['action']=='dashboard'){
                $this->dashboardController->dashboard();
            }
            if($_GET['action']=='account'){
                $this->accountController->account();
            }
            if($_GET['action']=='newScrap'){
                $this->newScrapController->newScrap();
            }
            if($_GET['action']=='listScrap'){
                $this->listScrapController->listScrap();
            }
            if($_GET['action']=='historical'){
                $this->historicalController->historical();
            }
        }
        else{
            $this->homeController->home();
        }
    }
}