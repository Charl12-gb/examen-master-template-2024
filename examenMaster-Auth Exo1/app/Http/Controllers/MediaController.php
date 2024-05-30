<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function medias(){
        $search = request('search') ?? null;
        $categoryId = request('category_id') ?? 'all';
        $query = Media::query();

        if($search){
            $query = $query->where('name', $search);
        }

        if($categoryId && $categoryId != 'all'){
            $query = $query->where('category_id', $categoryId);
        }
        $medias = $query->get();

        $categories = Category::all();
        return view('layout.index', compact('medias', 'categories'));
    }

    public function add(){
        $categories = Category::all();
        return view('layout.add-media', compact('categories'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'file' => 'required|mimes:mp4,',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        $chemin_file = Storage::disk('public')->put('files', $request->file);
        Media::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'file' => $chemin_file,
        ]);
        return redirect()->route('home')->with(['success' => true, 'msg' => "Média ajoutée avec succès."]);
    }
}
