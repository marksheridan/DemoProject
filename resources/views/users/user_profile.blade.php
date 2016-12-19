@extends('layouts.user')

@section('content')
<style>
#dev{
	text-align: "center";
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <div class="col-md-12 text-center">
  	<img src="{{ url('images').'/'. $usr->user_img }}" width="400"height="400" id="dev" align="center">
  </div><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="jumbotron">
				<p> clubbers</p>
				<textarea> text </textarea>
			</div>
		</div>	
		{{Form::open(['url' => ['updateprofile/'.$usr->id], 'method' => 'post']) }}
		<div Class="col-md-4">
			<div class="jumbotron">

				<div class="row">
					<div class="col-md-5">
						<label> contact person</label>
					</div>
					<div class="col-md-5">
						<input type="text" name="user_name" id="user_name" palceholder="name" value="{{ $usr->user_name }}">
                 	</div>
		 		</div><br><br>
		 		<div class="row">
		 			<div class="col-md-5">
						<label>Email</label>
					</div>
					<div class="col-md-5">	
						<input type="text" name="user_email" id="user_email" palceholder="" value="{{ $usr->user_email}}" >
                	</div>
		 		</div><br><br><br>
		 		<div class="row">
		 			<div class="col-md-5">
						<label> Phone Number</label>
					</div>
			     	<div class="col-md-5">
						<input type="text" name="user_phone_no" id="user_phone_no" palceholder="" value="{{ $usr->user_phone_no}}">
                 	</div>
		 		</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-5">
						<label> Select City</label>

					</div>
					<div class="col-md-5">
                    	<!-- <select name="city" class="city"id="city">
								<option>Bangalore</option>
								<option>Thiruvanabthapuram</option>
								<option>Kozhikode</option>
								<option>Kochi</option>
							</select> -->
							{{ Form::select('user_city', $city, $usr->user_city , 
							["id"=>"user_city", "class"=>"user_city"]) }}
					</div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-5">
						<label> Update password</label>

					</div>
					<div class="col-md-5">
                    	<input type="password" name="password" id="password" palceholder="password">
                 	</div>
					</div>
					<div class="row">
					<div class="col-md-5">
						<label>choose picture</label>

					</div>
					<div class="col-md-5">
                    	<input type="file" name="user_img" id="user_img" palceholder="image">

                  <script type="text/javascript">
                     function readURL(input) {
                        if (input.files && input.files[0]) {
                           var reader = new FileReader();
                           reader.onload = function (e) {
                              $('#dev').attr('src', e.target.result);
                           }
                           reader.readAsDataURL(input.files[0]);
                        }
                     }
                     $("#user_img").change(function(){
                        alert("CHANGED");
                        readURL(this);
                     });
                  </script>
                 	</div>
					</div>
				</div>	
			</div>
			<div class="row">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-5">
						<!-- <a href="{{ url('/updateprofile/'.$usr->id) }}">
 -->							 <button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
                            UPDATE </button>
                        </a>

					</div>
					{{ Form::close() }}
			
					<div class="col-md-5">
                    	<a href="{{url('/artistprofile') }}">
                    		 <button type="button" class="btn btn-primary" align="center" onclick="return validate()">
                            VIEW YOUR PROFILE</button>
                        </a>
                 	</div>
					</div>
				</div>	
			</div>
		</div>
	</div>	
</div>
  </div>









@endsection
