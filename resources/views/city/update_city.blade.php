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

</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-heading text-center">
                <div class="panel-heading"><h4><strong>UPDATE CITY</strong></h4></div>
                      <div class="jumbotron">
   

    {{Form::open(['url' => ['updatecity/'.$city->city_id], 'method' => 'post']) }}

            <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                  
                        <label for="cityname" class="col-md-4 control-label">
        
                      City Name
            </label>
            </div>
            <div class="col-md-3">
            <input id="city_name" type="text"  name="city_name" value=" {{ $city->city_name }} ">
            </div>
            <div class="col-md-3">
                        </div>
            </div>
        </div>
        <br>
            <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                  
                        <label for="citystatus" class="col-md-4 control-label">
                      City Status
            </label>
            </div>
             <div class="col-md-3">
        	{{ Form::select('city_status', ['active' => 'Active', 'inactive' => 'In Active'], $city->city_status, ['class' =>'city_status','id' =>'city_status', 'placeholder' => 'Pick a Status']) }}          
            </div>
        </div>
    </div>
            <br>
           <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
            <label for="city_tier" class="col-md-4 control-label">
                      City Tier
            </label>
            </div>
            <div class="col-md-3">
        	{{ Form::select('city_tier', ['1' => '1', '2' => '2'], $city->city_tier, ['class' =>'city_tier','id' =>'city_tier', 'placeholder' => 'Pick a Tier']) }}          
            </div>

        </div>
    </div>
    <br><br>
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
