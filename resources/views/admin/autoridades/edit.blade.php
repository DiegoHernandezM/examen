@extends('layouts.app')
@section('content')

<div class="container text-center">
        <div class="page-header">
            <h1>
                Autoridades Editar autoridad
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">                   
                   
                    {!! Form::model($autoridades, array('route' => array('admin.autoridades.update', $autoridades))) !!}

                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label class="control-label" for="provider_id">Dependencia</label>
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
                                            'placeholder' => 'Apellido Paterno'
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
                                            'placeholder' => 'Apellido Materno'
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
                                            'placeholder' => 'E-mail'
                                        )
                                    )
                            !!}
                        </div>         

                        <div class="form-group">
                           {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
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