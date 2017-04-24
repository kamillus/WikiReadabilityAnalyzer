<?php

    require_once("../domain/article.php");
    require_once("../domain/articleAggregate.php");
    require_once("../repository/article.php");
    require_once("../service/articleDto.php");

/**
    Api calls that fuel the frontend. The class fuels the mot readable paragraph extraction. 
    The Api is not restful.
*/

class Api
{
    
    /**
        @param Array params php $_GET parameter
        @return String json data

    */
    public function process($params)
    {
        if(isset($params["category"]))
        {
            if(strlen($params["category"]) > 100)
            {
                throw new Exception("Category too long");
            }           
            return $this->getReadability($params["category"]);
        }
        else{
            http_response_code(404);
            die();
        }
    }
    /**
        @param String The category of the articles to be searched for
        @return String json data

    */
    private function getReadability($category)
    {
        $paragraphRepository = new ArticleRepository();
        $articleAggregate = new ArticleAggregate($paragraphRepository->getFirst50Articles(urlencode($category)));
        $articleDto = new ArticleDto($articleAggregate->getByScore());
//        print_r($articleAggregate->getByScore());
        return json_encode($articleDto->getData());

    }
}

// Fudged in here for simplicity.
$api = new Api();
print($api->process($_GET));


