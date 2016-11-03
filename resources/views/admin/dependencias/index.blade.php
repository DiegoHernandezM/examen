@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>Dependencias 
		<a href="{{ url('admin/dependencias/create')}}" ">Agregar dependencia</a>
            
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
					<td>{{ $info-> name}}</td>
					<td>{{ $info-> uuid}}</td>
					<td>
						<a href="" class="btn btn-primary">Modificar</a>
					</td>
					<td>
						
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	</div>
	</div>
</div>

@endsection