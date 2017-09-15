		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->gender }}</td>
			<td>{{ $user->biography }}</td>
			<td>
				<a href="{{ route('delete', $user->id) }}">
					<i class="glyphicon glyphicon-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
