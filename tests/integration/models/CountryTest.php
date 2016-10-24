<?php 

use App\Country;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CountryTest extends TestCase
{
	use DatabaseTransactions;

	public $mostPopular;

	function setUp()
	{
		parent::setUp();
		$country1 = factory(Country::class)->create(['name'=>'Italy']);
		$country1->cities()->create(['name'=>'Rome','views'=>10,'likes'=>5]);
		$country1->cities()->create(['name'=>'Florence','views'=>5,'likes'=>2]);

		$country2 = factory(Country::class)->create(['name'=>'France']);
		$country2->cities()->create(['name'=>'Paris','views'=>15,'likes'=>6]);
		
		$this->mostPopular = $country1;
	}

	function test_it_fetches_most_popular_country()
	{
		$expected = $this->mostPopular->getKey();

		$popularCountries = Country::popular();
		$actual = $popularCountries->first()->id;

		$this->assertEquals($expected,$actual);

	}
}