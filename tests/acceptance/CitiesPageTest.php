<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CitiesPageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCitiesPageLoad()
    {
        $this->visit('/cities')
             ->see('Cities');
    }

}
