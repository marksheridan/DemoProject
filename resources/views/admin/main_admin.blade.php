@extends('layouts.admin')


@section('content')
<table>
	<tr>
		
		<th>
			Sl. no
		</th>
		<th>
			Username
		</th>
		<th>
			Times Visited
		</th>
		<th>
			Last Visited
		</th>
		<th>
			T-Guest Events
		</th>
		<th>
			T-Guestlist/Couples
		</th>
		<th>
			T-Clubbers
		</th>
	</tr>
	@foreach($users as $user)
	<tr>
		<td>
			-num-
		</td>
		<td>
			{{ $user->user_name }}
		</td>
		<td>
			visited
		</td>
		<td>
			Last visited
		</td>
		<td>
			T_guest Events
		</td>
		<td>
			T-couple
		</td>
		<td>
			T-clubbers
		</td>
	</tr>
	@endforeach


</table>

@endsection