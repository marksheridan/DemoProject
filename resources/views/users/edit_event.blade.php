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
		background-color: #0D0D1A;
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
    #date{
        width:50px;
    }
    #time{
        width:50px;
    }
    #glimit{
        width:100px;
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
                    <div class="col-md-2">
                        <label>Event Name</label>
                    </div>
                        
                    <div class="col-md-5">
                        <input type="text"placeholder="EG thaikkudam bridge">  
                    </div>

                </div><br><br>
                <div class="row">
                    <div class="col-md-2">
                        <label>Date</label>
                    </div>
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 17" id="date">
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="date">
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 2017"id="date">
                    </div>   
                    
                </div><br>
                  <div class="row">
                    <div class="col-md-2">
                        <label>Start Time</label>
                    </div>
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 05" id="time">
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="time">
                    </div> 
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="time">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div>   
                    
                </div>  
                <div class="row">
                    <div class="col-md-2">
                        <label>End Time</label>
                    </div>
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 05" id="time">
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="time">
                    </div> 
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="time">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div>   
                    
                </div>
                 <div class="row">
                    <div class="col-md-2">
                        <label>Guestlist close Time</label>
                    </div>
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 05" id="time">
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="time">
                    </div> 
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="time">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div> <br><br><br>
                    <div class="row">
                        <div class="col-md-8">
                            <textarea maxlength="500"col="70"rows="5">When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. </textarea>
                        </div>   
                    </div>  
                    
                </div>
                
            </div>  

        </div>
         <div class="col-md-4">
            
            <div class="jumbotron"id="users">
                <div class="row">
                   
                     <div class="col-md-6">
                        </label> Guest limit</label>
                    </div>
                        
                    <div class="col-md-6">
                         <input type="text"placeholder="EG 05"id="glimit">
                    </div>

                </div><br><br>
                <div class="row">
                    <textarea maxlength="500"col="60"rows="5">When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. 
                    </textarea>


                </div>    
            </div> 
            <div class="jumbotron"id="users">
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING ARTIST</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text"placeholder="artist"id="artist">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING PROMOTERS</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text"placeholder="promoter"id="artist">
                    </div>     
                </div>  
            </div>     

        </div>
        <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-5">
                        <label> Select city</label>
                    </div>
                    <div class="col-md-5">
                        <select name="time" class="city">
                                <option>Bangalore</option>
                                <option>Kochi</option>
                                 <option>Mumbai</option>
                                
                            </select>
                    </div>    
                </div><br>
                <div class="row">    
                        
                   <div class="col-md-5">
                        <label> Select venue</label>
                    </div>
                    <div class="col-md-5">
                        <select name="time" class="venue">
                                <option>paradaise</option>
                                <option>citybar</option>
                                 <option>baar</option>
                                
                            </select>
                    </div>    
                    </div>

                </div><br><br>
                <div class="jumbotrone"id="users">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br><br>
                            <button type="button" class="btn btn-primary" align="center" onclick="return validate()">
                            UPDATE GUESTLIST EVENT</button>
                            <br><br>
                        </div>    
                    </div>    
                </div>    
            </div>
        </div>        
     



    </div>            

	

	



</div>






@endsection