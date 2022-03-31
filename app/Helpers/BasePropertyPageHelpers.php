<?php 

namespace App\Helpers;

class BasePropertyPageHelpers {

    private $title;
    private $description;
    private $keywords;
    private $meta_og = [
        'img' => '',
        'title' => '',
        'description' => ''
    ];
    private $array_attached_files = [
        'css' => '',
        'js' => ''
    ];

    public function __construct(string $title, string $description, string $keywords, MetaOG $array_meta, AttachedFiles $array_file) 
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;

        $this->meta_og['img'] = $array_meta->img;
        $this->meta_og['title'] = $array_meta->title;
        $this->meta_og['description'] = $array_meta->description;

        $this->array_attached_files['css'] = $array_file->css;
        $this->array_attached_files['js'] = $array_file->js;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }    

    public function getKeywords(): string
    {
        return $this->keywords;
    }    

    public function getMetaOg(): array
    {
        return $this->meta_og;
    }    

    public function getArrayAttachedFiles(): array
    {
        return $this->array_attached_files;
    }    
}