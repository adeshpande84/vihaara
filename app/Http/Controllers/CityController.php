<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;

class CityController extends Controller
{
	public function index()
	{
		$popularCities = City::popular();
		
		return view('pages.cities',compact('popularCities'));
	}

}
