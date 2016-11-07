<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dependencias;

class DependenciasApiController extends Controller
{
    public function index(Request $request){
    	$dependencias=Dependencias::get()->all();

    	return response()->json([
    			'dependencias' => $dependencias
    		]);
    }
    
    public function getindex($uuid){  
    	$dependencias=Dependencias::where('uuid',$uuid)->get();

    	return response()->json([
    			'dependencias' => $dependencias 
    		]);
    }
}
