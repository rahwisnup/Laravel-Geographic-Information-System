<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TreeMaster;

class TreeMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index=0;
        $treeMaster = TreeMaster::all();
        // dd($treeMaster); 
        return view('admin.master_data.tree_master.index', compact('treeMaster','index'));
        
    }

    public function createTreeMaster(){
        $treeMaster = TreeMaster::all();

        return view('admin.master_data.tree_master.create', compact('treeMaster'));
    }

    public function storeTreeMaster(){
        TreeMaster::create([
            'name' => request('name')
        ]);

        return redirect('/admin/tree-master/list');
    }

    public function editTreeMaster($id){
        $treeMaster = TreeMaster::find($id);
        return view('admin.master_data.tree_master.edit', compact('treeMaster'));
    }

    public function updateTreeMaster($id){
        $treeMaster = TreeMaster::find($id);

        $treeMaster->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('treeMaster.list');
    }

    public function deleteTreeMaster($id)
    {
        $treeMaster = TreeMaster::findOrFail($id);

        $treeMaster->delete();

        return redirect()->route('treeMaster.list');
    }

    public function showTreeMaster($id){
        $treeMaster = TreeMaster::find($id);
        return view('admin.master_data.tree_master.show', compact('treeMaster')); 
    }
}
