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
		background-color:  #0D0D1A;
        border-radius: 10px;
	}
	#cover{
		background-color: #6FACC3;
	}
    #guser{
        background-color: #D5CECF;
        height: 17px;
    }
    #btn-primary{
        width: 1000px
    }
     #table{
    color:#09579D; 
  }
  #show{
    color: #044982;
  }
  img{
    border-radius: 70px;
  }
  strong{
    color: #FFFFFF;
  }


    
          
       
 </style>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="{{ url('eventimages').'/'. $event->event_banner}}" width="1300"height="400">
        	</div><br>
<div class="container">
    <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-5">
                      <h5><strong>  Name:</strong></h5>
                     </div>
                     <div class="col-md-4"> 
                        <h5>{{ $event->event_name }}</h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                         <h5><strong>  Venue:</strong></h5> 
                         </div>
                         <div class="col-md-4">  
                        <h5>{{ $event->event_venue_id }}</h5> 
                    </div>
                  </div>
                  <div class="row">   
                    <div class="col-md-5">
                        <h5><strong>  Date:</strong></h5>
                    </div>
                    <div class="col-md-5">
                        <h5>{{ $event->event_date }}</h5>
                          <!-- <br>12/12/12/</h5> -->
                    </div>
                    </div>

                
                <div class="row">
                    <div class="col-md-5">
                     <h5><strong>  Description:</strong></h5>
                    </div>
                    <div class="col-md-4">
                      {{ $event->event_description }}      
                    </div>
                  </div>                    
                </div>  
           

        </div>
         <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-6">
                      @if( $event->event_type == "Guestlist" )
                      
                       <h5><strong> Guestlist closes at </strong></h5>
                      </div>
                      <div class="col-md-5">
                       {{ $event->event_closing_time }}  
                         </div>
                       @endif      
                    </div>
                  
                  
                  <div class="row">
                    <div class="col-md-6">
                        <h5><strong> Requirements </strong></h5>
                    </div>
                     <div class="col-md-5"> 
                     {{ $event->event_requirement }} 
                     </div>    
                    </div>
                  </div>  
                </div>
                <div class="col-md-4">
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
                    <div class="col-md-6">
                        <a href="{{url('/editevent') }}">
                        <button type="submit" class="btn btn-primary" align="center">
                            EDIT EVENT </button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/user/eventdisplay/'. $event->id) }}">
                            <button type="submit" class="btn btn-primary" align="center" width="5px">
                            USER PREVIEW </button>
                        
                     </a>
                    </div>
                </div><br>
               <!--  <div class="row">    
                                   
                               <div class="col-md-6">
                                   <a href="{{url('/usereventlist') }}">
                                       <button type="submit" class="btn btn-primary" align="center" width="5px">
                                       USER PREVIEW </button>
                                   
                               </a>
                               </div>
                           
                           </div><br><br>
                            --> 
            </div>
        </div>        
     



    </div>            

	
<div class="container">
	
    <div class="col-md-12">
        	<div class="jumbotron"id="users">
                <div class="row">
                    <div class="col-md-3"id="show">
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
                    
                   
				  <table class="table"id="table">
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
                        @foreach($gus as $gg)
                    	 <tr>
                             <div class="col-md-3">
                                <td>
                                   {{ $gg->guest_name }}
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    {{ $gg->guest_phone_no }}
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    {{ $gg->guest_entry_code }}
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    {{ $gg->no_of_couples }}
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    2 Months ago
                                </td>
                            </div>
                            
                          </tr>  
                          @endforeach
                    </tbody>
                   </table> 
                 
        	</div>
 		</div>
	</div>

	



</div>






@endsection