<?php

require_once 'view/view.php';



class ListScrapController 
{
    public function listScrap()
    {

        $scrap = new ScrapModel();
        $liste = $scrap->listScrap(); 

        // suppression de l'extraction
        if(isset($_POST['deleteScrap']) && !empty($_POST['deleteScrap']))
        {
            $check = new CheckController();
            $idScrap = $check->check($_POST['idScrap']);

            $delete = new ScrapModel();
            $delete->deleteScrap($idScrap);
            $delete->deleteDetailScrap($idScrap);

            header('Location: ?action=listScrap');
        }
        // modification des informations
        // if(isset($_POST['']) && !empty($_POST['']))
        // {
        //     $check = new CheckController();
        //     $idScrap = $check->check($_POST['idScrap']);

        //     $delete = new ScrapModel();
        //     $delete->updateScrap();

        //     $_SESSION[""] = [
        //         "id"=> $id,
        //         "titre"=> $titre,
        //         "descrea"=> $descrea,
        //         "img"=> $img,
        //         "contexte"=> $contexte,
        //         "choix"=> $choix
        //     ];

            // $view = new View('updateScrap');
            // $view->generate(array('listes'=>$liste));

            // dans la nouvelle vue avec le form pour modifier le scrap, ne pas oublier de mettre un input hidden pour l'id
        }






        $view = new View('listScrap');
        $view->generate(array('listes'=>$liste));
    }
}
