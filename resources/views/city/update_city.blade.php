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
                <div class="panel-heading">Update City</div>

   

    {{Form::open(['url' => ['updatecity/'.$city->city_id], 'method' => 'post']) }}

    <table>
            <tr>
            <td>
            <label for="city_name">
                      City Name
            </label>
            </td>
            <td>
            <input id="city_name" type="text"  name="city_name" value=" {{ $city->city_name }} ">
            </td>
            </tr>
            
            <tr>
            <td>
            <label for="city_status">
                      City Status
            </label>
            </td>
            <td>
        	{{ Form::select('city_status', ['active' => 'Active', 'inactive' => 'In Active'], $city->city_status, ['class' =>'city_status','id' =>'city_status', 'placeholder' => 'Pick a Status']) }}          
            </td>
            </tr>
            
            <tr>
            <td>
            <label for="city_tier">
                      City Tier
            </label>
            </td>
            <td>
        	{{ Form::select('city_tier', ['1' => '1', '2' => '2'], $city->city_tier, ['class' =>'city_tier','id' =>'city_tier', 'placeholder' => 'Pick a Tier']) }}          
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
