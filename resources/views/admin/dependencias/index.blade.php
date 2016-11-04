@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>Dependencias 
		<a href="{{ url('admin/dependencias/create')}}" ">Agregar dependencia</a>

            <form href="{{route('admin.dependencias.index')}}" class="navbar-form navbar-left pull-right" role="search"  method="GET">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Ingresa la dependencia" >
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>


		</h1>
	</div>
	<div class="page">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Dependencia</th>
					<th>UUID</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($dependencia as $info): ?>
				<tr>
					<td>{{ $info-> dependencia}}</td>
					<td>{{ $info-> uuid}}</td>
					<td>
						<a href="{{ route('admin.dependencias.edit', $dependencia) }}" class="btn btn-primary">Modificar</a>
					</td>
					<td>
						{!! Form::open(['route' => ['admin.dependencias.destroy', $info]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									Eliminar
        								</button>
        							{!! Form::close() !!}
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	</div>
	 <?php echo $dependencia->render(); ?>
	</div>
</div>

@endsection