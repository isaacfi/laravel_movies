<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ActorController extends BaseController
{
    public function filter(Request $request)
    {
        $name = $request->query('name', '');
        $actors = Actor::with('movies')->where('name', 'like', "%{$name}%")->get();
        return view('actors', ['actors' => $actors, 'name' => $name]);
    }
}
