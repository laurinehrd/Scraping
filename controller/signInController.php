<?php

require_once 'view/view.php';
require_once 'model/userModel.php';


class SignInController
{
    public function signIn()
    {
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $user = new UserModel();
            $result = $user->signIn($_POST['email'], $_POST['password']);
            var_dump($result);

            if(count($result) === 0)
            {
                $error = true;
            }
            else {
                // header('Location: ?action=dashboard');
                exit();
            }
        }

        $view = new View('signIn');
        $view->generate(array('error'));
    }
}