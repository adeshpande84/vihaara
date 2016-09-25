<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AboutPageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAboutPageLoad()
    {
        $this->visit('/about')
             ->see('Vihaara - Travel planner');
    }
}
