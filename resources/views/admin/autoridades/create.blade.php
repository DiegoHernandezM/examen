@extends('layouts.app')
@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>
                
                Auroridades <small>Agregar dependencia</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">                   
                   
                    
                    
                      {!! Form::open(['route' => 'admin.autoridades.store', 'method'=> 'POST' ]) !!}

                       <div class="form-group">
                            <label class="control-label" for="dependencia_id">Dependencia</label>
                            {!! Form::select('dependencia_id', $dependencia, null, ['class' => 'form-control']) !!}
                        </div>

        
                        <div class="form-horizontal">
                            <label for="name">Autoridad:</label>
                            
                            {!! 
                                Form::text(
                                    'autoridad', 
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
                             <label for="description">Apellido paterno:</label>
                            
                           {!! Form::text(
                           			'ape_paterno',
                           			 null, 
                           			 array(
                           			 		'class'=>'form-control',
                           			 		'placeholder' => 'Ingresa el UUID...'
                           			 	)
                           			)
                           	!!}
                        </div>
                         <div>
                             <label for="description">Apellido materno:</label>
                            
                           {!! Form::text(
                                    'ape_materno',
                                     null, 
                                     array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingresa el UUID...'
                                        )
                                    )
                            !!}
                        </div>
                       
                        <div>
                             <label for="description">E-mail:</label>
                            
                           {!! Form::text(
                                    'correo',
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
                            <a href="{{ route('admin.autoridades.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        
        <div>
            
        </div>

    </div>


@stop