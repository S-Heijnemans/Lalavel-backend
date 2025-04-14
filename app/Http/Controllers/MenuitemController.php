<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuitemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuitems = MenuItem::all();
        return view('menuitems.index', compact('menuitems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menuitems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'ingredients' => 'required',
            'description' => 'required|max:25',
            'order_number' => 'nullable|max:100',
            'price' => 'nullable|max:100',
        ]);
        MenuItem::create($request->all());
        return redirect()->route('menuitems.create')->with('success', 'Item successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $menuitem = MenuItem::find($id);
        return view('menuitems.show', compact('menuitem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menuitem = MenuItem::find($id);
        return view('menuitems.edit', compact('menuitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'ingredients' => 'required',
            'description' => 'required',
            'order_number' => 'required|numeric|max:100',
            'price' => 'required|numeric'
        ]);
        $menuitem = MenuItem::find($id);
        $menuitem->update($request->all());
        return redirect()->route('menuitems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menuitem = MenuItem::find($id);
        $menuitem->delete();
        return redirect()->route('menuitems.index');
    }
}
