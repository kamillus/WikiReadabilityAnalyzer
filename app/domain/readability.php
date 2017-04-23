<?php

require_once("../vendor/syllables.php");

/**
    This readability score utilizes the Flesch reading ease
    https://en.wikipedia.org/wiki/Flesch%E2%80%93Kincaid_readability_tests
*/
class Readability
{
    public static function getScore($paragraph)
    {
        return 206.835 - 1.015 * 
            (count(explode(" ", $paragraph))/count(explode(".", $paragraph)))
            -84.6 * (Syllables::totalSyllables($paragraph)/count(explode(" ", $paragraph)));
    }
}