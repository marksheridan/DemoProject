@extends('layouts.admin')


@section('content')

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
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
	@endif
<style>
	h1{
			color: #00008B;
	}
	body{
		 overflow-y: scroll;
            overflow-x: hidden;
	}
	
	select {
position: relative;
}
.btn-primary{
	
	content: center;
}

</style>  


 
<body>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<div class="table-responsive">
	
			<div class="row">
			  <div class="col-md-8 col-md-offset-2">
			     <div class="panel-heading text-center">
				    
						ADD EVENT DETAILS
				
			</div>
			<div class="panel-body">
              <div class="jumbotron">
			<form method="post" action="{{ url('/storeevent') }}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="form-group">
					
							<label for="event_name" class="col-md-4 control-label">
								
									Event Name
						
							</label>
					
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Enter the event name">
					</div>
				</div>
			</div>
			<br>
                       <div class="row">

                         <div class="form-group">					


				 			<label for="photo" class="col-md-4 control-label">

                               
				 				Event Banner
                           

				 			</label>

						<div class="col-md-6">
							<input id="photo" type="file"  name="photo">
					</div>
				</div>
			</div>
          <br>
                           <div class="row">
				 			<div class="form-group">
				 			<label for="venue" class="col-md-4 control-label">
                             
				 				Event status
                             
				 			</label>
						<div class="col-md-8">
							<select name="venue" class="status_options"><br>
								<option>Event status</option>
								<option>Closed</option>
								<option>Deleted</option>
							</select>
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
								
									Event Type
							
							</label>
						<div class="col-md-6">
							<select name="venue" class="type_options"><br>
								<option>Event type<option>
								<option>RSVP</option>
								<option>Guest</option>
							</select>
							
					</div>
				</div>
				</div>
				<br>
					<div class="row">
					<div class="form-group">
					

							<label for="start_time" class="col-md-4 control-label">
								
									Event date
								
							</label>
						<div class="col-md-6"> 
							<input type="text" id="datepicker" name ="datepicker"class="form-control">
						</td>
					</div>
				</div>
			</div>
			<br>
						<div class="row">
					<div class="form-group">
							
							<label for="start_time" class="col-md-4 control-label">
								
									Event Start Time
								
							</label>
						
						<div class="col-md-6">
							<input id="start_time" type="time" class="form-control" name="start_time" placeholder="enter the start-time">
						</div>
					</div>
				</div>
              <br>
					 <div class="row">
					<div class="form-group">
							
							<label for="start_time" class="col-md-4 control-label">
								
									Event End Time
								
							</label>
						<div class="col-md-6">
							<input id="start_time" type="time" class="form-control" name="start_time" placeholder="enter the end-time">
						</div>
					</div>
				</div>
				<br>

                      <div class="row">
					<div class="form-group">
							
							<label for="start_time" class="col-md-4 control-label">
								
									Event Close Time
								
							</label>
						<div class="col-md-6">
							<input id="start_time" type="time" class="form-control" name="start_time" placeholder="enter the close-time">
						</div>
					</div>
				</div>
				<br>
                          
                          <!-- <div class="row">
                          					<div class="form-group">
                          							
                          							<label for="start_time" class="col-md-4 control-label">
                          								
                          									Event Close Time
                          								
                          							</label>
                          						<div class="col-md-6">
                          							<input id="start_time" type="time" class="form-control" name="start_time" placeholder="enter the start-time">
                          						</div>
                          					</div>
                          				</div>
                                              <br> -->

					<div class="row">
					<div class="form-group">
							<label for="event_name" class="col-md-4 control-label">
								
									Event Description
								
							</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Event description">
						</div>
					</div>
                 </div>
                 <br>

					<div class="row">
					<div class="form-group">

							<label for="event_name" class="col-md-4 control-label">
								
									Event Requirements
								
							</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Event Requirements">
						</div>
					</div>
				</div>
				<br>

					<div class="row">
					<div class="form-group">
							<label for="event_name" class="col-md-4 control-label">
								
									Video Link
								
							</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="video link">
						</div>
					</div>
				</div>
				<br>
                  
                  <div class="row">
					<div class="form-group">
							<label for="event_name" class="col-md-4 control-label">
								
									Guest Limit
								
							</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" placeholder="Gust Limit">
						</div>
					</div>
				</div>
                        <br>
					<div class="row">
						<div class="form-group">
							<div class="col-md-5">
							</div>

							<button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
							Add</button>
					
			</div>
		</form>
	</div>
</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
@endsection