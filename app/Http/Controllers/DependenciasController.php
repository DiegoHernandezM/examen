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

     public function create(){

        return view('admin.dependencias.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'dependencia' => 'required',
          'uuid' => 'required',
        ]);
        
        $dependencias = Dependencias::create([
            'dependencia' => $request->get('name'),
            'uuid' =>$request->get('contact'),
           
        ]);
         $dependencias = Dependencias::all();
        return view('admin.dependencias.index', compact('dependencias'));
    }


    public function edit(Dependencias $dependencia)
    {
        return view('admin.dependencias.edit', compact('dependencias'));
    }

 public function destroy(Dependencias $dependencia)
    {
        $deleted = $info->delete();
        $dependencia = Dependencias::all();
        return view('admin.dependencias.index', compact('dependencia'));
    }
    
}
