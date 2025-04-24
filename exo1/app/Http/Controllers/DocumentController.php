<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('layout.index', compact(('documents')));
    }

    public function add()
    {
        return view('layout.add');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'filepond' => 'required|mimes:xlsx,csv,tsv,ods,xls,slk,jpg,png',
            'numero' => 'required|string:255',
            'date' => "required",
            'objet' => "required"
        ]);

        // dd($validator->fails());

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur! Contenu du fichier invalid.'])->withInput();
        }

        $chemin_file = Storage::disk('public')->put('files', $request->filepond);
        Document::create([
            'numero' => $request->numero,
            'date' => $request->date,
            'objet' => $request->objet,
            'file' => $chemin_file,
        ]);

        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }

    public function destroy($id) {
        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }

    public function update(Request $request, $id) {

        return redirect()->route('home')->with(['success'=>true, 'message' => 'Opération effectué avec succès.']);
    }
}
