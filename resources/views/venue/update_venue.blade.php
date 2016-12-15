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
            <input id="venue_phone_no" type="text"  name="venue_phone_no" value=" {{ $ven->venue_phone_no }} ">
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
            {{ Form::select('venue_city', $city, Input::old('city_name'), 
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
           
            <input id="venue_address" type="textarea"  name="venue_address" value=" {{ $ven->venue_address }} ">
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
