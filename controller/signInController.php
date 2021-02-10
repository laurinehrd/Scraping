<?php
session_start();

require_once 'view/view.php';
require_once 'model/userModel.php';
require_once 'controller/checkController.php';


class SignInController
{
    public function signIn()
    {

        if(isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])
        ){

            $check = new CheckController();
            $email = $check->check($_POST['email']);
            $password = $check->check($_POST['password']);


            $user = new UserModel();

            $check = $user->emailExist($email); // récupérer tous les emails pour voir si l'email existe

            if(count($check) === 0) // compte le nb de fois ou l'email apparait
            {
                // l'email n'existe pas en bdd
                $_SESSION['error'] = 'Aucun compte retrouvé, veuillez vous inscrire.';
            }
            else { // l'email existe en bdd

                $result = $user->signIn($email);

                if(password_verify($password, $result['password'])) // si le mot de passe correspond
                {
                    $sessionUser = $user->user($email);
                    $_SESSION['user'] = $sessionUser;

                    header('Location: ?action=dashboard');
                } 
                else {
                    $_SESSION['error'] = 'Mauvais mot de passe.';
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