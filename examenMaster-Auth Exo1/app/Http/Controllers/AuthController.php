<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function users(){
        $users = User::all();
        return view('layout.users', compact('users'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with(['error'=>true, 'msg'=>'Impossible de ce connecter veillez vérifier vos informations et réessayer.']);
        }
    }

    public function add(){
        return view('layout.add-user');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => true, 'msg' => 'Erreur!'])->withInput();
        }

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make('password')
        ]);
        return redirect()->route('users')->with(['success' => true, 'msg' => "Inscription effectuée avec succès."]);
    }

    public function updateUser(Request $request, $id){
        DB::beginTransaction();
        $user = User::find($id);
        if(!$user){
            return redirect()->back()->with(['error' => true, 'msg' => "Utilisateur non trouvé"]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        DB::commit();
        return redirect()->back()->with(['success' => true, 'msg' => "Les informations ont été modifiées avec succès."]);
    }

    public function updatePassword(Request $request, $id){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return redirect()->back()->withErrors(['error' => true, 'msg' => 'Le mot de passe actuel est incorrect'])->withInput();
        }

        $user = User::find($id);
            if(!$user){
                return redirect()->back()->with(['error' => true, 'msg' => "Utilisateur non trouvé"]);
            }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with(['success'=> true, 'msg' => 'Mot de passe mis à jour avec succès']);
    }
}
