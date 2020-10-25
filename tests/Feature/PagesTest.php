<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContactPageIsAvailable()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * @depends testContactPageIsAvailable
     * @return void
     */
    public function testPageViewContainsVitaj()
    {
        $view = $this->view('pages.admin.index', ['title' => 'Vitaj']);

        $view->assertSee('Vitaj');
    }
}
