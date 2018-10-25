<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regencies;

class RegenciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index=0;
        $regencies = Regencies::all();
        // dd($regencies); 
        return view('admin.master_data.regencies.index', compact('regencies','index'));        
    }


    public function createRegencies(){
        $regencies = Regencies::all();
        return view('admin.master_data.regencies.create', compact('regencies'));
    }

    public function storeRegencies(){
        Regencies::create([
            'name' => request('name')
        ]);

        return redirect('/admin/regencies/list');
    }

    public function editRegencies($id){
        $regencies = Regencies::find($id);
        return view('admin.master_data.regencies.edit',compact('regencies'));
    }

    public function updateRegencies($id){
        $regencies = Regencies::find($id);

        $regencies->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('regencies.list');
    }

    public function deleteRegencies($id)
    {
        $regencies = Regencies::findOrFail($id);

        $regencies->delete();

        return redirect()->route('regencies.list');
    }

    public function showRegencies($id){
        $regencies = Regencies::find($id);
        return view('admin.master_data.regencies.show', compact('regencies')); 
    }
}
