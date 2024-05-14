<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function menus(){
        $menus = Menu::all();
        return view('layout.menus', compact('menus'));
    }

    public function add(){
        return view('layout.add-menu');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'type' => 'required|string',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        Menu::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
        ]);
        return redirect()->route('menus')->with(['success' => true, 'msg' => "Menu ajoutée avec succès."]);
    }
}
