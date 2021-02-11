<?php

require_once 'view/view.php';
require_once 'model/userModel.php';
require_once 'controller/checkController.php';


class AccountController
{
    public function account()
    {
        // modification des informations du compte
        if(isset($_POST['updateFirstname']) && !empty($_POST['updateFirstname'])
        && isset($_POST['updateName']) && !empty($_POST['updateName'])
        && isset($_POST['updateEmail']) && !empty($_POST['updateEmail'])
        ){

            $check = new CheckController();
            $updateFirstname = $check->check($_POST['updateFirstname']);
            $updateName = $check->check($_POST['updateName']);
            $updateEmail = $check->check($_POST['updateEmail']);

            $_SESSION['account'] = '';

            $user = new UserModel();
            $user->updateAccount($updateFirstname, $updateName, $updateEmail, $_SESSION['user']['email']); 

            $_SESSION['account'] = 'Les changements ont été opéré avec succès. Reconnecter-vous vous les voir apparaitre.';

        }

        // suppression du compte
        if(isset($_POST['confirmDelete']) && !empty($_POST['confirmDelete']))
        {
            $user1 = new UserModel();
            $user1->deleteAccount($_SESSION['user']['email']);

            $user1 = new DisconnectController();
            $user1->disconnect();

        }


        $view = new View('account');
        $view->generate(array());
    }
}