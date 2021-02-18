<?php

require_once 'view/view.php';
require_once 'model/scrapModel.php';
require_once "vendor/autoload.php";
use Goutte\Client;


class NewScrapController 
{
    private $lastId = 0;

    public function newScrap()
    {

        if(isset($_POST['scrapName']) && !empty($_POST['scrapName'])
        && isset($_POST['scrapUrl']) && !empty($_POST['scrapUrl'])
        && isset($_POST['selectParent']) && !empty($_POST['selectParent'])
        && isset($_POST['underSelect']) && !empty($_POST['underSelect'])
        && isset($_POST['selectChild']) && !empty($_POST['selectChild'])
        && isset($_POST['scrapType']) && !empty($_POST['scrapType'])
        && isset($_POST['scrapCategory']) && !empty($_POST['scrapCategory'])
        ){

            $check = new CheckController();
            $scrapName = $check->check($_POST['scrapName']);
            $scrapUrl = $check->check($_POST['scrapUrl']);
            $selectParent = $check->check($_POST['selectParent']);
            $underSelect = $check->check($_POST['underSelect']);
            $scrapType = $check->check($_POST['scrapType']);
            $scrapCategory = $check->check($_POST['scrapCategory']);
            
            $scrap = new ScrapModel();
            $scrap->scrap($scrapName, $scrapCategory, $scrapUrl, $selectParent, $underSelect); 

            $this->lastId = $scrap->lastId(); // récupérer le dernier id de scrap

            
            $client = new Client();
            $scraping = $client->request('GET', $scrapUrl);


            $scraping->filter($selectParent.'>'.$underSelect)->each(function ($node)  { // use ($out)

                $nom = trim($node->filter($_POST['selectChild'])->text());
                print_r([$nom]);

                $scrap = new ScrapModel();
                $scrap->detailScrap($_POST['selectChild'], $this->lastId, $_POST['scrapType'], $nom);
            });


        }
        

        $scrap = new ScrapModel();
        $types = $scrap->typeAll();


        $view = new View('newScrap');
        $view->generate(array('types'=>$types));
    }
}