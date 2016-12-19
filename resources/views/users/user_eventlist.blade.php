@extends('layouts.user')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
	jumbotron{
		background-color: #404EDD;
	}
	#users{
		background-color: #6FACC3;
	}
	#cover{
		background-color: #6FACC3;
	}


</style>


<div class="container">
	<div class="row">
		<div class="col-md-12" style: align="center">
			<div class="jumbotron" id="cover">
 			 <img src="/images/mountains1.jpg" width="900">
        	</div>
		</div>

	</div>	
<div class="container">
	<div class="row">
 		<div class="col-md-4">
        	<div class="jumbotron" id="users">
           		<div class="row">	
           			<div class="col-md-6">
           				<a href="{{url('/guestlist') }}">
          				<img src="/images/web-user.jpg" width="50">
          			    </a>
           			</div>
           			    
           			<div class="col-md-6">
           				<a href="{{url('/usereventlist') }}">
						<img src="/images/Guestlist_CirclePurple_300dpi.png" width="50">
					</a>
           			</div>

           		</div><br><br>
           		<div class="row">
           			<div class="col-md-6">
           				<a href="{{url('/usereventlist') }}">
          				<img src="/images/Internet-Data-Network-Ticket-Home-Furnishings-Furniture-3186173011.png" width="50">
           			    </a>
           			</div>
           				
           			<div class="col-md-6">
           				<a href="{{url('/usereventlist') }}">
						<img src="/images/Guestlist_CirclePurple_300dpi.png" width="50">
					</a>
           			</div>
					
           		</div>	
        	</div>  

 		</div>
 		<div class="col-md-8">
        	<div class="jumbotron"id="users">
        		<h4><strong>UPCOMING EVENTS</strong> </h4>
				  <table class="table">
                  	<thead>
                     	<tr>
                        	<div class="col-md-5">
                            	<th>Event Name</th>
                            </div> 
                            <div class="col-md-2">   
                            	<th>Date</th>
                            </div>
                            <div class="col-md-2">
                            	<th>Guest</th>
                        	</div>
                        	<div class="col-md-3">
                            	<th>Type</th>
                        	</div>
                        	
                        </tr>
                    </thead>
                    <tbody>
                    	 <tr>
                             <div class="col-md-1">
                                <td>
                                   thaikkudam bridge 
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    12-12-12
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    no guest
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    band
                                </td>
                            </div>
                          </tr>  
                    </tbody>
                   </table> 
                 <h4><strong>PAST EVENTS</strong> </h4>
				  <table class="table">
                  	<thead>
                     	<tr>
                        	<div class="col-md-5">
                            	<th>Event Name</th>
                            </div> 
                            <div class="col-md-2">   
                            	<th>Date</th>
                            </div>
                            <div class="col-md-2">
                            	<th>Guest</th>
                        	</div>
                        	<div class="col-md-3">
                            	<th>Type</th>
                        	</div>
                        	
                        </tr>
                    </thead>
                    <tbody>
                    	 <tr>
                             <div class="col-md-1">
                                <td>
                                   aviyal band 
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    12-12-12
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    no guest
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    band
                                </td>
                            </div>
                          </tr>  
                    </tbody>
                   </table> 		
        	</div>
 		</div>
	</div>

</div>	



</div>






@endsection