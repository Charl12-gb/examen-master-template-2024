<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompetenceController extends Controller
{
    public function competences(){
        $competences = Competence::all();
        return view('layout.competences', compact('competences'));
    }

    public function add(){
        return view('layout.add-competence');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        Competence::create([
            'name' => $request->name
        ]);
        return redirect()->route('competences')->with(['success' => true, 'msg' => "Competence ajoutée avec succès."]);
    }
}
