<?php

require_once("readability.php");

class Article
{
    private $content = "";
    private $title = "";
    private $id = "";
    private $score = 0;
    
    function __construct($text, $title, $id)
    {
        $this->content = $text;
        $this->title = $title;
        $this->id = $id;
        $this->generateReadabilityScore();
    }

    private function generateReadabilityScore()
    {
        $firstParagraph = explode("\n", $this->content)[0];
        $this->score = Readability::getScore($firstParagraph);
    }

    public function getReadabilityScore()
    {
        return $this->score;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

}