@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create B2B User</div>

                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/storeuser') }}">
                {{ csrf_field() }}
                    <table align="center">
						<tr>
							<td>
								{{ Form::label('Name') }}
							</td>
							<td>
								{{ Form::text('user_name', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Your name')) }}
							</td>
						</tr>

						<tr>
							<td>
								{{ Form::label('Type') }}
							</td>
							<td>
								{{ Form::select('user_type', array('Artist'=>'Artist','Promoter'=>'Promoter','Venue'=>'Venue'), null , ["id"=>"user_type", "class"=>"user_type", 'placeholder' => '--select user type--']) }}
							</td>
						</tr>

						<tr>
							<td>
								{{ Form::label('E-Mail Address') }}
							</td>
							<td>
								{{ Form::text('user_email', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Your email')) }}
							</td>
						</tr>
						
						<tr>
							<td>
								{{ Form::label('Mobile No') }}
							</td>
							<td>
								{{ Form::text('user_phone_no', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Your mobile no')) }}
							</td>
						</tr>

						<tr>
							<td>
								{{ Form::label('City') }}
							</td>
							<td>
								{{ Form::select('user_city', array('city'=>'City'),null , ["id"=>"user_city", "class"=>"user_city", 'placeholder' => '--select a city--']) }}
							</td>
						</tr>

						<tr>
							<td>
								{{ Form::label('Password') }}
							</td>
							<td>
								{{ Form::password('user_password', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Your password')) }}
							</td>
						</tr>

						<tr>
							<td>
								{{ Form::label('Confirm Password') }}
							</td>
							<td>
								{{ Form::password('confirm_password', null, 
        								array('required', 
              							'class'=>'form-control', 
              							'placeholder'=>'Confirm Password')) }}
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<button type="submit" class="btn btn-primary">
                                    </i> Register
                                </button>
								<!-- {{ Form::button('Register') }}		 -->
							</td>
						</tr>

					</table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection