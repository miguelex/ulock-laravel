@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/tipos/unico')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un tipo</legend>
		
			<div class="form-group">
				<label for="">Tipo</label>
				<select name="id" id="inputTipo_id" class="form-control" required="required">
					@foreach($tipos as $tipo)
					<option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener</button>
		</form>

@endsection