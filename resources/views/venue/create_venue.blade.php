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
                <div class="panel-heading">Create venue</div>

                 <div class="panel-body">
                    Add Venue 

            {{Form::open(['url' => '/storevenue', 'method' => 'post', 'files' => true]) }}

            <table>
                    <tr>
                        <td>
                        {{ Form::label('venuename', 'Venue Name') }}
                        </td>
                        <td>
                        {{ Form::text('venue_name')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venuephno', 'Venue Phone-Number') }}
                        </td>        
                        <td>
                        {{ Form::text('venue_phone_no')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venuecategory', 'Venue Category') }}
                        </td>
                        <td>
                        {{ Form::text('venue_category')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('latitude', 'Latitude') }}
                        </td>
                        <td>
                        {{ Form::text('latitude')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('longitude', 'Longitude') }}
                        </td>
                        <td>
                        {{ Form::text('longitude')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venuecity', 'Venue City') }}
                        </td>
                        <td>
                        {{ Form::select('venue_city', $city, Input::old('city_name'), 
                            ['class' =>'venue_city','id' =>'venue_city', 'placeholder' => 'Pick a city']) }}
                        </td>
                    </tr>
                        
                    <tr>
                        <td>
                        {{ Form::label('venuecoverimg', 'Venue Cover Image') }}
                        </td>
                        <td>
                        {{ Form::file('venue_cover_img') }}   
                        </td>
                    </tr>


                    <tr>
                        <td>
                        {{ Form::label('venuestatus', 'Venue Status') }}
                        </td>
                        <td>
                        {{ Form::select('venue_status', [ 'inactive' => 'In Active','active' => 'Active', 'deleted' => 'Deleted'], "active", ['class' =>'venue_status','id' =>'venue_status']) }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venuecard', 'venue_card') }}
                        </td>
                        <td>
                        {{ Form::select('venue_card', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick a card']) }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venueparking', 'venue_parking') }}
                        </td>
                        <td>
                        {{ Form::select('venue_parking', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick a parking']) }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venueseats', 'venue_seats') }}
                        </td>
                        <td>
                        {{ Form::select('venue_seats', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick seats']) }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venuesmoking', 'venue_smoking') }}
                        </td>
                        <td>
                        {{ Form::select('venue_smoking', ['yes' => 'Yes','no' => 'No' ], null, ['placeholder' => 'Pick smoking']) }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::label('venueaddress', 'venue_address') }}
                        </td>
                        <td>
                        {{ Form::textarea('venue_address')  }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                        {{ Form::submit('add venue') }}
                        </td>
                    </tr>
                </table>
                {!! Form::close() !!}
                </div>
 

            </div>
        </div>
    </div>
</div>
@endsection
