@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart">
			</i>Proveedores <a href="{{ route('provideers.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Proveedor</a>
		</h1>
	</div>
	<div class="page">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Dirección</th>
						<th>Ciudad</th>
						<th>Telefono</th>
						<th>Tipo Proveedor</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($provideers as $provideer)
						<tr>
							<td>
								<a href="{{ route('provideers.edit',$provideer)}}" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
							</td>
							<td>
								{!! Form::open(['route'=>['provideers.destroy',$provideer]])!!}
								<input type="hidden" name="_method" value="DELETE">
								<button onclick="return confirm('Eliminar registro')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
							</td>
							{!! Form::close() !!}
							<td>{{ $provideer->name }}</td>
							<td>{{ $provideer->contact_name }}</td>
							<td>{{ $provideer->address }}</td>
							<td>{{ $provideer->city }}</td>
							<td>{{ $provideer->phone }}</td>
							<td>{{ $provideer->provideer_types->name }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop