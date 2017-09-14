		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td style=”display:none”>{{ $user->email }}</td>
			<td>{{ $user->gender }}</td>
			<td>{{ $user->biography }}</td>
		</tr>
		@endforeach
