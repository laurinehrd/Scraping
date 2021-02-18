<?php

require_once 'view/view.php';
require_once 'model/userModel.php';
require_once 'controller/checkController.php';


class SignOnController
{
    public function signOn()
    {
        if(isset($_POST['createname']) && !empty($_POST['createname'])
        && isset($_POST['createfirstname']) && !empty($_POST['createfirstname'])
        && isset($_POST['createemail']) && !empty($_POST['createemail'])
        && isset($_POST['createpassword']) && !empty($_POST['createpassword'])
        && isset($_POST['passwordConfirm']) && !empty($_POST['passwordConfirm'])
        ){
    
            $check = new CheckController();
            $createname = $check->check($_POST['createname']);
            $createfirstname = $check->check($_POST['createfirstname']);
            $createemail = $check->check($_POST['createemail']);
            $createpassword = $check->check($_POST['createpassword']);
            $passwordConfirm = $check->check($_POST['passwordConfirm']);
            

            $user = new UserModel();

            $checkEmail = $user->emailExist($createemail); // récupérer tous les emails pour voir si l'email existe

            if(count($checkEmail) === 0) // compte le nb de fois ou l'email apparait
            {
                if(filter_var($createemail, FILTER_VALIDATE_EMAIL)) // si l'adresse mail est valide
                {

                    if($createpassword == $passwordConfirm) // si le password confirm est bien écrit
                    {

                        $user->signOn($createname, $createfirstname, $createemail, $createpassword); // ajout en bdd

                        $sessionUser = $user->user($createemail);
                        $_SESSION['user'] = $sessionUser;

                        header('Location: ?action=dashboard');
                    }
                    else {
                        $_SESSION['error'] = 'Veuillez confirmer le bon mot de passe.';
                    }

                } else {
                    $_SESSION['error'] = "Votre email est considéré comme invalide.";
                }
                    
 
            }
            else {
                header('Location: ?action=signOn');
                $_SESSION['error'] = 'Votre email est déjà présent dans la base de données, veuillez vous connecter.';
                exit();
            }

            
        }
        

        $view = new View('signOn');
        $view->generate(array());
    }
}