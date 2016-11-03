<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dependencias;

class DependenciasController extends Controller
{
     
      public function index()
    {    
       $dependencia = Dependencias::orderBy('id', 'desc')->paginate(5);
       return view('admin.dependencias.index', compact('dependencia'));
    }

    
}
