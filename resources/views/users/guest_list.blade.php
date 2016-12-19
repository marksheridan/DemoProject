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
    #guser{
        background-color: #A02335;
        height: 17px;
    }


</style>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="/images/mountains1.jpg" width="1300"height="400">
        	</div><br>
	<!--     </div>
    
        </div>    
    </div> -->
<div class="container">
	
    <div class="col-md-12">
        	<div class="jumbotron"id="users">
                <div class="row">
                    <div class="col-md-3">
                        show
                        <select name="show_entries" class="status_options"id="show_entries">
                                <option>1</option>
                                <option>10</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                            entries

                      </div>
                      <div class="col-md-5" id="guser">      
                            
                                Users
                              
                      </div>
                      </div>      
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
        		          <h4><strong>FREE EVENTS</strong> </h4>
                    </div>
                   <div class="col-md-3">
                         <h4><strong>PAID EVENTS</strong> </h4>
                    </div>
				  <table class="table">
                  	<thead>
                     	<tr>
                        	<div class="col-md-1">
                            	<th>#</th>
                            </div> 
                            <div class="col-md-2">   
                            	<th>Name</th>
                            </div>
                            <div class="col-md-2">
                            	<th>mobile</th>
                        	</div>
                        	<div class="col-md-3">
                            	<th>Email</th>
                        	</div>
                            <div class="col-md-1">
                                <th>Couples</th>
                            </div>
                            <div class="col-md-1">
                                <th>Events</th>
                            </div>
                            <div class="col-md-1">
                                <th>Tickets</th>
                            </div>
                            <div class="col-md-1">
                                <th>Events</th>
                            </div>
                        	
                        </tr>
                    </thead>
                    <tbody>
                    	 <tr>
                             <div class="col-md-1">
                                <td>
                                   11
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    aneesh
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    9902608247
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    aneesh754@gmail.com
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    1
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    2
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    1
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    2
                                </td>
                            </div>
                          </tr>  
                    </tbody>
                   </table> 
                 
        	</div>
 		</div>
	</div>

	



</div>






@endsection