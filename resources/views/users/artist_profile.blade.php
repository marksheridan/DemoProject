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
 		
 			 <img src="{{ url('images/avengers_age_of_ultron_2015_movie.wide_.jpg' ) }}" width="1250"height="400">
        
   			<br><br>

   			
              

    </div>
 <br><br>
 <div class="container padding0">
    
    <div class="row">
        <div class="col-md-4">
            <div class="jumbotron">
                <a href="{{'/'}}">
                 <img src="{{ url('images/avengers_age_of_ultron_2015_movie.wide_.jpg' ) }}" width="294" height="100">
           
                </a>
                <div class="text-left">
                    <div class="eventname">
                        abcd
                    </div>
                    <div class="eventvenue">
                        dss
                    </div>
                    <div class="type">
                        <a href="{{ url('/') }}">
                            <button class="RSPV">add</button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
</div>      



@endsection