<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $character = Character::with('type')->paginate(5);
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $character
        ], 200);
    }

    public function show($id)
    {
        $character = Character::with('type', 'items')->where('id', $id)->first();
        if ($character) {
            return response()->json([
                'status' => 'success',
                'message' => 'Ok',
                'results' => $character
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'results' => 'Product not found !'
            ], 404);
        }


    }
}
