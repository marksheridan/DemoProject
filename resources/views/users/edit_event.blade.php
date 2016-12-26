@extends('layouts.user')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->

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
  img{
    border-radius: 70px;
  }
    #guser{
        background-color: #A02335;
        height: 17px;
    }
    #btn-primary{
        width: 1000px
    }
    #event_year{
        width:50px;
    }
     #event_day{
        width:50px;
    }
     #event_month{
        width:50px;
    }
    #time{
        width:50px;
    }
     #stime{
        width:50px;
    }
     #sevent_min{
        width:50px;
    }
    #sevent_hour{
        width:50px;
    }
    #cevent_min{
        width:50px;
    }
    #cevent_hour{
        width:50px;
    }
     #eevent_hour{
        width:50px;
    }
    #eevent_min{
        width:50px;
    }
    #event_glimit{
        width:100px;
    }
          
       
 </style>

 <script type="text/javascript">
  function validate()
  {
    var ENameTB = document.getElementById("event_name");
    var enamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!enamefilter.test(ENameTB.value))
    {
      alert("EVENT NAME IS NOT VALID");
      return false;
    }


   

var est = document.getElementById("event_start_time").value;
var eet = document.getElementById("event_end_time").value;
var ect = document.getElementById("event_closing_time").value;

if(est=='')
{
    alert("event start time cannot be null");
    return false;
}
if(eet=='')
{
    alert("event end time cannot be null");
    return false;
}
if (ect=='')
{
    alert("guestlist closetime cannot be null");
    return false;
}

if ( est > eet )
    {
        alert("Start Time shoul be earlier than end time");
        return false;
    }

 if ( ect < est || ect > eet )
    {
        alert("Close time should be inbetween start and end time");
        return false;
    }



        
         var GlimitTB = document.getElementById("event_guest_limit").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(GlimitTB == '')
        {
          alert("Guestlimit field is empty.");
          return false;
        }


        /* var EANameTB = document.getElementById("artist_name");
    var eanamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!eanamefilter.test(EANameTB.value))
    {
      alert("ARTIST NAME IS NOT VALID");
      return false;
    }

     var EPNameTB = document.getElementById("promoter_name");
    var epnamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!epnamefilter.test(EPNameTB.value))
    {
      alert("PROMOTER NAME IS NOT VALID");
      return false;
    }*/

}
</script>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="{{url('eventimages').'/'.$event->event_banner}}" width="1300"height="400">
        	</div><br>
<div class="container">
    <form method="post" action="{{ url('/eventupdate'.'/'.$event->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-2">
                        <label>Event Name</label>
                    </div>
                        
                    <div class="col-md-5">
                        <input type="text" value="{{$event->event_name}}" id="event_name" name="event_name"maxlength="30">  
                    </div>

                </div><br><br>
                <div class="row">
                    <div class="col-md-2">
                        <label>Date</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="event_date" name ="event_date" class="form-control" value="{{$event->event_date}}" required>
                    </div> 
                   
                   
                    
                </div><br>
                  <div class="row">
                    <div class="col-md-2">
                        <label>Start Time</label>
                    </div>
                    <div class="col-md-8">
                       <input id="event_start_time" type="time" class="form-control" name="event_start_time" value="{{$event->event_start_time}}" required>
                    </div> 
                   
                   
                    
                </div>  
                <div class="row">
                    <div class="col-md-2">
                        <label>End Time</label>
                    </div>
                    <div class="col-md-8">
                       <input id="event_end_time" type="time" class="form-control" name="event_end_time" value="{{$event->event_end_time}}" required>
                    </div> 
                </div>
                
                 <div class="row">
                    @if($event->event_end_time=="Guestlist")
                    <div class="col-md-2">
                        <label>Guestlist close Time</label>
                    </div>
                    <div class="col-md-8">
                      <input id="event_closing_time" type="time" class="form-control" name="event_closing_time" value="{{$event->event_close_time}}" required>
                    </div> 
                    @endif   
                    
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <textarea maxlength="500" col="70" rows="5"> When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. </textarea> -->
                        </div>   
                    </div>
                  
                    
                </div>
                
            </div>  

        </div>
         <div class="col-md-4">
            
            <div class="jumbotron" id="users">
                <div class="row">
                   
                     <div class="col-md-6">
                        </label> Guest limit</label>
                    </div>
                    @if($event->event_type=="RSVP")
                        <div class="col-md-6">
                         <input type="number" value="{{$event->event_guest_limit}}"  id="event_guest_limit" min="1" max="500" readonly>
                        </div>
                    @else
                        <div class="col-md-6">
                         <input type="number" value="{{$event->event_guest_limit}}"  id="event_guest_limit" min="1" max="500">
                        </div>
                    @endif    
                    

                </div><br><br>
                <div class="row">
                    <!-- <textarea maxlength="500" col="60" rows="5">
                    When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. 
                    </textarea> -->


                </div>    
            </div> 
            <div class="jumbotron" id="users">
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING ARTIST</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder="Artist" id="artist_name">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING PROMOTERS</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder="promoter" id="promoter_name">
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
                        {{ Form::select('event_city_id', $cities, $event->event_city_id , ["id"=>"event_city_id", "class"=>"event_city_id", 'placeholder' => '--Select a city--']) }}
                    </div>    
                </div><br>
                <div class="row">    
                    <div class="col-md-5">
                        <label> Select venue</label>
                    </div>
                    <div class="col-md-5">
                        <select name="event_venue_id" class="event_venue_id" id="event_venue_id">
                            <option>--Select a Venue--</option>
                        </select>
                    </div>    
                </div>
                <div class="row">    
                    <div class="col-md-5">
                        <label> Select venue</label>
                    </div>
                    <div class="col-md-5">
                        <input type="file" name="event_banner" id="event_banner">
                    </div>    
                </div>

                </div><br><br>
                <div class="jumbotrone"id="users">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br><br>
                            <button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
                            UPDATE GUESTLIST EVENT</button>
                            <br><br>
                        </div>    
                    </div>    
                </div>    
            </div>
        </div>        
    </div>
    </form>        

</div>
<script type="text/javascript">

var svenue={{$event->event_venue_id}}
if($(".event_city_id").val()!=0)
{
    $.ajax({
        method: 'GET', 
        url: '/venue-list/' + $(".event_city_id").val(), 
        
        success: function(response){ 
            $(".event_venue_id").empty()
            $.each(response, function(i, obj){
                console.log(obj)
                if(svenue==obj.venue_id)
                {
                    $(".event_venue_id").append("<option value="+obj.venue_id+" selected>"+obj.venue_name+"</option>")                    
                }
                else
                {
                  $(".event_venue_id").append("<option value="+obj.venue_id+">"+obj.venue_name+"</option>")  
                }
            })
        },
        error: function(jqXHR, textStatus, errorThrown) { 
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
    if($(".event_city_id").val()=="")
    {
        $(".venue_options").empty()
        //$(".venue_options").append("<option value="">"--Select a venue--"</option>")
    }
}
      $(".event_city_id").change(function(){
         $.ajax({
            method: 'GET', 
            url: '/venue-list/' + $(this).val(), 
            success: function(response){ 
               $(".venue_options").empty()
               $.each(response, function(i, obj){
                  console.log(obj)
                  $(".event_venue_id").append("<option value="+obj.venue_id+">"+obj.venue_name+"</option>")
               })
            },
            error: function(jqXHR, textStatus, errorThrown) { 
               console.log(JSON.stringify(jqXHR));
               console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
         });

         if($(".event_city_id").val()=="")
         {
            $(".event_city_id").empty()
            //$(".venue_options").append("<option value="">"--Select a venue--"</option>")
         }
      });



</script>






@endsection