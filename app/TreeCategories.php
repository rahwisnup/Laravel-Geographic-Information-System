<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreeCategories extends Model
{
    protected $fillable = ['name'];

    public function trees(){
        return $this->hasMany(Trees::class);
    }
}
