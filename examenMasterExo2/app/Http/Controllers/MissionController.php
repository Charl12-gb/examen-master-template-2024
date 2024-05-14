<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mission;
use App\Models\Competence;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        return view('layout.index', compact('missions'));
    }

    public function add()
    {
        $competences = Competence::all();
        return view('layout.add', compact('competences'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur! Contenu du fichier invalid.'])->withInput();
        }
        $chemin_file = Storage::disk('public')->put('files', $request->file);
        $mission = Mission::create([
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'time' => $request->time,
            'lieu' => $request->lieu,
            'taux' => $request->taux,
            'user_id' => User::first()?->id,
            'competence_ids' => serialize($request->competence_ids),
            'image' => $chemin_file
        ]);
        return redirect()->route('home')->with(['success'=>true, 'message' => 'Mission créé avec succès.']);
    }
}
