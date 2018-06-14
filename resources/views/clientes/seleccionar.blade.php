@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/clientes/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Cliente</legend>
		
			<div class="form-group">
				<label for="">Cliente</label>
				<select name="cliente_id" id="inputCliente_id" class="form-control" required="required">
					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellidos}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection