@foreach($students as student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->name}}</td>
		<td>{{$student->address}}</td>
		<td><a href="#"></a></td>
	</tr>


@endforeach