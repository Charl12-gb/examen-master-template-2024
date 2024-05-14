<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }

    public function add()
    {
        return view('layout.add');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,csv,tsv,ods,xls,slk',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur! Contenu du fichier invalid.'])->withInput();
        }

        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }

    public function destroy($id) {
        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }

    public function update(Request $request, $id) {

        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }
}
