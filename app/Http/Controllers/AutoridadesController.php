<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Autoridades;
use App\Dependencias;

class AutoridadesController extends Controller
{
    public function index(Request $request)
    {    
       $autoridad = Autoridades::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);
       return view('admin.autoridades.index', compact('autoridad'));
    }

     public function create()
    {        
        $dependencia = Dependencias::orderBy('id', 'desc')->pluck('dependencia', 'id');
        return view('admin.autoridades.create', compact('dependencia'));
    }

    public function store(Request $request){


        $data = [
            'nombre'       => $request->get('autoridad'),
            'ap_paterno'      => $request->get('ape_paterno'),
            'ap_materno'      => $request->get('ape_materno'),
            'email'          => $request->get('correo'),
            'dependencia_id'  => $request->get('dependencia_id')
        ];

        $autoridad = Autoridades::create($data);
        return redirect()->route('admin.autoridades.index');
    }    

     public function show(Autoridades $autoridad)
    {
    	$autoridad = Autoridades::all();
        return redirect()->route('admin.autoridades.index', compact('autoridad'));
    }

    /*public function edit(Autoridades $autoridades)
    {
    	 //$dependencia = Dependencias::orderBy('id', 'desc')->pluck('dependencia', 'id');
         return view('admin.autoridades.edit', compact( 'autoridades'));
    }

     public function update(Request $request, Autoridades $autoridad)
    {
        $autoridad->fill($request->all());
        $updated = $autoridad->save();
        return redirect()->route('admin.autoridades.index', compact('autoridad'));

    }*/
    public function edit(Autoridades $autoridades)
    {
        $dependencia = Dependencias::orderBy('id', 'desc')->pluck('dependencia', 'id');
        return view('admin.autoridades.edit', compact('dependencia','autoridades'));
    }

     public function update(Request $request, Autoridades $autoridades)
    {         
        
        $autoridades->fill($request->all());

        $updated = $autoridades->save();        
        $autoridades = Autoridades::orderBy('id', 'desc')->paginate(5);
        return redirect()->route('admin.autoridades.index', compact('autoridades'));
    }


    public function destroy(Autoridades $autoridad)
    {
        $deleted = $autoridad->delete();

        return redirect()->route('admin.autoridades.index');
    }
}
