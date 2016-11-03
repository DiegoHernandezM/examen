<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridades extends Model
{
     protected $table = 'autoridades';

    protected $fillable = ['name','ap_paterno','ap_materno','nacimiento','email','dependencias_id', 'uuid'];

    public $timestamps = false;
}
 

    public function dependencias()
    {
        return $this->hasMany('App\Dependencias');
    }