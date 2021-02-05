<?php

require_once 'view/view.php';
require_once 'model/userModel.php';


class SignOnController
{
    public function signOn()
    {
        if(isset($_POST['createname']) && isset($_POST['createfirstname']) && isset($_POST['createemail']) && isset($_POST['createpassword']) && $_POST['createpassword'] === $_POST['passwordConfirm'])
        {

                $user = new UserModel();
                $result = $user->signOn($_POST['createname'], $_POST['createfirstname'], $_POST['createemail'], $_POST['createpassword']);
    
                // $errorMdp = false;

                if(count($result) === 0)
                {
                    header('Location: ?action=dashboard');
                    
                }
                else {
                    $error = true;
                    exit();
                }
            

            
        }
        

        $view = new View('signOn');
        $view->generate(array());
    }
}