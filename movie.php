<?php


class Movie {
    private $title;
    private $genre;
    private $language;

    function __construct($_title, $_genre, $_language){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;

    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getLanguage(){
        return $this->language;
    }
}
