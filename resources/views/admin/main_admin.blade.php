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
<?php $slno=1; ?>
	@foreach($users as $user)

	<tr>
		<td>
			<?php echo "$slno" ?>
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
			{{ $user->t_event }}
		</td>
		<td>
			{{ $user->t_guest }}
		</td>
		<!-- <td>
			T-clubbers
		</td> -->
	</tr>
	<?php $slno+=1; ?>
	@endforeach


</table>

  </div>

            </div>
        </div>
    </div>
</div>

@endsection