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
     
      public function index(Request $request)
    {    
       $dependencia = Dependencias::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);
       return view('admin.dependencias.index', compact('dependencia'));
    }

     public function create(){

        return view('admin.dependencias.create');
    }

    public function store(Request $request)
    {
        
       $dependencia = Dependencias::create([
            'dependencia' => $request->get('nombre_dep'),
            'uuid' =>$request->get('uuid')

        ]);
         $dependencias = Dependencias::all();
        return view('admin.dependencias.index', compact('dependencia'));
    }

 	public function show(Dependencias $dependencias)
    {      
          $dependencia = Dependencias::all();
        return view('admin.dependencias.index', compact('dependencias'));
        
    }

    public function edit(Dependencias $dependencia)
    {
        return view('admin.dependencias.edit', compact('dependencia'));
    }

     public function update(Request $request, Dependencias $dependencias)
    {
        $this->validate($request, [
          'dependencia' => 'required',
          'uuid' => 'required',
         
        ]);
        $dependencias->fill($request->all());
           
        $updated = $dependencias->save();
        
         $dependencias = Dependencias::all();
        //dd($provider);
        return view('admin.providers.index', compact('dependencias'));
    }


 public function destroy(Dependencias $dependencia)
    {
        $deleted = $dependencia->delete();
        $dependencia = Dependencias::all();
        return view('admin.dependencias.index', compact('dependencia'));
    }
    
}
