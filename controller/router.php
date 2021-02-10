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
require_once 'controller/disconnectController.php';

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
    private $disconnectController;

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
        $this->disconnectController = new DisconnectController;
    }

    public function routerRequest()
    {
        if(isset($_GET['action']) && !empty($_SESSION['user'])){ // si qqch dans url et qqch dans session 
            
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
            if($_GET['action']=='disconnect'){
                $this->disconnectController->disconnect();
            }
        }
        else if(isset($_GET['action'])) // et si y'a qqch dans url et rien dans session
        {
            
            if($_GET['action']=='signIn'){
                $this->signInController->signIn();
            }
            if($_GET['action']=='signOn'){
                $this->signOnController->signOn();
            }
            if($_GET['action']=='home'){
                $this->homeController->home();
            }

            // ramène à la page home si on essaye de rentrer le nom de la page dans l'url en étant pas connecté
            if($_GET['action']=='dashboard'){
                $this->homeController->home();
            }
            if($_GET['action']=='account'){
                $this->homeController->home();
            }
            if($_GET['action']=='newScrap'){
                $this->homeController->home();
            }
            if($_GET['action']=='listScrap'){
                $this->homeController->home();
            }
            if($_GET['action']=='historical'){
                $this->homeController->home();
            }

        } else // si y'a pas de get action
        {

            if(!empty($_SESSION['user'])) // si la personne est connecté, on est sur le dashboard
            {
                $this->dashboardController->dashboard();
            } else { // si la personne est déconnecté, renvoie à home
                $this->homeController->home();
            }

        }
    }
}