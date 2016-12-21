@extends('layouts.secondapp')

@section('content')





<body>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

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
	 #modal-content{
          background-color: #484755;
        }
        #modalheader{
         background-color:  #9A0202;
         color: #1C3454;
        }

	
	select {
position: absolute;
}

</style>  

<script type="text/javascript">
  function validate()
  {
    var GNameTB = document.getElementById("guest_name");
    var gnamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!gnamefilter.test(GNameTB.value))
    {
      alert("EVENT NAME IS NOT VALID");
      return false;
    }

 var GPhoneTB = document.getElementById("guest_phone_no");

      var gphonefilter = new RegExp("^[0-9]{10}$");

      if(!gphonefilter.test(GPhoneTB.value))
        {
          alert("Phone number must have 10 digit");
          GPhoneTB.focus();
          return false;
        }

   var GEmailTB = document.getElementById("guest_email");

      var gemailfilter = new RegExp("^[a-zA-Z]+[a-zA-Z0-9\_\.]+[@]{1}[a-zA-Z]+[\.]{1}[a-zA-Z]+$");

      if(!gemailfilter.test(GEmailTB.value))
        {
          alert("Invalid email ID.");
          return false;
           GEmailTB.focus();
        }


    }

  </script>






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->


	
			<div class="row">
			  <div class="col-md-8 col-md-offset-2">
			     <div class="panel-heading text-center">
				    
						ADD TO GUEST LIST
				
			</div>
			<div class="panel-body">
				
			<form action="{{ url('/storeguest/'.$cc) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="form-group">
					
							<label for="event_name" class="col-md-4 control-label">
								
								 Name
			
							</label>
					
						<div class="col-md-6">
							<input id="guest_name" type="text" class="form-control" name="guest_name" placeholder="Eg:Aneesh chacko">
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
							<input id="guest_phone_no" type="text" class="form-control" name="guest_phone_no" placeholder="Eg:9090909090">
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

							<input id="guest_email" type="text" class="form-control" name="guest_email" placeholder="Eg:avc@asdss.com">
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
							<input id="no_of_couples" type="number" class="form-control" min="1" max="5" name="no_of_couples" placeholder="Eg:2">
							
					</div>
				</div>
				</div>
				<br>
					
                        <br>
					<div class="row">
						<div class="form-group">
							<div class="col-md-4">
							</div>
							<button type="button" class="btn btn-primary" align="center" data-toggle="modal" data-target="#myModal" onclick="return validate()">
							Add</button>
					
			</div>
		</form>
	</div>
</div>
<footer>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"id="modalheader">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>!Clubbers</strong></h4>
            </div>
            
            <div class="modal-body"id="modalbody">
                <div class="row">
                    
                   <h4><strong>THANK YOU :) For Booking an Event Using Our Site</strong></h4>
                   
                </div> 
            </div>
        </div>
    </div>
</div>
</footer>
	




</body>



@endsection