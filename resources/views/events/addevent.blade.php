@extends('layouts.admin')


@section('content')

<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

<style type="text/css">
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


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 -->

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->

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
							<input id="event_name" type="text" class="form-control" name="event_name" placeholder="Enter the event name">
					</div>
				</div>
			</div>
			<br>
                       <div class="row">

                         <div class="form-group">					


				 			<label for="event_banner" class="col-md-4 control-label">

                               
				 				Event Banner
                           

				 			</label>

						<div class="col-md-6">
							<input id="event_banner" type="file"  name="event_banner">
					</div>
				</div>
			</div>
          <br>
                           <div class="row">
				 			<div class="form-group">
				 			<label for="event_status" class="col-md-4 control-label">
                             
				 				Event status
                             
				 			</label>
						<div class="col-md-8">
							<select name="event_status" class="status_options">
								<option>Event status</option>
								<option>Open</option>
								<option>Closed</option>
								<option>Deleted</option>
							</select>
						</div>
					</div>
				</div>
				<br>
				  
				<div class="row">
					<div class="form-group">
					
							<label for="event_type" class="col-md-4 control-label">
								
									Event Type
							
							</label>
						<div class="col-md-6">
							<select name="event_type" class="type_options">
								<option>Event type<option>
								<option>Guestlist<option>
								<option>RSVP<option>
								
							</select>
							
					</div>
				</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
					
							<label for="city" class="col-md-4 control-label">
								
									City
							
							</label>
						<div class="col-md-6">
							{{ Form::select('event_city_id', $cities, "0" , ["id"=>"event_city_id", "class"=>"event_city_id", 'placeholder' => 'select a city']) }}
							
					</div>
				</div>
				</div>
				<br>
                  <div class="row">
					<div class="form-group">
					
							<label for="event_venue_id" class="col-md-4 control-label">
								
									Venue
							
							</label>
						<div class="col-md-6">
							<select name="event_venue_id" class="event_venue_id"><br>
								<option>--Select a Venue--</option>
								
							</select>
							
					</div>
				</div>
				</div>
                   <br>


					<div class="row">
					<div class="form-group">
					

							<label for="event_date" class="col-md-4 control-label">
								
									Event date
								
							</label>
						<div class="col-md-6"> 
							<input type="date" id="event_date" name ="event_date"class="form-control">
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
							<input id="event_start_time" type="time" class="form-control" name="event_start_time" placeholder="enter the start-time">
						</div>
					</div>
				</div>
              <br>
					 <div class="row">
					<div class="form-group">
							
							<label for="end_time" class="col-md-4 control-label">
								
									Event End Time
								
							</label>
						<div class="col-md-6">
							<input id="event_end_time" type="time" class="form-control" name="event_end_time" placeholder="enter the end-time">
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
							<input id="event_closing_time" type="time" class="form-control" name="event_closing_time" placeholder="enter the close-time">
						</div>
					</div>
				</div>
				<br>
					<div class="row">
					<div class="form-group">
							<label for="event_description" class="col-md-4 control-label">
								
									Event Description
								
							</label>
						<div class="col-md-6">
							<input id="event_description" type="text" class="form-control" name="event_description" placeholder="Event description">
						</div>
					</div>
                 </div>
                 <br>

					<div class="row">
					<div class="form-group">

							<label for="event_requirement" class="col-md-4 control-label">
								
									Event Requirements
								
							</label>
						<div class="col-md-6">
							<input id="event_requirement" type="text" class="form-control" name="event_requirement" placeholder="Event Requirements">
						</div>
					</div>
				</div>
				<br>

					<div class="row">
					<div class="form-group">
							<label for="video_link" class="col-md-4 control-label">
								
									Video Link
								
							</label>
						<div class="col-md-6">
							<input id="video_link" type="text" class="form-control" name="video_link" placeholder="video link">
						</div>
					</div>
				</div>
				<br>
                  
                  <div class="row">
					<div class="form-group">
							<label for="event_guest_limit" class="col-md-4 control-label">
								
									Guest Limit
								
							</label>
						<div class="col-md-6">
							<input id="event_guest_limit" type="text" class="form-control" name="event_guest_limit" placeholder="Gust Limit">
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>

<script type="text/javascript">
$(".event_city_id").change(function(){
			//alert("Inside");
        	$.ajax({
    			method: 'GET', 
    			url: '/venue-list/' + $(this).val(), 
    			success: function(response){ 
    				//alert("success");
    				$(".event_venue_id").empty()
    		    	$.each(response, function(i, obj){
    		    		console.log(obj)
    		    		$(".event_venue_id").append("<option value="+obj.venue_id+">"+obj.venue_name+"</option>")
    		    	})
    			},
    			error: function(jqXHR, textStatus, errorThrown) { 
        			//alert("failure");
        			console.log(JSON.stringify(jqXHR));
        			console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    			}
			});

			/*if($(".event_city_id").val()=="")
         	{
            	$("#event_venue_id").empty();
            	/*$(".venue_options").append("<option value="">"--Select a venue--"</option>");
         	}*/
         
    	});

</script>

@endsection