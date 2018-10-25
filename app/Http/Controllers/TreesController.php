<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trees;
use App\User;
use App\TreeCategories;
use App\Areas;
use App\Sides;
use App\TreeMaster;

class TreesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index=0;
        // $trees = Trees::all();

        $trees = \App\Trees::all();
        
        // $data = [
        //     'name' => $trees->name,
            
        // ];
        // return $data;
        // dd($trees); 
        return view('admin.trees.index', compact('trees','index'));        
    }


    public function createTrees(){
        //$trees = Trees::all();
        $users = User::all();
        $tree_masters = TreeMaster::all();
        $tree_categories = TreeCategories::all();
        $trees = trees::all();
        $areas = Areas::all();
        $sides = Sides::all();
        
        return view('admin.trees.create', compact('users','tree_masters', 'tree_categories','trees','areas','sides'));
    }

    public function storeTrees(){
        Trees::create([
            'id_user' => auth()->id(),
            'id_tree_masters' => request('id_tree_masters'),
            'id_tree_categories' => request('id_tree_categories'),
            'id_sides' => request('id_sides'),
            'id_trees' => request('id_trees'),
            'id_areas' => request('id_areas'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude'),
            'descriptions' => request('descriptions'),
        ]);

        return redirect('/admin/trees/list');
    }

    public function editTrees($id){
        $trees = Trees::find($id);
        return view('admin.trees.edit',compact('trees'));
    }

    public function updateTrees($id){
        $trees = Trees::find($id);

        $trees->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('trees.index');
    }

    public function deleteTrees($id)
    {
        $trees = Trees::findOrFail($id);

        $trees->delete();

        return redirect()->route('trees.list');
    }

    public function showTrees($id){
        $trees = Trees::find($id);
        return view('admin.trees.show', compact('trees')); 
    }
}
