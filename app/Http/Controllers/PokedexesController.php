<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexesController extends Controller
{
    public function index()
    {
        $data ["pokedex"] = pokedex::all();
        return view('pokedex.index', $data);
    }
    public function store(Request $request)
    {
        //
        // use App\Models\Flight; ใส่ข้างบนก่อน

        $pokedex = new Pokedex;
        $pokedex->name = $request->input('name');
        $pokedex->type = $request->input('type');
        $pokedex->species= $request->input('species');
        $pokedex->height = $request->input('height');
        $pokedex->weight = $request->input('weight');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');
        $pokedex->image_url = $request->input('image_url');
        $pokedex->save();


        return redirect('/pokedexs');
    }

    public function edit(string $id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedex'] = Pokedex::all();


        return view('pokedex.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        //

        $pokedex = Pokedex::find($id);
        $pokedex->name = $request->input('name');
        $pokedex->type = $request->input('type');
        $pokedex->species= $request->input('species');
        $pokedex->height = $request->input('height');
        $pokedex->weight = $request->input('weight');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');
        $pokedex->image_url = $request->input('image_url');
        $pokedex->save();

        return redirect('/pokedexs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pokedex = Pokedex::find($id);
        $pokedex->delete();
        return redirect('/pokedexs');
    }
}


