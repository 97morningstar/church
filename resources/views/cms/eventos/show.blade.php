<table>
	<tr>
		<th>Nombre del Evento</th>
		<th>Fecha</th>
		<th>Horarios</th>
		<th>Lugar o ubicacion</th>
		<th>Descripcion del evento</th>
		<th>Imagen</th>
		<th>Accion</th>
	</tr>

@foreach($events as $event)
	<tr>
		<td>{{ $event->name }}</td>
		<td>{{ $event->date }}</td>
		<td>{{ $event->time }}</td>
		<td>{{ $event->place }}</td>
		<td>{{ $event->description }}</td>
		<td>{{ $event->image }}</td>
		<td>
			<a  class="" href="{{ route('panel.event_edit', $event->id) }}">
				Editar</a>

			<form  style="display: inline;" method="POST" action="{{ route('panel.event_destroy', $event->id )}}">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}
					<button class="" type="submit">Eliminar</button>
			</form>
		</td>

	</tr>
@endforeach

</table>