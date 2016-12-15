@extends('layouts.app')

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

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Update venue</div>

                {{Form::open(['url' => ['updatevenue/'.$ven->venue_id], 'method' => 'post', 'files' => true]) }}

    <table>
            <tr>
            <td>
            <label for="venue_name">
                      Venue Name
            </label>
            </td>
            <td>
            <input id="venue_name" type="text"  name="venue_name" value=" {{ $ven->venue_name }} ">
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_phone_no">
                      Venue Phone Number
            </label>
            </td>
            <td>
            <input id="venue_phone_no" type="text"  name="venue_phone_no" value=" {{ $ven->venue_phone_no }} ">
            </td>
            </tr>

        

            <tr>
            <td>
            <label for="venue_category">
                      Venue Category
            </label>
            </td>
            <td>
            <input id="venue_category" type="text"  name="venue_category" value=" {{ $ven->venue_category }} ">
            </td>
            </tr>



            <tr>
            <td>
            <label for="venue_latitude">
                      Venue Latitude
            </label>
            </td>
            <td>
            <input id="latitude" type="text"  name="latitude" value=" {{ $ven->latitude }} ">
            </td>
            </tr>

            <tr>
            <td>
            <label for="venue_longitude">
                      Venue Longitude
            </label>
            </td>
            <td>
            <input id="longitude" type="text"  name="longitude" value=" {{ $ven->longitude }} ">
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_city">
                      Venue city
            </label>
            </td>
            <td>
            {{ Form::select('venue_city', $city, Input::old('city_name'), 
            ['class' =>'venue_city','id' =>'venue_city', 'placeholder' => 'Pick a city']) }}       
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_cover_img">
                      Venue Cover Image
            </label>
            </td>
            <td>
            {{ Form::file('venue_cover_img',['class' =>'venue_cover_img', 'id' => 'venue_cover_img']) }}   
            </td>
            </tr>


            
            <tr>
            <td>
            <label for="venue_status">
                      Venue Status
            </label>
            </td>
            <td>
            {{ Form::select('venue_status', ['active' => 'Active', 'inactive' => 'In Active', 'deleted' => 'Deleted'], 
            $ven->venue_status, ['class' =>'venue_status','id' =>'venue_status', 'placeholder' => 'Pick a Status']) }}          
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_card">
                      Venue card
            </label>
            </td>
            <td>
            {{ Form::select('venue_card', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_card, ['class' =>'venue_card','id' =>'venue_card', 'placeholder' => 'Pick a card']) }}          
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_parking">
                      Venue Parking
            </label>
            </td>
            <td>
            {{ Form::select('venue_parking', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_parking, ['class' =>'venue_parking','id' =>'venue_parking', 'placeholder' => 'Pick a parking']) }}          
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_seats">
                      Venue Seats
            </label>
            </td>
            <td>
            {{ Form::select('venue_seats', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_seats, ['class' =>'venue_seats','id' =>'venue_seats', 'placeholder' => 'Pick a seats']) }}          
            </td>
            </tr>


            <tr>
            <td>
            <label for="venue_smoking">
                      Venue smoking
            </label>
            </td>
            <td>
            {{ Form::select('venue_smoking', ['yes' => 'Yes', 'no' => 'No'], 
            $ven->venue_smoking, ['class' =>'venue_smoking','id' =>'venue_smoking', 'placeholder' => 'Pick a smoking']) }}          
            </td>
            </tr>


             <tr>
            <td>
            <label for="venue_address">
                      Venue address
            </label>
            </td>
            <td>
            <input id="venue_address" type="textarea"  name="venue_address" value=" {{ $ven->venue_address }} ">
            </td>
            </tr>
            
            
            <tr>
            <td>
            <button type="submit" >
                    Update
            </button>
            </td>
            </tr>        
    </table>
    
    {!! Form::close() !!}
         
            </div>
        </div>
    </div>
</div>
@endsection
