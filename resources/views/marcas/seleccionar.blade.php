@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/marcas/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija una Marca</legend>
		
			<div class="form-group">
				<label for="">Marca</label>
				<select name="marca_id" id="inputMarca_id" class="form-control" required="required">
					@foreach($marcas as $marca)
					<option value="{{$marca->id}}">{{$marca->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection