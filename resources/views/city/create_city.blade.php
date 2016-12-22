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
            text-align: center;
    }
    .col-md-4{
        text-align: center;
    }
   li{
    color: white;
   }


</style>  




<script type="text/javascript">

  function validate()
    {
      var CNameTB = document.getElementById("city_name");

      var cnamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
      if(!cnamefilter.test(CNameTB.value))
        {
          alert("VALID NAME PLEASE!");
          return false;
        }
        var e = document.getElementById("city_status");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("CITY STATUS PLEASE");
return false;
}

var t = document.getElementById("city_tier");
var strUser = t.options[t.selectedIndex].value;

var strUser1 = t.options[t.selectedIndex].text;
if(strUser==0)
{
alert("CITY TIER PLEASE");
return false;
}


}
</script>


<div class="container">
    <h4><strong>  ADD CITY <strong> </h4>
     <div class="jumbotron">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
               

                <div class="panel-heading text-center">
                
                </div>
                <div class="panel-body">
                     {{Form::open(['url' => '/storecity', 'method' => 'post']) }}
                     <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                  
                        <label for="cityname" class="col-md-4 control-label">
                                
                                    City Name
                                
                            </label>

                        </div>
                       <div class="col-md-8">
                           <input id="city_name" type="text" class="form-control" name="city_name" placeholder="City Name"required >
                       </div>
                   </div>
               </div>
                      <br>
                        <div class="row">

                         <div class="form-group">  
                         <div class="col-md-4"> 
                          <label for="city_status" class="col-md-4 control-label">
                                
                                    City Status
                                
                            </label>
                         </div>
                                <div class="col-md-8">
                                {{ Form::select('city_status', ['active' => 'Active', 'inactive' => 'In Active'], null, ['class' =>'city_status','id' =>'city_status', 'placeholder' => 'Pick a Status']) }}
                             </div>
                   </div>
               </div>
                       <br>
                      <div class="row">

                         <div class="form-group">  

                               <div class="col-md-4">
                           <label for="city_tier" class="col-md-4 control-label">
                                
                                    City Tier
                                
                            </label>
                                </div>
                            
                        <div class="col-md-8">
                                {{ Form::select('city_tier', ['1' => '1','2' => '2' ], null, ['class' =>'city_tier','id' =>'city_tier','placeholder' => 'Pick a Tier']) }}
                                        </div>
                   </div>
               </div>

                        <br> 
                        <div class="row">
                            <div class="col-md-5">
                            </div>
                        <div class="form-group">

                           <button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
                            Add</button>
                       

                     {!! Form::close() !!}

                 </div>
                <div>
                </div>


        
        </div>
    </div>
</div>
</div>
@endsection
