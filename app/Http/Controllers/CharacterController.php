<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;


class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('welcome', compact('characters'));
    }
}
