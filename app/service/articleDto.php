<?php

class ArticleDto{
    private $articles = array();
    private $convertedArticle = array();

    function __construct($articles)
    {
        $this->articles = $articles;
    }

    public function getData()
    {
        foreach($this->articles as $article)
        {
            $this->convertedArticle[] = ["score" => $article->getReadabilityScore(), "title" => $article->getTitle()];
        }

        return $this->convertedArticle;
    }

}