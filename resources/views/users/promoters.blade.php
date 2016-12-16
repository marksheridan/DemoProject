@extends('layouts.secondapp')

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
  <div class="col-md-12">
        <img src="/images/batman-v-superman.png" alt="Flower" width="1100" height="345">
      </div>
    </div>


    <br><br>
<div class="container padding0">
  <div class="row">

  <div class="col-md-10 col-sm-4">
  Events by DQ
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
    <a href="{{url('/eventdisplay') }}">

       <img src="/images/mountains1.jpg" width="294">
    </a>
    <div class="text-left">
      <div class="eventname">
        SUICIDE SQUAD PRESENTS JOCKER LIVE
      </div>
        <div class="eventvenue">
        monday Paradise bar kochi
      </div>
      <div class="type">
        <button class="RSPV"> RSPV</button>
      </div>

    </div>


</div>
</div>
	
</body>
<!-- </html>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
