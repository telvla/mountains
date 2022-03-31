<?php

namespace Tests\Unit\Helpers;

use App\Helpers\MetaOGHelpers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MetaOGHelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $img = '/img/logo.png';
        $title = 'Заголовок';
        $description = 'Описание';

        $meta_og = new MetaOGHelpers($img, $title, $description);
        $meta_img = $meta_og->getImg();
        $meta_title = $meta_og->getTitle();
        $meta_description = $meta_og->getDescription();

        $this->assertEquals($img, $meta_img);
        $this->assertEquals($title, $meta_title);
        $this->assertEquals($description, $meta_description);
    }
}
