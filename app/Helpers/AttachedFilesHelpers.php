<?php 

namespace App\Helpers;

class AttachedFilesHelpers {

    private $css = [];
    private $js = [];

    public function __constructor(array $css, array $js) {
        $this->css = $css;
        $this->js = $js;
    }

    public function getCSS() : array
    {
        return $this->css;
    }

    public function getJS() : array
    {
        return $this->js;
    }    
}
