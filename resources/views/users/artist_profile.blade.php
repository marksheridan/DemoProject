@extends('layouts.profile')

@section('content')
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
    img{
 	  border-radius: 15px;
       }
 </style>


 
    <div class="row text-center">
 		
 			<img src="{{ url('images').'/'. $usr->user_img }}" width="1250"height="400">
            <br><br>              
    </div>
            <br><br>
 <h4>Events By {{ $usr->user_name }}</h4>
 <br><br>

<div class="container padding0">
    <div class="row">
      @foreach($evn as $vv)
        <div class="col-md-4">
            <div class="jumbotron">
                <a href="{{'/eventdisplay/'.$vv->id}}">
                 <img src="{{ url('eventimages').'/'. $vv->event_banner }}" width="294" height="100">
                </a>
                <div class="text-left">
                    <div class="eventname">
                        Event Name:{{ $vv->event_name }}
                    </div>
                    <div class="eventvenue">
                       Event Venue:{{ $vv->event_venue_id }}
                    </div>
                    <div class="type">
                        <a href="{{ url('/addtoguestlist/'.$vv->id) }}">
                            <button>{{ $vv->event_type }}</button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        
    </div>
          
@endsection