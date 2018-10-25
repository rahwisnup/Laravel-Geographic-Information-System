<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sides;

class SidesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sides = Sides::all();
        $index=0;
        // dd($sides); 
        return view('admin.master_data.sides.index', compact('sides','index'));        
    }


    public function createSides(){
        $sides = Sides::all();
        return view('admin.master_data.sides.create', compact('sides'));
    }

    public function storeSides(){
        Sides::create([
            'name' => request('name')
        ]);

        return redirect('/admin/sides/list');
    }

    public function editSides($id){
        $sides = Sides::find($id);
        return view('admin.master_data.sides.edit',compact('sides'));
    }

    public function updateSides($id){
        $sides = Sides::find($id);

        $sides->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('sides.list');
    }

    public function deleteSides($id)
    {
        $sides = Sides::findOrFail($id);

        $sides->delete();

        return redirect()->route('sides.list');
    }

    public function showSides($id){
        $sides = Sides::find($id);
        return view('admin.master_data.sides.show', compact('sides')); 
    }
}
