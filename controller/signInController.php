<?php
session_start();

require_once 'view/view.php';
require_once 'model/userModel.php';


class SignInController
{
    public function signIn()
    {
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            
            $user = new UserModel();

            $check = $user->emailExist($_POST['email']); // récupérer tous les emails pour voir si l'email exist

            
            if(count($check) === 0) // compte le nb de fois ou l'email apparait
            {
                $error = true; // l'email n'existe pas en bdd
                echo 'veuillez vous inscrire';
            }
            else { // l'email existe en bdd

                $result = $user->signIn($_POST['email']);
                var_dump($result['password']);

                if(password_verify($_POST['password'], $result['password']))
                {
                    header('Location: ?action=dashboard');
                    // exit();
                } 
                else {
                    echo 'mauvais mot de passe';
                }
            }

        }
        else {
            // header('Location: ?action=home');
        }

        $view = new View('signIn');
        $view->generate(array('error'));
    }
}