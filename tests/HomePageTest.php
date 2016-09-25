<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomePageLoad()
    {
        $this->visit('/')
             ->see('Laravel');
    }
}
