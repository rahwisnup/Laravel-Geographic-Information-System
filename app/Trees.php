<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trees extends Model
{
    protected $fillable = [
    	'id_user','id_tree_masters','id_tree_categories','id_sides','id_areas','latitude','longitude','photos','descriptions'
    ];

    public function treeCategories(){
    	return $this->belongsTo(TreeCategories::class,'id_tree_categories');
    }

    public function sides(){
    	return $this->belongsTo(Sides::class, 'id_sides');
    }

    public function area(){
    	return $this->belongsTo(Areas::class, 'id_areas');
    }

    public function treeMaster(){
    	return $this->belongsTo(treeMaster::class, 'id_tree_masters');
    }
}
