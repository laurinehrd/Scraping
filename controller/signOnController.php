<?php
session_start();

require_once 'view/view.php';
require_once 'model/userModel.php';


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
    
            $errorMdp = false;

            $user = new UserModel();

            $check = $user->emailExist($_POST['createemail']); // récupérer tous les emails pour voir si l'email existe

            if(count($check) === 0) // compte le nb de fois ou l'email apparait
            {
                if(filter_var($_POST['createemail'], FILTER_VALIDATE_EMAIL)) // si l'adresse mail est valide
                {

                    if($_POST['createpassword'] == $_POST['passwordConfirm']) // si le password confirm est bien écrit
                    {
                        $result = $user->signOn($_POST['createname'], $_POST['createfirstname'], $_POST['createemail'], $_POST['createpassword']); // ajout en bdd
                        header('Location: ?action=dashboard');
                    }
                    else {
                        // header('Location: ?action=signOn');
                        $_SESSION['error'] = 'Veuillez confirmer le bon mot de passe.';
                    }

                } else {
                    // header('Location: ?action=signOn');
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