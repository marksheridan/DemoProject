@extends('layouts.user')


@section('content')

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
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

 <script type="text/javascript">
	function validate()
	{
		var ENameTB = document.getElementById("event_name");
		var namefilter= new RegExp("^[a-zA-Z\ ]+$","g");
		if(!namefilter.test(ENameTB.value))
		{
			alert("EVENT NAME IS NOT VALID");
			return false;
		}

		var photoTB = document.getElementById("event_banner").value;
		/*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
		if(photoTB == '')
		{
			alert("PLEASE SELECT A FILE");
			return false;
		}
		else
		{
			var extension = photoTB.substring(photoTB.lastIndexOf('.') +1).toLowerCase();
			if(extension == "jpg" || extension == "png" || extension == "gif")
			{
				/*alert("success")*/
			}
			else
			{
				alert("INVALID FILE FORMAT");
				document.getElementById("event_banner").value = '';
				return false;
			}
		}

		var e = document.getElementById("event_status");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("Please select a status");
return false;
}

	var e = document.getElementById("event_city_id");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("Please select a city");
return false;
}

var e = document.getElementById("event_venue_id");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("Please select a venue");
return false;
}

var ENameTB = document.getElementById("event_description");
		var namefilter= new RegExp("^[a-zA-Z\ ]+$","g");
		if(!namefilter.test(ENameTB.value))
		{
			alert("PLEASE USE ONLY CHARACTERS");
			return false;
		}

		var ENameTB = document.getElementById("event_requirement");
		var namefilter= new RegExp("^[a-zA-Z\ ]+$","g");
		if(!namefilter.test(ENameTB.value))
		{
			alert("PLEASE USE ONLY CHARACTERS AS EVENT REQUIREMENTS");
			return false;
		}




		}
</script>



 



<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

 --><!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel-heading text-center">
				    
					<h4><strong>ADD EVENT DETAILS</strong></h4>
				
			</div>
			
            	<div class="jumbotron">
					<form method="post" action="{{ url('/storeevent') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="form-group">
					
									<label for="event_name" class="col-md-4 control-label">
								
									Event Name
						
									</label>
					
								<div class="col-md-6">
									<input id="event_name" type="text" class="form-control" name="event_name" placeholder="Enter the event name"maxlength="20">
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
									<select name="event_status"id="event_status"class="status_options">
										<option value="0">Event status</option>
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
									<input type="text" name="event_type" id="event_type" for="event_type" value="{{$cust}}" readonly>
							<!-- <select name="event_type" class="type_options">
								<option>Event type<option>
								<option>Guestlist<option>
								<option>RSVP<option>
								
							</select> -->
							
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
									{{ Form::select('event_city_id', $cities, "0" , ["id"=>"event_city_id", "class"=>"event_city_id", 'placeholder' => '--Select a city--']) }}
							
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
									<select name="event_venue_id" class="event_venue_id"id="event_venue_id"><br>
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
									<input id="event_start_time" type="time" class="form-control" name="event_start_time" placeholder="enter the start-time"required>
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
									<input id="event_end_time" type="time" class="form-control" name="event_end_time" placeholder="enter the end-time"required>
								</div>
								</div>
							</div>
								<br>
							@if($cust=="Guestlist")
                			<div class="row">
								<div class="form-group">
									<label for="start_time" class="col-md-4 control-label">
								
									Event Close Time
								
									</label>
								<div class="col-md-6">
									<input id="event_closing_time" type="time" class="form-control" name="event_closing_time" placeholder="enter the close-time"required>
								</div>
								</div>
							</div>
								<br>
							@endif
				
							<div class="row">
								<div class="form-group">
									<label for="event_description" class="col-md-4 control-label">
								
									Event Description
								
									</label>
								<div class="col-md-6">
									<input id="event_description" type="text" class="form-control" name="event_description" placeholder="Event description"maxlength="50">
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
									<input id="event_requirement" type="text" class="form-control" name="event_requirement" placeholder="Event Requirements"maxlength="50">
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
                			@if($cust=="Guestlist") 
                  			<div class="row">
								<div class="form-group">
									<label for="event_guest_limit" class="col-md-4 control-label">
								
									Guest Limit
								
									</label>
								<div class="col-md-6">
									<input id="event_guest_limit" type="number" class="form-control" name="event_guest_limit" placeholder="Gust Limit"min="1"max="5"required>
								</div>
								</div>
							</div>
                				<br>
                			@endif

							<div class="row">
								<div class="form-group">
									<div class="col-md-5">
									</div>

										<button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
											Add
										</button>
					
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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