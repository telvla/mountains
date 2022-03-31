<?php

namespace App\Helpers;

class MetaOGHelpers {

    private $img;
    private $title;
    private $description;

    public function __construct(string $img, string $title, string $description) 
    {
        $this->img = $img;
        $this->title = $title;
        $this->description = $description;
    }

    public function getImg(): string
    {
        return $this->img;
    }    

    public function getTitle(): string
    {
        return $this->title;
    }    
    
    public function getDescription(): string
    {
        return $this->description;
    }        
}