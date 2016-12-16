@extends('layouts.admin')


@section('content')


<style>
th,td{
    text-align: center;
}
 h4{
            color: #3989AE;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
                <div class="panel-heading text-center">
                   <h4><strong>  USER DETAILS</strong> </h4>
                <div class="panel-body">
                    

                    <table class="table">
                    	<thead>


	<tr>
		<div class="col-md-1">
		<th>
			Sl. no
		</th>
	</div>
	<div class="col-md-1">
		<th>
			Username
		</th>
	</div>
	<div class="col-md-1">
		<th>
			Times Visited
		</th>
	</div>
	<div class="col-md-1">
		<th>
			Last Visited
		</th>
	</div>
	<div class="col-md-1">
		<th>
			T-Guest Events
		</th>
	</div>
	<div class="col-md-1">
		<th>
			T-Guestlist/Couples
		</th>
	</div>
	<div class="col-md-1">
		<th>
			T-Clubbers
		</th>
	</div>
	</tr>
</thead>
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

  </div>

            </div>
        </div>
    </div>
</div>

@endsection