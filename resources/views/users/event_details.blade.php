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
    #btn-primary{
        width: 1000px
    }
          
       
 </style>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="/images/thaikkudam-bridge.jpg" width="1300"height="400">
        	</div><br>
<div class="container">
    <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-8">
                       <h5> THAIKKUDAM BRIDGE</h5>
                            INFOPARK
                    </div>
                        
                    <div class="col-md-3">
                        <h5> Monday <br>12/12/12/</h5>
                    </div>

                </div><br><br>
                <div class="row">
                    <div class="col-md-10">
                         When you wish to run the Vagrant commands, 
                            just open up a command line in your Homestearol over where 
                            the VM itself is created 
                            unless you start editing and customising the scripts.
                            
                    </div>
                    
                </div>  
            </div>  

        </div>
         <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-8">
                       <h5> GUESTLIST CLOSES AT 7:00PM</h5>
                            
                    </div>
                        
                   

                </div><br><br>
                <div class="row">
                    <div class="col-md-10">
                     just open up a command line in your Homestead 
                    folder and run them from there
                    You have no control over where the VM itself is created 
                    
                            
                    </div>
                    
                </div>  
            </div>
            <div class="jumbotron"id="users">
                <div class="row">
                    <h5>POST TO SOCIAL MEDIA</h5>
                     <div class="col-md-6">
                        <a href="https://www.facebook.com/">
                        <img src="/images/ic_social_facebook.png" width="50">
                        </a>
                    </div>
                        
                    <div class="col-md-6">
                        <a href="https://twitter.com/login">
                        <img src="/images/ic_social_twitter.png" width="50">
                    </a>
                    </div>

                </div>
            </div>      

        </div>
        <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-8">
                        <a href="{{url('/guestlist') }}">
                        <button type="submit" class="btn btn-primary" align="center">
                            EDIT EVENT </button>
                        </a>
                    </div>
                </div><br>
                <div class="row">    
                        
                    <div class="col-md-6">
                        <a href="{{url('/usereventlist') }}">
                            <button type="submit" class="btn btn-primary" align="center" width="5px">
                            USER PREVIEW </button>
                        
                    </a>
                    </div>

                </div><br><br>
            </div>
        </div>        
     



    </div>            

	
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
                            
                                GUSTLIST PREVIEW
                              
                      </div>
                      </div>      
                    
                   
				  <table class="table">
                  	<thead>
                     	<tr>
                        	
                            <div class="col-md-3">   
                            	<th>Name</th>
                            </div>
                            <div class="col-md-3">
                            	<th>mobile</th>
                        	</div>
                        	
                        	</div>
                            <div class="col-md-2">
                                <th>Entry Code</th>
                            </div>
                            <div class="col-md-2">
                                <th>Number of Couples</th>
                            </div>
                            <div class="col-md-2">
                                <th>Added When</th>
                            </div>
                            
                        	
                        </tr>
                    </thead>
                    <tbody>
                    	 <tr>
                             <div class="col-md-3">
                                <td>
                                   john
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    9090909090
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    990
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    5
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    2 Months ago
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