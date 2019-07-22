<?php

namespace Tests\Feature;

use Tests\TestCase;


class HomeTest extends TestCase
{

    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');
        $response->assertSeeText('Welcome to laravel');
        $response->assertSeeText('This is the content of the main');
    }

    public function testContactPageIsWorkingCorrectly()
    {
        $response = $this->get('/contact');
        $response->assertSeeText('Contact');
        $response->assertSeeText('Hello this is contact');

    }
}
