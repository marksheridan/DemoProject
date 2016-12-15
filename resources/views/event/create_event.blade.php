@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Event</div>

                <div class="panel-body">
                {!! Form::open(['url' => 'foo/bar', 'method' => 'put']) !!}
                    <table>
                    	<tr>
                    		<td>{!! Form::label('Event name:') !!}</td>
                    		<td>
                    			{!! Form::text('event_name', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Your name')) !!}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event banner:') !!}</td>
                    		<td>
                    			{!! Form::file('event_banner','',array('id'=>'event_banner','class'=>'form-control')) !!}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event city:') !!}</td>
                    		<td>
                    			{{ Form::select('event_city_id', array("Sup","Dup"), "0" , ["id"=>"event_city_id", "class"=>"event_city_id", 'placeholder' => '--select a city--']) }}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event venue:') !!}</td>
                    		<td>
                    			{{ Form::select('event_venue_id', array("Sup","Dup"), "0" , ["id"=>"event_venue_id", "class"=>"event_venue_id", 'placeholder' => '--select a venue--']) }}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event status:') !!}</td>
                    		<td>
                    			{{ Form::select('event_status', array("Open","Closed","Deleted"), "0" , ["id"=>"event_status", "class"=>"event_status", 'placeholder' => '--select a venue--']) }}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event type:') !!}</td>
                    		<td>
                    			{{ Form::select('event_type', array("Guestlist","RSVP"), "0" , ["id"=>"event_type", "class"=>"event_type", 'placeholder' => '--select a venue--']) }}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event date:') !!}</td>
                    		<td>
                    			{!! Form::date('event_date', \Carbon\Carbon::now()) !!}
                    		</td>
                    	</tr>

						<tr>
                    		<td>{!! Form::label('Event start time:') !!}</td>
                    		<td>
                    			{!! Form::time('event_start_time', \Carbon\Carbon::now()) !!}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event end time:') !!}</td>
                    		<td>
                    			{!! Form::time('event_end_time', \Carbon\Carbon::now()) !!}
                    		</td>
                    	</tr>

                    	<tr>
                    		<td>{!! Form::label('Event  time:') !!}</td>
                    		<td>
                    			{!! Form::time('event_end_time', \Carbon\Carbon::now()) !!}
                    		</td>
                    	</tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection