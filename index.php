
<?php 
require "view/home.php";


if(isset($_GET['action'])){
    if($_GET['action']=='signIn'){
        require "view/signIn.php";
    }
    else{
        require "view/home.php";
    }

}





    



    


