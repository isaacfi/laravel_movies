<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;

class StarWarsController extends BaseController
{
    public function filter(Request $request)
    {
        $name = $request->query('name', '');
        $starWarsPeople = Http::get('https://swapi.dev/api/people/?search=' . $name);
        return view('starwars', ['characters' => $starWarsPeople['results'], 'name' => $name]);
    }
}
