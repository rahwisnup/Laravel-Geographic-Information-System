<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $fillable = ['name','id_districts','id_regencies', 'id_provinces'];

    public function trees(){
        return $this->hasMany(Trees::class);
    }
}
