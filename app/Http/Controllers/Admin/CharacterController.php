<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Type;
use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $types = Type::all();
        $items = Item::all();
        return view('admin.characters.create', compact('types', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreCharacterRequest $request)
    {
        $form_data = $request->validated();
        $form_data['user_id'] = Auth::id();
         $newCharacter = Character::create($form_data);

        if ($request->has('items')) {
            $newCharacter->items()->attach($request->items);
        }
        return redirect()->route('admin.characters.show', $newCharacter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {

        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {

        $types = Type::all();
        $items = Item::all();
        return view('admin.characters.edit', compact('types', 'items','character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();
        $character->update($data);

        if ($request->has('items')) {
            $character->items()->sync($request->items);
        } else {
            $character->items()->sync([]);
        }

        return redirect()->route('admin.characters.show', $character->id)->with('message', 'Il post è stato aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('message', "$character->name deleted successfully.");;
    }
}
