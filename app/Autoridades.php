<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridades extends Model
{
    protected $table = 'autoridades';
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'email', 'dependencia_id'];

    //public $timestamps = false;
    
    public function scopeName($query, $name){
        if(trim($name) !=''){
            $query->where(\DB::raw("CONCAT( nombre, '', ap_paterno)"),"LIKE","%$name%");
        }
    }

    public function dependencia()
    {
        return $this->belongsTo('App\Dependencias');
    }
}
