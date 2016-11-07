
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Esquema JSON</div>

               <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>RUTA</th>
                    <th>METODO</th>
                    <th>PARAMETRO</th>
                    <th>FORMATO DE RESPUESTA</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>dependencia</td>
                    <td>NINGUNO</td>
                    <td>GET</td>
                    <td>JSON</td>
                    <td>Trae todos los registros de la DB</td>
                    
                </tr>
                 <tr>
                    <td>dependencia/{uuid}/</td>
                    <td>uuid (texto)</td>
                    <td>GET</td>
                    <td>JSON</td>
                    <td>Trae el registro asociado al parametro de dependencia</td>
                    
                </tr>
            </tbody>
        </table>

    </div>
            </div>
        </div>
    </div>
</div>
@endsection
