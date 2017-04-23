<?php

require_once("../domain/article.php");

class ArticleRepository
{
    private $apiUrl = "https://en.wikipedia.org/w/api.php";
    private $first50Url = "?format=json&action=query&list=categorymembers&cmtitle=@category&cmlimit=50";
    private $extractsUrl = "?exlimit=20&exchars=500&format=json&action=query&prop=extracts&exintro=true&explaintext&titles=@titles";

    /**
        @param String $category the category of the articles returned
        @return String articles

    */
    public function getFirst50Articles($category)
    {
        $content = json_decode(file_get_contents($this->apiUrl . str_ireplace("@category", $category, $this->first50Url)));
        $article_names = array();
        $article_names_csv = "";
        $return_array = array();

        foreach($content->query->categorymembers as $article)
        {
            $article_names[] = urlencode($article->title);
        }


        $article_names_csv = implode("|", array_slice($article_names, 0, 20));
        $article_names_csv1 = implode("|", array_slice($article_names, 19, 20));
        $article_names_csv2 = implode("|", array_slice($article_names, 40, 10));
        

        //wikipedia has a limit of 20 items with the intro
        $content1 = json_decode(file_get_contents($this->apiUrl . str_ireplace("@titles", $article_names_csv, $this->extractsUrl)), true);
        $content2 = json_decode(file_get_contents($this->apiUrl . str_ireplace("@titles", $article_names_csv1, $this->extractsUrl)), true);
        $content3 = json_decode(file_get_contents($this->apiUrl . str_ireplace("@titles", $article_names_csv2, $this->extractsUrl)), true);
        

        foreach($content1["query"]["pages"] as $key => $val)
            $return_array[] = new Article($val["extract"], $val["title"], $val["pageid"]);
        foreach($content2["query"]["pages"] as $key => $val)
            $return_array[] = new Article($val["extract"], $val["title"], $val["pageid"]);
        foreach($content3["query"]["pages"] as $key => $val)
            $return_array[] = new Article($val["extract"], $val["title"], $val["pageid"]);

        return $return_array;
    }

}