@extends('layouts.app')
@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>
                
                Dependencias <small>Agregar dependencia</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">                   
                   
                    
                    
                    {!! Form::open(['action' => 'DependenciasController@store']) !!}

        
                        <div class="form-horizontal">
                            <label for="name">Dependencia:</label>
                            
                            {!! 
                                Form::text(
                                    'nombre_dep', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div>
                             <label for="description">UUID:</label>
                            
                           {!! Form::text(
                           			'uuid',
                           			 null, 
                           			 array(
                           			 		'class'=>'form-control',
                           			 		'placeholder' => 'Ingresa el UUID...'
                           			 	)
                           			)
                           	!!}
                        </div>
                                               
                        
                        
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.dependencias.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        
        <div>
            
        </div>

    </div>


@stop