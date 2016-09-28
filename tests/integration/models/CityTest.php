<?php

use App\City;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CityTest extends TestCase
{
	use DatabaseTransactions;

	public $mostPopular;

	function setUp()
	{
		parent::setUp();
		factory(City::class,3)->create();
		factory(City::class)->create(['name'=>'Paris','views'=>10]);
		$this->mostPopular = factory(City::class)->create(['name'=>'Rome','views'=>20]);
	}

	function test_it_fetches_three_popular_cities()
	{
		
		
		$popular = City::popular();
		$this->assertCount(3,$popular);
	}

	function test_it_fetches_most_popular_city() 
	{
		//given
		//given is in setUp method
		
		$expected = $this->mostPopular->getKey();
		
		//when
		$popular = City::popular();
		$actual = $popular->first()->getKey();

		//then
		$this->assertEquals($expected,$actual);

	}
}