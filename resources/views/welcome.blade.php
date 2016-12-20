@extends('layouts.app')

@section('content')

 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  img {
    border-radius: 17px;
}
.jumbotron{
  border-radius: 20px;
  background-color: #E6E6E7;

}
/* .row{
  border-radius: 10px;
  border: 2px solid #48B4F2;
} */

Button{
  border-radius:16px;
  background: #216C1D;
  padding:6px 20px;
  padding-top:8px;
  outline:none;
  color:#fff;
  text-transform: uppercase;
  font-size: 14px;
  font-family: 'Varela Round', sans-serif;
  border: 2px solid #48B4F2;
}
select{
  color:#0C99D1;
}
.text-left{
  text-align: left;
}
.RSPV{
  border-radius:10px;
  background: #216C1D;
  padding:3px 10px;
  padding-top:5px;
  outline:none;
  color:#fff;
  text-transform: uppercase;
  font-size: 10px;
  font-family: 'Varela Round', sans-serif;
  border: 2px solid #48B4F2;
}
.BUY{
  border-radius:10px;
  background: #920911;
  padding:3px 10px;
  padding-top:5px;
  outline:none;
  color:#fff;
  text-transform: uppercase;
  font-size: 10px;
  font-family: 'Varela Round', sans-serif;
  border: 2px solid #48B4F2;
}
#eb{s
  color: #AF1414;
}
#pe{
  color: #278F09;
}

}
  </style>
<body>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/sweden.jpg" alt="Chania" width="460" height="345">
            </div>
            @foreach($events as $event)
            <div class="item">
                <a href="{{'/eventdisplay/'.$event->id}}">
                    <img src="{{ url('flyer').'/'. $event->event_banner}}" alt="Chania" width="300" height="155">
                </a>
            </div>
            @endforeach
            
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<br><br>


<div class="container padding0">
    <div class="row">
        <div class="col-md-10 col-sm-4">
            <p id="eb" class="cityname">All Events</p>
        </div>
        <div class="col-md-2">
            <select dir class="all events" id="type"><br>
                <option value="0">All Events</option>
                <option value="RSVP">RSVP</option>
                <option value="Guestlist">Guestlist</option>
            </select>
        </div>
    </div>
<br><br>
</div>
<div class="container padding0">
    
    <div class="row" id="displayitem">
    @foreach($events as $event)
        <div class="col-md-4">
            <div class="jumbotron">
                <a href="{{'/eventdisplay/'.$event->id}}">
                    <img src="{{ url('eventimages').'/'. $event->event_banner}}" width="294" height="100">
                </a>
                <div class="text-left">
                    <div class="eventname">
                        {{ $event->event_name }}
                    </div>
                    <div class="eventvenue">
                        monday<strong>{{$event->event_venue_id}}</strong> kochi
                    </div>
                    <div class="type">
                        <a href="{{ url('/addtoguestlist/'.$event->id) }}">
                            <button class="RSPV">{{ $event->event_type }}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    
</div>
<br>
<!-- <div> sdkjsdksn</div>
<div>djdlsfsdl</div> -->
<div class="row">

  
<!-- <div> sdkjsdksn</div>
<div>djdlsfsdl</div> -->


</div>
<br><br>

<div class="row">
    <div class="col-md-12 text-center">
        <button type="submit" class="Button" id="loadmore" align="center">
            Load More
        </button>
    </div>
</div>



</div>


<div class="container padding0" style=" margin:0px auto;margin-top:32px; border-top:1px solid #981A0C;">
  <br>
  <div class="row">

  <div class="col-md-10 col-sm-4">
 <p id="pe"> most popular events</p>
 </div>
 <div class="col-md-2">
  <select dir class="all events"><br>
                                <option>all events</option>
                                <option>RSVP</option>
                                <option>Gustlist</option>
                            </select>

</div>
</div>
<br><br>

<div class="row">
    <div class="col-md-4">
        <div class="jumbotron"> 
            <a href="{{url('/eventdisplay') }}">
                <img src="/images/mountains1.jpg" width="294">
            </a>
            <div class="text-left">
                <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
       monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
        </div>
    </div>


</div>
<!-- <div> sdkjsdksn</div>
<div>djdlsfsdl</div> -->
<div class="col-md-4">
   <div class="jumbotron">

 <a href="{{url('/eventdisplay') }}">
    <img src="/images/mountains1.jpg" width="294">
  </a>
  <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
       monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
        </div>
    </div>
</div>
<div class="col-md-4">
   <div class="jumbotron">

 <a href="{{url('/eventdisplay') }}">
    <img src="/images/mountains1.jpg" width="294">
  </a>
  <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
       monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
        </div>
    </div>
</div>

</div>
<br>
<!-- <div> sdkjsdksn</div>
<div>djdlsfsdl</div> -->
<div class="row">

  <div class="col-md-4">
     <div class="jumbotron">
    <a href="{{url('/eventdisplay') }}">

       <img src="/images/mountains1.jpg" width="294">
    </a>
    <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
        monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
        </div>
    </div>


</div>
<!-- <div> sdkjsdksn</div>
<div>djdlsfsdl</div> -->
<div class="col-md-4">
   <div class="jumbotron">

 <a href="{{url('/eventdisplay') }}">
    <img src="/images/mountains1.jpg" width="294">
  </a>
  <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
       monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
        </div>
    </div>
</div>
<div class="col-md-4">
   <div class="jumbotron">
 <a href="{{url('/eventdisplay') }}">
    <img src="/images/mountains1.jpg" width="294">
  </a>
  <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
        monday<strong> Paradise bar</strong> kochi
      </div>
      <div class="type">
        <button class="BUY"> BUY</button>
      </div>
</div>
    </div>
</div>
</div>
<br><br>

<div class="row">
  <div class="col-md-12 text-center">
    <a href="{{ url('/login') }}">
                     <button type="submit" class="Button" align="center">
                        Load More
                     </button>
                    </a>
                  </div>
                </div>



</div>


</body>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script type="text/javascript">

    
    
    $("#event_city_id").change(function(){
        alert("Change events according to city"+ $(this).val());
        $("#eb").html($("#event_city_id option:selected").text());
        $.ajax({
            method: 'GET', 
            url:'/get-events-city/'+ $(this).val(),

            success: function(response){ 
                alert("success");
                skipval=3;
                $("#displayitem").empty()
                $.each(response, function(i, obj){
                    console.log(obj)
                    var imageurl="{{ asset('eventimages/') }}";
                    var url =imageurl+"/"+obj.event_banner;
                    $html="<div class=\"col-md-4\">";
                    $html+="<div class=\"jumbotron\">";
                    $html+="<a href=\"eventdisplay/"+obj.id+"\">";
                    $html+="<img src=\""+url+"\" width=\"294\" height=\"100\">";
                    $html+="</a>               <div class=\"text-left\">"
                    $html+="<div class=\"eventname\">"
                    $html+=obj.event_name
                    $html+="</div>                  <div class=\"eventvenue\">"
                    $html+="monday<strong>"+obj.event_venue+"</strong> kochi"
                    $html+="</div>                   <div class=\"type\">"
                    $html+="<a href=\"addtoguestlist/"+obj.id+"\">"
                    $html+="<button class=\"RSPV\">"+obj.event_type+"</button>"
                    $html+="</a></div></div></div></div>"
                    $("#displayitem").append($html)
                    
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

    var skipval=3;


    $("#loadmore").click(function(){
        console.log(skipval);
        $.ajax({
            method: 'GET',
            url:'/get-more/'+$("#event_city_id").val(),
            data:{
                'skip': skipval,
            },
            success: function(response){
                $.each(response,function(i,obj){
                    console.log("success")
                    var imageurl="{{ asset('eventimages/') }}";
                    var url =imageurl+"/"+obj.event_banner;
                    $html="<div class=\"col-md-4\">";
                    $html+="<div class=\"jumbotron\">";
                    $html+="<a href=\"eventdisplay/"+obj.id+"\">";
                    $html+="<img src=\""+url+"\" width=\"294\" height=\"100\">";
                    $html+="</a>               <div class=\"text-left\">"
                    $html+="<div class=\"eventname\">"
                    $html+=obj.event_name
                    $html+="</div>                  <div class=\"eventvenue\">"
                    $html+="monday<strong>"+obj.event_venue+"</strong> kochi"
                    $html+="</div>                   <div class=\"type\">"
                    $html+="<a href=\"'/addtoguestlist/'"+obj.id+"\">"
                    $html+="<button class=\"RSPV\">"+obj.event_type+"</button>"
                    $html+="</a></div></div></div></div>"
                    $("#displayitem").append($html)
                })
                skipval+=3;
                //console.log(skipval);
            },
            error: function(jqXHR, textStatus, errorThrown) { 
              //alert("failure");
                console.log("Load More Does not work");
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    })

</script>

@endsection


            
                
                    
                
                    
                        
                    
                        
                    
                        
                            
                        