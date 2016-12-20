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
    #event_year{
        width:50px;
    }
    #time{
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
 var DayTB = document.getElementById("event_day").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(DayTB == '')
        {
          alert("day field is empty.");
          return false;
        }

         var MonthTB = document.getElementById("event_month").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(MonthTB == '')
        {
          alert("month field is empty.");
          return false;
        }


     var YearTB = document.getElementById("event_year");

      var yearfilter = new RegExp("^[0-9]{4}$");

      if(!yearfilter.test(YearTB.value))
        {
          alert("ivalid year");
          YearTB.focus();
          return false;
        }


         var EhourTB = document.getElementById("sevent_hour").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(EhourTB == '')
        {
          alert("hour field is empty.");
          return false;
        }

          var EminTB = document.getElementById("sevent_min").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(EminTB == '')
        {
          alert("minute field is empty.");
          return false;
        }

         var ChourTB = document.getElementById("eevent_hour").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(ChourTB == '')
        {
          alert("hour field is empty.");
          return false;
        }

         var CminTB = document.getElementById("eevent_min").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(CminTB == '')
        {
          alert("minute field is empty.");
          return false;
        }


         var ChourTB = document.getElementById("cevent_hour").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(ChourTB == '')
        {
          alert("hour field is empty.");
          return false;
        }

         var CminTB = document.getElementById("cevent_min").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(CminTB == '')
        {
          alert("minute field is empty.");
          return false;
        }
         var GlimitTB = document.getElementById("event_glimit").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(GlimitTB == '')
        {
          alert("gustlimit field is empty.");
          return false;
        }


         var EANameTB = document.getElementById("artist_name");
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
    }

}
</script>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="/images/thaikkudam-bridge.jpg" width="1300"height="400">
        	</div><br>
<div class="container">
   <form method="post">
    <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-2">
                        <label>Event Name</label>
                    </div>
                        
                    <div class="col-md-5">
                        <input type="text"placeholder="EG thaikkudam bridge" id="event_name">  
                    </div>

                </div><br><br>
                <div class="row">
                    <div class="col-md-2">
                        <label>Date</label>
                    </div>
                    <div class="col-md-3">
                       <input type="number"placeholder="EG 17"max="31"min="1" id="event_day"required>
                    </div> 
                    <div class="col-md-3">
                       <input type="number"placeholder="EG 07"max="12"min="1"id="event_month"required>
                    </div> 
                    <div class="col-md-1">
                       <input type="text"placeholder="EG 2017"id="event_year"width="30">
                    </div>   
                    
                </div><br>
                  <div class="row">
                    <div class="col-md-2">
                        <label>Start Time</label>
                    </div>
                    <div class="col-md-3">
                       <input type="number"placeholder="EG 05" id="sevent_hour"min="1"max="12"required>
                    </div> 
                    <div class="col-md-3">
                       <input type="number"placeholder="EG 07"id="sevent_min" min="1" max="59"required>
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
                       <input type="text"placeholder="EG 05"id="eevent_hour" min="1" max="12"required >
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="eevent_min" min="1" max="59"required>
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
                       <input type="text"placeholder="EG 05"id="cevent_hour" min="1" max="12"required>
                    </div> 
                    <div class="col-md-3">
                       <input type="text"placeholder="EG 07"id="cevent_min" min="1" max="59"required>
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
                         <input type="number"placeholder="EG 05"id="event_glimit"min="1" max="5"required>
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
                        <input type="text"placeholder="artist"id="artist_name">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING PROMOTERS</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text"placeholder="promoter"id="promoter_name">
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
            </form>
        </div>        
     



    </div>            

	

	



</div>






@endsection