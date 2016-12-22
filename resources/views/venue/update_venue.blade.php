@extends('layouts.admin')

@section('content')
 @if(count($errors) > 0)

<div class="row">
    <div class="col-md-6">
        <ul>
            @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
            @endforeach
        </ul>
   </div>
 </div>
@endif  

<style>

 h4{
            color: #3989AE;
    }
li{
    color:white;
}
</style>


<script type="text/javascript">
  function validate()
  {
    var NameTB = document.getElementById("venue_name");
    var namefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!namefilter.test(NameTB.value))
    {
      alert("EVENT NAME IS NOT VALID");
      return false;
    }

    var PhoneTB = document.getElementById("venue_phone_no");

      var phonefilter = new RegExp("^[0-9]{10}$");

      if(!phonefilter.test(PhoneTB.value))
        {
          alert("Phone number must have 10 digit");
          PhoneTB.focus();
          return false;
        }

        var CatTB = document.getElementById("venue_category");
    var catfilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!catfilter.test(CatTB.value))
    {
      alert("CATEGORY NOT VALID");
      return false;
    }


var LatTB = document.getElementById("latitude");

      var latfilter = new RegExp("^[ .0-9]+$");

      if(!latfilter.test(LatTB.value))
        {
          alert("NUMBER PLEASE LAT");
          LatTB.focus();
          return false;
        }



        var LotTB = document.getElementById("longitude");

      var lotfilter = new RegExp("^[ .0-9]+$");

      if(!lotfilter.test(LotTB.value))
        {
          alert("NUMBER PLEASE LOT");
          LotTB.focus();
          return false;
        }
 
  var e = document.getElementById("venue_city");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE CITY PLEASE");
return false;
}




          var photoTB = document.getElementById("venue_cover_img").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(photoTB == '')
        {
          alert("Select a file.");
          return false;
        }

        else
        {
          var extension = photoTB.substring(photoTB.lastIndexOf('.') +1).toLowerCase();
          if(extension == "jpg" || extension == "png" || extension == "gif" || extension == "jpeg")

          {
           /* alert("file format is not valid");
            return false;*/
          }

          else
          {
            alert("Invalid format");
            document.getElementById("venue_cover_img").value = '';
            return false;
          }

        }
           
           var e = document.getElementById("venue_status");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE STATUS PLEASE");
return false;
}


 var e = document.getElementById("venue_card");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE CARD PLEASE");
return false;
}


var e = document.getElementById("venue_parking");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE PARKING PLEASE");
return false;
}


var e = document.getElementById("venue_seats");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE SEATS PLEASE");
return false;
}

var e = document.getElementById("venue_smoking");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("VENUE smoking PLEASE");
return false;
}


  var addTB = document.getElementById("venue_address").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(addTB == '')
        {
          alert("address required ");
          return false;
        }




    
    }
  
</script>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading text-center">
                <div class="panel-heading"><h4><strong>UPDATE VENUE</strong></h4></div>
                      <div class="jumbotron">

                {{Form::open(['url' => ['updatevenue/'.$ven->venue_id], 'method' => 'post', 'files' => true]) }}

        <div class="row">
           <div class="col-md-3">
           </div>

         <div class="col-md-3">
            <label for="venue_name">
                      Venue Name
            </label>
         </div>
         <div class="col-md-3">
            <input id="venue_name" type="text"  name="venue_name" value=" {{ $ven->venue_name }} ">
           </div>
        </div>
          <br>
          <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_phone_no">
                      Venue Phone Number
            </label>
          </div>
          <div class="col-md-3">
            <input id="venue_phone_no" type="text"  name="venue_phone_no" value="{{ $ven->venue_phone_no }}">
         </div>
     </div>
             <br>
       <div class="row">
         <div class="col-md-3">
           </div>
        <div class="col-md-3">
            <label for="venue_category">
                      Venue Category
            </label>
           </div>
           <div class="col-md-3">
            <input id="venue_category" type="text"  name="venue_category" value=" {{ $ven->venue_category }} ">
           </div>
        </div>
             <br>

         <div class="row">  
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_latitude">
                      Venue Latitude
            </label>
           </div>
           <div class="col-md-3">
             <div class="col-md-3">
           </div>
            <input id="latitude" type="text"  name="latitude" value=" {{ $ven->latitude }} ">
           </div>
       </div>
            <br>

           
          <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_longitude">
                      Venue Longitude
            </label>
           
            </div>
            <div class="col-md-3">
            <input id="longitude" type="text"  name="longitude" value=" {{ $ven->longitude }} ">
            </div>
        </div>

            <br>
         <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
         <label for="venue_city">
                      Venue city
            </label>
             </div>
             <div class="col-md-3">
            {{ Form::select('venue_city', $city,  $ven->venue_city , 
            ['class' =>'venue_city','id' =>'venue_city', 'placeholder' => 'Pick a city']) }}       
           </div>
       </div>
            <br>

            <div class="row">
                 <div class="col-md-3">
           </div>
                <div class="col-md-3">
            <label for="venue_cover_img">
                      Venue Cover Image
            </label>
        </div>
        <div class="col-md-3">
           
            {{ Form::file('venue_cover_img',['class' =>'venue_cover_img', 'id' => 'venue_cover_img']) }}   
            </div>
            </div>

            <br>
           <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_status">
                      Venue Status
            </label>
            </div>
            <div class="col-md-3">
            {{ Form::select('venue_status', ['active' => 'Active', 'inactive' => 'In Active', 'deleted' => 'Deleted'], 
            $ven->venue_status, ['class' =>'venue_status','id' =>'venue_status', 'placeholder' => 'Pick a Status']) }}          
          </div>
      </div>
            <br>
           <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_card">
                      Venue card
            </label>
           </div>
           <div class="col-md-3">
            {{ Form::select('venue_card', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_card, ['class' =>'venue_card','id' =>'venue_card', 'placeholder' => 'Pick a card']) }}          
           </div>
       </div>
            <br>
          <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_parking">
                      Venue Parking
            </label>
           </div>
           <div class="col-md-3">
            {{ Form::select('venue_parking', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_parking, ['class' =>'venue_parking','id' =>'venue_parking', 'placeholder' => 'Pick a parking']) }}          
            </div>
        </div>

            <br>
            <div class="row">
                 <div class="col-md-3">
           </div>
                <div class="col-md-3">
            <label for="venue_seats">
                      Venue Seats
            </label>
            </div>
            <div class="col-md-3">
            {{ Form::select('venue_seats', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_seats, ['class' =>'venue_seats','id' =>'venue_seats', 'placeholder' => 'Pick a seats']) }}          
            </div>
        </div>
            <br>

           <div class="row">
             <div class="col-md-3">
           </div>
            <div class="col-md-3">
            <label for="venue_smoking">
                      Venue smoking
            </label>
           </div>
           <div class="col-md-3">
            {{ Form::select('venue_smoking', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_smoking, ['class' =>'venue_smoking','id' =>'venue_smoking', 'placeholder' => 'Pick a smoking']) }}          
           </div>
       </div>
            <br>
            <div class="row">
                 <div class="col-md-3">
           </div>
                <div class="col-md-3">
            <label for="venue_address">
                      Venue address
            </label>
        </div>
        <div class="col-md-3">
           
           {{ Form::textarea('venue_address', $ven->venue_address, ['class' => 'venue_address','id' =>'venue_address']) }}
           </div>
       </div>
            <br>
        

                <div class="row">

    
            <div class="form-group">
                   <button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
                            Add</button>
                        </div>
                
            </div>
    
    {!! Form::close() !!}
           </div>
         
            </div>
        </div>
    </div>
</div>
       
@endsection
