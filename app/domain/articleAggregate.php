<?php

class ArticleAggregate
{
    private $articles = array();
    
    function __construct($articles)
    {
        $this->articles = $articles;
    }

    function getByScore()
    {
        usort($this->articles, function($a, $b) {return $a->getReadabilityScore() > $b->getReadabilityScore(); });
        return $this->articles;
    }

}