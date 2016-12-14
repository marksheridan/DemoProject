@extends('layouts.secondapp')

@section('content')
<body>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

<!-- <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
	@if(count($errors)>0)
		<div class="row">
			<div class="col-md-6">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif -->
<style>
body {
            font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

        }
	h1{
			color: #00008B;
	}
	
	select {
position: absolute;
}

</style>   


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


	
			<div class="row">
			  <div class="col-md-8 col-md-offset-2">
			     <div class="panel-heading text-center">
				    
						ADD TO GUEST LIST
				
			</div>
			<div class="panel-body">

			<form method="post"enctype="multipart/form-data">
				<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
				<div class="row">
					<div class="form-group">
					
							<label for="event_name" class="col-md-4 control-label">
								
								 Name
			
							</label>
					
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Eg:Aneesh chacko">
					</div>
				</div>
			</div>
			<br>
                       <div class="row">

                         <div class="form-group">					


				 			<label for="photo" class="col-md-4 control-label">

                               
				 				Phone Number
                           

				 			</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Eg:9090909090">
					</div>
				</div>
			</div>
          <br>
                           <div class="row">
				 			<div class="form-group">
				 			<label for="venue" class="col-md-4 control-label">
                             
				 				Email
                             
				 			</label>
						<div class="col-md-6">

							<input id="name" type="text" class="form-control" name="name" placeholder="Eg:avc@asdss.com">
						</div>
					</div>
				</div>
				<br>
				  <!-- <div class="row">
				  					<div class="form-group">
				  							<label for="date" class="col-md-4 control-label">
				  								
				  									Event Flyer Paid
				  								
				  							</label> 
				  
				  					  <div class="col-md-6">
				  						<td>
				  							<select name="venue" class="payment_options"><br>
				  								<option>Flyer</option>
				  								<option>paid</option>
				  								<option>not paid</option>
				  							</select>
				  						</div>
				  					</div>
				  				</div> -->

				<div class="row">
					<div class="form-group">
					
							<label for="start_time" class="col-md-4 control-label">
								
									Number of couples
							
							</label>
						<div class="col-md-6">
							<input id="name" type="number" class="form-control" min="1" max="5" name="name" placeholder="Eg:2">
							
					</div>
				</div>
				</div>
				<br>
					
                        <br>
					<div class="row">
						<div class="form-group">
							<button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
							Add</button>
					
			</div>
		</form>
	</div>
</div>
	




</body>



@endsection