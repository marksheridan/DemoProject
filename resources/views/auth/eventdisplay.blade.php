@extends('layouts.secondapp')

@section('content')

 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  img {
    border-radius: 10px;
}
/* .row{
  border-radius: 10px;
  border: 2px solid #48B4F2;
} */


#hid{
	font-size: 20px;
	color: #0D8D40

}
#date{
	font-size: 15px;
	color: #0D3B8D


}
/* #para{

	text-align: center;
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
.Guest{
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
.Dir{
	border-radius:10px;
  background: #B40E0E;
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

}
  </style>
<body>

<div class="container">
   <div class="jumbotron">

	<table>
		<tr>
			   <td width="500px">
				    <div class="col-md-6">
					   <img src="{{ url('eventimages').'/'. $event->event_banner}}" width="560px">
				    </div>
			   </td>

			 <td>
			     <div class="col-md-6">
				    <p id="hid">{{$event->event_name}}</p>
				    <p id="date"><strong>{{ $venuename->venue_name }}, {{ $cityname->city_name }}</strong></p>
          <a href="{{ url('/addtoguestlist/'.$event->id) }}">
            <button type="button" class="Guest"> 
              {{$event->event_type}}
            </button>
          </a> 
			   </div>
      </td>
		</tr>


      <tr>
        <td width="500px">

        <div class="col-md-6">
          <h4>About</h4>
          <p style="width:750px" id="para">{{ $event->event_description }} 
          </p>
        </div>


</td>
</tr>

         <tr>
          <td width="500px">

    <div class="col-md-6">
          <h4>Video</h4>
          <iframe width="560" height="315" src="{{$event->video_link}}" frameborder="0" allowfullscreen></iframe>
        </div>

</td>
</tr>



<tr>
  <td width="500px">
    <div class="col-md-6">1
         <h4> Artist</h4>
         <!-- <a href="{{url('/artist') }}"> -->

       <img src="/images/mountains1.jpg" width="100"><br>
       DQ

    
  </div>
</td>
</tr>

<tr>
  <td width="500px">
    <div class="col-md-6" style="url(file:///var/www/html/clubbers/DemoProject/public/images/mountains1.jpg)">

<h4>Promoters</h4>
  
   <!-- <a href="{{url('/promoters') }}"> -->

       <img src="/images/batman-v-superman.png" width="100"><br>
        Aneesh
</div>
</td>
</tr>


 <tr>
   <td width="500px">
    <div class="col-md-6" style="url(file:///var/www/html/clubbers/DemoProject/public/images/mountains1.jpg)">
     <h4>Venues</h4>
      <img src="/images/location.jpg" width="560px">
        </div>
      </td>

      <td>
        <div class="col-md-6">
        <p id="hid">Monkey Bar</p>
        <p id="date">#610, 12th Main, Indiranagar, Towards 80ft Road, Opp. SBI, Bengaluru,
         Karnataka 560038 Bangalore</p>
         <a href="{{url('https://www.google.co.in/maps/@12.9539974,77.6309395,11z') }}">          
         <button type="button" class="Dir"> GET DIRECTION</button>
       </a>
          
      </div>
    </td>
  </tr>


	</table>	
 


</div>

</div>

</body>
@endsection
