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
        //return $request->all();
       
        
       $dependencia = Dependencias::create([
            'dependencia' => $request->get('nombre_dep'),
            'uuid' =>$request->get('uuid')

        ]);
         $dependencias = Dependencias::all();
       return redirect()->route('admin.dependencias.index'); 
    }

 	public function show(Dependencias $dependencias)
    {      
          $dependencia = Dependencias::all();
         return redirect()->route('admin.dependencias.index', compact('dependencia')); 
        
    }

    public function edit(Dependencias $dependencias)
    {
        return view('admin.dependencias.edit', compact('dependencias'));
    }

     public function update(Request $request, Dependencias $dependencias)
    {         
        
        $dependencias->fill($request->all());

        $updated = $dependencias->save();        
        $dependencias = Dependencias::orderBy('id', 'desc')->paginate(5);
        return redirect()->route('admin.dependencias.index', compact('dependencias'));
    }


 public function destroy(Dependencias $dependencia)
    {
        $deleted = $dependencia->delete();
        $dependencia = Dependencias::orderBy('id', 'desc')->paginate(5);
        return redirect()->route('admin.dependencias.index', compact('dependencia')); 
    }
    
}
