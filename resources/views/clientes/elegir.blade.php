@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/clientes/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un cliente</legend>
		
			<div class="form-group">
				<label for="">Cliente</label>
				<select name="cliente_id" id="inputCliente_id" class="form-control" required="required">
					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellidos}} </option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection