<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();
        return view('/countries', compact('countries'));
    }
}
