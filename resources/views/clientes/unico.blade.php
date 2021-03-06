@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/clientes/unico')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese el Id del Cliente</legend>
		
			<div class="form-group">
				<label for="">Cliente</label>
				<select name="id" id="inputCliente_id" class="form-control" required="required">
					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->nombre}} {{$cliente->apellidos}} </option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Obtener</button>
		</form>

@endsection