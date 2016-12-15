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


<div class="container">
    <div class="row">
    <h4> <strong>  ADD VENUE <strong> </h4>
   </div>
    
     <div class="jumbotron">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
               

                <div class="panel-heading text-center">
                
                </div>
                <div class="panel-body"> 

            {{Form::open(['url' => '/storevenue', 'method' => 'post', 'files' => true]) }}

            <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuename', 'Venue Name') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::text('venue_name')  }}
                    </div>
                </div>
            </div>
                    <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuephno', 'Venue Phone-Number') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::text('venue_phone_no')  }}
                   </div>
               </div>
           </div>
                  <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuecategory', 'Venue Category') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::text('venue_category')  }}
                  </div>
              </div>
          </div>
                  <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('latitude', 'Latitude') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::text('latitude')  }}
                     </div>
                 </div>
             </div>
                      <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('longitude', 'Longitude') }}
                        </div>
                       <div class="col-md-8">
                        {{ Form::text('longitude')  }}
                     </div>
                 </div>
             </div>
                      <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuecity', 'Venue City') }}
                       </div>
                       <div class="col-md-8">
                        {{ Form::select('venue_city', $city, Input::old('city_name'), 
                            ['class' =>'venue_city','id' =>'venue_city', 'placeholder' => 'Pick a city']) }}
                     </div>
                 </div>
             </div>
                        <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuecoverimg', 'Venue Cover Image') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::file('venue_cover_img') }}   
                      </div>
                  </div>
              </div>

                <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuestatus', 'Venue Status') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::select('venue_status', [ 'inactive' => 'In Active','active' => 'Active', 'deleted' => 'Deleted'], "active", ['class' =>'venue_status','id' =>'venue_status']) }}
                        </div>
                    </div>
                </div>
                    
                    <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuecard', 'venue_card') }}
                        </div>
                        <div class="col-md-8">
                        {{ Form::select('venue_card', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick a card']) }}
                        </div>
                    </div>
                </div>
                   <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venueparking', 'venue_parking') }}
                       </div>
                       <div class="col-md-8">
                        {{ Form::select('venue_parking', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick a parking']) }}
                        </div>
                    </div>
                </div>
                    
                     <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venueseats', 'venue_seats') }}
                       </div>
                       <div class="col-md-8">
                        {{ Form::select('venue_seats', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick seats']) }}
                        </div>
                    </div>
                </div>
                    
                      <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venuesmoking', 'venue_smoking') }}
                       </div>
                       <div class="col-md-8">
                        {{ Form::select('venue_smoking', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick smoking']) }}
                      </div>
                  </div>
              </div>
                   <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        {{ Form::label('venueaddress', 'venue_address') }}
                       </div>
                       <div class="col-md-8">
                        {{ Form::textarea('venue_address')  }}
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
</div>
@endsection
