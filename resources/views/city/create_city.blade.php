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
                <div class="panel-heading">Create City</div>

                <div class="panel-body">
                    Add city 

                     {{Form::open(['url' => '/storecity', 'method' => 'post']) }}

                    <table>
                        <tr>
                            <td>
                            {{ Form::label('cityname', 'City Name') }}
                            </td>

                            <td>
                            {{ Form::text('city_name')  }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                           {{ Form::label('citystatus', 'City Status') }}
                            </td>

                            <td>
                                {{ Form::select('city_status', ['active' => 'Active', 'inactive' => 'In Active'], null, ['class' =>'city_status','id' =>'city_status', 'placeholder' => 'Pick a Status']) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                           {{ Form::label('citytier', 'City tier') }}
                            </td>

                            <td>
                                {{ Form::select('city_tier', ['1' => '1','2' => '2' ], null, ['placeholder' => 'Pick a Tier']) }}
                            </td>
                        </tr>
                        <tr>
                            <td>

                            {{ Form::submit('add city') }}
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
