<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('layout.index', compact('evaluations'));
    }

    public function add()
    {
        $users = User::all();
        return view('layout.add', compact('users'));
    }

    public function store(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'file' => 'required|mimes:pdf',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->with(['error' => true, 'msg' => 'Erreur! Contenu du fichier invalid.'])->withInput();
        // }
        $chemin_file = Storage::disk('public')->put('files', $request->file);
        $evalution = Evaluation::create([
            'is_note' => $request->is_note == 'oui' ? true : false,
            'evaluation_year' => $request->evaluation_year,
            'moment' => $request->moment,
            'number_miss_day' => $request->number_miss_day,
            'number_working_days' => $request->number_working_days,
            'skills' => $request->skills,
            'pontualite' => $request->pontualite,
            'assiduite' => $request->assiduite,
            'respect' => $request->respect,
            'appreciations' => $request->appreciations,
            'file' => $chemin_file,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('home')->with(['success'=>true, 'message' => 'Evaluation effectué avec succçs.']);
    }
}
