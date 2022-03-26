<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/test');
        $response->assertSee('11111');
    }
}



/* 
Проверка страницы на доступность
 
namespace Tests\Unit;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
 
class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $response = $this->get('/test');
        $response->assertStatus(200);        
    }
}
*/ 
 
/* 
Проверка страницы на значение "текст"
 
namespace Tests\Unit;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
 
class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $response = $this->get('/test');
        $response->assertSee('11111');
    }
}
*/

/*
Проверка метода renderPage на возращение значения true/false

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\AdminPanel\ListApplicationsController;
class InitExampleTest extends TestCase
{
    public function testBasicTest()
    {
        //App\Http\Controllers\AdminPanel\ListApplicationsController     public function renderPage() { return false; }
        $basket = new ListApplicationsController(['renderPage']);
        $this->assertFalse($basket->renderPage()); // curent metod return false // assertTrue/assertFalse
    }
}
*/

/*
Проверка метода renderPage на возращение значения json
//public function renderPage() { $test = ['provider1', 'first', 'second']; return $test; }
    
namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\AdminPanel\ListApplicationsController;
class InitExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $class = new ListApplicationsController(['renderPage']);
        $result = $class->renderPage(); //можно передать параметры в метод
        $test = ['provider1', 'first', 'second'];
        $this->assertEquals($test, $result);
    }
}
*/





















































