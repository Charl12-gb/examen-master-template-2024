<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class MyModelController extends Controller
{
    public function index()
    {
        $myModels = MyModel::all();
        return view('layout.index', compact('myModels'));
    }

    public function add()
    {
        return view('layout.add');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        MyModel::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        return redirect()->route('home')->with(['success'=>true, 'msg' => 'Opération effectué avec succès.']);
    }

    public function show($id) {
        $myModel = MyModel::find($id);
        return view('layout.show', compact('myModel'));
    }

    public function destroy($id) {
        $myModel = MyModel::find($id);
        $myModel->delete();
        return redirect()->route('home')->with(['success'=>true, 'msg' => 'Opération effectué avec succès.']);
    }

    public function edit($id) {
        $model = MyModel::find($id);
        return view('layout.add', compact('model'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        $myModel = MyModel::find($id);
        $myModel->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('home')->with(['success'=>true, 'msg' => 'Opération effectué avec succès.']);
    }
}
