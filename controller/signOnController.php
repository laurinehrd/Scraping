<?php
// session_start();

require_once 'view/view.php';
require_once 'model/userModel.php';


class SignOnController
{
    public function signOn()
    {
        if(isset($_POST['createname']) && isset($_POST['createfirstname']) && isset($_POST['createemail']) && isset($_POST['createpassword']) && $_POST['passwordConfirm'])
        {
            
                $user = new UserModel();
                $result = $user->signOn($_POST['createname'], $_POST['createfirstname'], $_POST['createemail'], $_POST['createpassword']);
    
                $errorMdp = false;

                if(count($result) === 0)
                {
                    header('Location: ?action=dashboard');
                    
                }
                else {
                    $error = true;
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