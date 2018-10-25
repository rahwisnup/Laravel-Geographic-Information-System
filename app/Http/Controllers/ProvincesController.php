<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinces;

class ProvincesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index=0;
        $provinces = Provinces::all();
        // dd($provinces); 
        return view('admin.master_data.provinces.index', compact('provinces','index'));        
    }


    public function createProvinces(){
        $provinces = Provinces::all();
        return view('admin.master_data.provinces.create', compact('provinces'));
    }

    public function storeProvinces(){
        Provinces::create([
            'name' => request('name')
        ]);

        return redirect('/admin/provinces/list');
    }

    public function editProvinces($id){
        $provinces = Provinces::find($id);
        return view('admin.master_data.provinces.edit',compact('provinces'));
    }

    public function updateProvinces($id){
        $provinces = Provinces::find($id);

        $provinces->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('provinces.list');
    }

    public function deleteProvinces($id)
    {
        $provinces = Provinces::findOrFail($id);

        $provinces->delete();

        return redirect()->route('provinces.list');
    }

    public function showProvinces($id){
        $provinces = Provinces::find($id);
        return view('admin.master_data.provinces.show', compact('provinces')); 
    }
}
