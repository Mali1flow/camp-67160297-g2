<?php

namespace App\Http\Controllers;

use App\Models\Pokedex; // ตรวจสอบว่ามีไฟล์นี้อยู่ใน app/Models/Pokedex.php
use Illuminate\Http\Request;

class PokedexesController extends Controller
{
    public function index()
    {
        // แก้เป็น P ตัวใหญ่ให้ตรงกับ Model
        $data["pokedex"] = Pokedex::all();
        return view('pokedex.index', $data);
    }

    public function store(Request $request)
    {
        $pokedex = new Pokedex;
        $pokedex->name = $request->input('name');
        $pokedex->type = $request->input('type');
        $pokedex->species = $request->input('species');
        $pokedex->height = $request->input('height');
        $pokedex->weight = $request->input('weight');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');
        $pokedex->image_url = $request->input('image_url');
        $pokedex->save();

        // ตรวจสอบว่า URL คือ /pokedex หรือ /pokedexs
        return redirect('/pokedex');
    }

    public function edit(string $id)
    {
        $pokedex_update = Pokedex::find($id);

        // กรณีหา ID ไม่เจอ ให้เด้งกลับ
        if (!$pokedex_update) {
            return redirect('/pokedex')->with('error', 'ไม่พบข้อมูล');
        }

        $data['pokedex_update'] = $pokedex_update;
        $data['pokedex'] = Pokedex::all();

        return view('pokedex.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $pokedex = Pokedex::find($id);
        if ($pokedex) {
            $pokedex->name = $request->input('name');
            $pokedex->type = $request->input('type');
            $pokedex->species = $request->input('species');
            $pokedex->height = $request->input('height');
            $pokedex->weight = $request->input('weight');
            $pokedex->hp = $request->input('hp');
            $pokedex->attack = $request->input('attack');
            $pokedex->defense = $request->input('defense');
            $pokedex->image_url = $request->input('image_url');
            $pokedex->save();
        }

        return redirect('/pokedex');
    }

    public function destroy(string $id)
    {
        $pokedex = Pokedex::find($id);
        if ($pokedex) {
            $pokedex->delete();
        }
        return redirect('/pokedex');
    }
}
