<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;

class CountryController extends Controller
{
	public function index()
	{
		$countries = Country::popular();
		
		return view('pages.country.index',compact('countries'));
	}

	public function show(Country $country)
	{
		$cities = $country->cities()->get();
		return view('pages.country.show',compact('country','cities'));
	}

}
