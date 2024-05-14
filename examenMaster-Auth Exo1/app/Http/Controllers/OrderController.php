<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('layout.index', compact('orders'));
    }

    public function add()
    {
        $menus = Menu::all();
        return view('layout.add', compact('menus'));
    }

    public function store(Request $request){
        Order::create([
            'products' => serialize($request->products),
            'sub_total_amount' => $request->subtotal,
            'total_amount' => $request->total
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
