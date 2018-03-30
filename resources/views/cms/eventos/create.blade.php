	
<form class="text-center" method="POST" action="{{ route('panel.store_event') }}" enctype="multipart/form-data">
	 {!! csrf_field() !!}

		<div class="form-group text-center">


			<input class="form-control" type="text" name="name" placeholder="Nombre del evento" value="{{ old('name') }}">
			{!! $errors->first('name', '<span class="error">:message</span>') !!}
			<br>
			<br>

			<input class="form-control" type="text" name="date" placeholder="Fecha" value="{{ old('date') }}" />
			{!! $errors->first('date', '<span class="error">:message</span>') !!}
			<br>
			<br>

			<input class="form-control" type="text" name="time" placeholder="Horarios" value="{{ old('time') }}" />
			{!! $errors->first('time', '<span class="error">:message</span>') !!}
			<br>
			<br>
		
			<input class="form-control" type="text" name="place" placeholder="Lugar" value="{{ old('place') }}" />
			{!! $errors->first('place', '<span class="error">:message</span>') !!}
			<br>
			<br>

			<textarea class="form-control" name="description" id="description" placeholder="Descripción del evento">{{ old('description') }}</textarea>
			{!! $errors->first('description', '<span class="error">:message</span>') !!}
			<br>
			<br>

    		 <input type="file"  name="cover_image" />
			{!! $errors->first('cover_image', '<span class="error">:message</span>') !!}
			<br>
			<br>
			
			
			<input class="btn btn-primary" type="submit" value="Entrar">
		</div>

	</form>