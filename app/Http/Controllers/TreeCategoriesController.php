<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TreeCategories;

class TreeCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index=0;
        $treeCategories = TreeCategories::all();
        // dd($treeCategories); 
        return view('admin.master_data.tree_categories.index', compact('treeCategories','index'));
        
    }

    public function createTreeCategories(){
        $treeCategories = TreeCategories::all();

        return view('admin.master_data.tree_categories.create', compact('treeCategories'));
    }

    public function storeTreeCategories(){
        TreeCategories::create([
            'name' => request('name')
        ]);

        return redirect('/admin/tree-categories/list');
    }

    public function editTreeCategories($id){
        $treeCategories = TreeCategories::find($id);
        return view('admin.master_data.tree_categories.edit', compact('treeCategories'));
    }

    public function updateTreeCategories($id){
        $treeCategories = TreeCategories::find($id);

        $treeCategories->update([
            'name' => request('name'),
        ]);

        return redirect() -> route('treeCategories.list');
    }

    public function deleteTreeCategories($id)
    {
        $treeCategories = TreeCategories::findOrFail($id);

        $treeCategories->delete();

        return redirect()->route('treeCategories.list');
    }

    public function showTreeCategories($id){
        $treeCategories = TreeCategories::find($id);
        return view('admin.master_data.tree_categories.show', compact('treeCategories')); 
    }
}
