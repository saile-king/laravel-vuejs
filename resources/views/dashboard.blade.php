@extends('app')

@section('content')
	<div class="row" id="crud">
		<div class="col-xs-12">
			<h1 class="page-header">CRUD Laravel & Vue js</h1>
		</div>
		<div class="col-sm-7">
			<a href="#" class="btn btn-primary pull-right">Nueva tarea</a>
			<table class="table table-hover table-sprite">
				<thead>
					<th>#</th>
					<th>Tarea</th>
					<th colspan="2">
						&nbsp;
					</th>
				</thead>
				<tbody>
					<tr v-for="keep in keeps">
						<td width="10px">@{{ keep.id }}</td>
						<td>@{{ keep.keep }}</td>
						<td width="10px">
							<a href="#" class="btn btn-warning btn-sm">Editar</a>
						</td>
						<td width="10px">
							<a href="#" class="btn btn-danger btn-sm">Eliminar</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-sm-5">
			<pre>
				@{{ $data }}
			</pre>
		</div>
	</div>
@endsection