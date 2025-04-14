<?php

namespace App\Http\Controllers;

use App\Models\Banana;
use Illuminate\Http\Request;
class BananaController extends Controller
{

    public function index()
    {
        $banana = Banana::all();
        return view('banana.index', compact('banana'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'order_number' => 'required|numeric|min:8',
            'amount' => 'required|numeric|max:100',
        ]);
        Banana::create($request->all());
        return redirect()->route('banana.index');
    }

    public function create()
    {
        return view('banana.create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'order_number' => 'required|numeric|min:8',
            'amount' => 'required|numeric|max:100',
        ]);
        $Banana = Banana::find($id);
        $Banana->update($request->all());
        return redirect()->route('banana.index');
    }

    public function destroy($id)
    {
        $banana = Banana::find($id);
        $banana->delete();
        return redirect()->route('banana.index');
    }
}
