<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreeMaster extends Model
{
    protected $fillable = ['name'];

    public function trees(){
        return $this->hasMany(Trees::class);
    }
}
