<?php
// session_start();

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
                        $result = $user->signOn($_POST['createname'], $_POST['createfirstname'], $_POST['createemail'], $_POST['createpassword']);
                        header('Location: ?action=dashboard');
                    }
                    else {
                        echo 'Veuillez confirmer le bon mot de passe.';
                    }

                } else {
                    echo "Votre email est considéré comme invalide.";
                }
                    
 
            }
            else {
                $error = true;
                // header('Location: ?action=home');
                echo 'Votre email est déjà présent dans la base de données, veuillez vous connecter.';
                exit();
            }

                // if($row == 0)
                // {
                //     if(strlen($email) <= 100)
                //     {
                //         if(filter_var($email, FILTER_VALIDATE_EMAIL))
                //         {
                //             if($password == $passwordConfirm)
                //             {
                //                 $password = hash('sha256', $password);

                //                 $insert = $bd->prepare('INSERT INTO user(name, firstname, email, password) VALUE(:name, :firstname, :email, :password)');
                //                 $insert->execute(array(
                //                     'name' => $name,
                //                     'firstname' => $firstname,
                //                     'email' => $email,
                //                     'password' => $password
                //                 ));
                //                 header('Location: ?action=home?reg_err=success');
                //             } else {
                //                 header('Location: ?action=home?reg_err=password');
                //             }
                //         } else {
                //             header('Location: ?action=home?reg_err=email');
                //         }
                //     } else {
                //         header('Location: ?action=home?reg_err=email_lenght');
                //     }
                // } else {
                //     header('Location: ?action=home?reg_err=already');
                // }
            

            
        }
        

        $view = new View('signOn');
        $view->generate(array());
    }
}