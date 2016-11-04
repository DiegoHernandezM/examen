<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencias extends Model
{
  	protected $table = 'dependencias';

    protected $fillable = ['dependencia', 'uuid'];

    public $timestamps = false;

    public function scopeName($query, $name){
        if(trim($name) !=''){
            $query->where(\DB::raw("CONCAT( dependencia, '', uuid)"),"LIKE","%$name%");
        }
    }

}


