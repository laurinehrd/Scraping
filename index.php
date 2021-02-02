
<?php 

if(isset($_GET['action'])){
    if($_GET['action']=='signIn'){
        require "view/signIn.php";
    }
    if($_GET['action']=='signOn'){
        require "view/signOn.php";
    }
    if($_GET['action']=='home'){
        require "view/home.php";
    }
    if($_GET['action']=='dashboard'){
        require "view/dashboard.php";
    }
    if($_GET['action']=='account'){
        require "view/account.php";
    }
    if($_GET['action']=='newScrap'){
        require "view/newScrap.php";
    }
    if($_GET['action']=='listScrap'){
        require "view/listScrap.php";
    }
    if($_GET['action']=='historical'){
        require "view/historical.php";
    }
    
    

}
else{
    require "view/home.php";
}





    



    


