<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Districts;

class DistrictsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $index=0;
    	$districts = Districts::all();
    	return view('admin.master_data.districts.index', compact('districts','index'));
    }

    public function createDistricts(){
        $districts = Districts::all();
        return view('admin.master_data.districts.create', compact('districts'));
    }

    public function storeDistricts(){
        Districts::create([
            'name' => request('name')
        ]);

        return redirect('/admin/districts/list');
    }

    public function editDistricts($id){
        $districts = Districts::find($id);
        return view('admin.master_data.districts.edit',compact('districts'));
    }

    public function updateDistricts($id){
        $districts = Districts::find($id);

        $districts->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('districts.list');
    }

    public function deleteDistricts($id)
    {
        $districts = Districts::findOrFail($id);

        $districts->delete();

        return redirect()->route('districts.list');
    }

    public function showDistricts($id){
        $districts = Districts::find($id);
        return view('admin.master_data.districts.show', compact('districts')); 
    }
}
