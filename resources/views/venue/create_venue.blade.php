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
    var NameTB = document.getElementById("venue_name");
    var namefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!namefilter.test(NameTB.value))
    {
      alert("EVENT NAME IS NOT VALID");
      return false;
    }

    var PhoneTB = document.getElementById("venue_phone_no");

      var phonefilter = new RegExp("^[0-9]{10}$");

      if(!phonefilter.test(PhoneTB.value))
        {
          alert("Phone number must have 10 digit");
          PhoneTB.focus();
          return false;
        }

        var CatTB = document.getElementById("venue_category");
    var catfilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!catfilter.test(CatTB.value))
    {
      alert("NOT VALID");
      return false;
    }


var LatTB = document.getElementById("latitude");

      var latfilter = new RegExp("^[0-9]+$");

      if(!latfilter.test(LatTB.value))
        {
          alert("NUMBER PLEASE");
          LatTB.focus();
          return false;
        }



        var LotTB = document.getElementById("longitude");

      var lotfilter = new RegExp("^[0-9]+$");

      if(!lotfilter.test(LotTB.value))
        {
          alert("NUMBER PLEASE");
          LotTB.focus();
          return false;
        }


          var photoTB = document.getElementById("venue_cover_img").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(photoTB == '')
        {
          /*alert("Select a file.");
          return false;*/
        }

        else
        {
          var extension = photoTB.substring(photoTB.lastIndexOf('.') +1).toLowerCase();
          if(extension == "jpg" || extension == "png" || extension == "gif" || extension == "jpeg")

          {
           /* alert("file format is not valid");
            return false;*/
          }

          else
          {
            alert("Invalid format");
            document.getElementById("venue_cover_img").value = '';
            return false;
          }

        }


    
    }
  
</script>



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
                      <input id="venue_name" type="text" class="form-control" name="venue_name" placeholder="Venue Name"required>
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
                         <input id="venue_phone_no" type="text" class="form-control" name="venue_phone_no" placeholder="Eg:9999999999"required>

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
                        <input id="venue_category" type="text" class="form-control" name="venue_category" placeholder="Venue Category Name"required>
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
                        <input id="latitude" type="text" class="form-control" name="latitude" placeholder="latitude"required>
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
                        <input id="longitude" type="text" class="form-control" name="longitude" placeholder="longitude"required>

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
                       <input id="venue_cover_img" type="file" class="form-control" name="venue_cover_img"required>
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
                        {{ Form::select('venue_card', ['yes' => 'Yes','no' => 'No' ], "yes", ['placeholder' => 'Pick a card']) }}
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
                        {{ Form::select('venue_parking', ['yes' => 'Yes','no' => 'No' ], "yes", ['placeholder' => 'Pick a parking']) }}
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
                        {{ Form::select('venue_seats', ['yes' => 'Yes','no' => 'No' ], "yes", ['placeholder' => 'Pick seats']) }}
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
                        {{ Form::select('venue_smoking', ['yes' => 'Yes','no' => 'No' ], "yes", ['placeholder' => 'Pick smoking']) }}
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
