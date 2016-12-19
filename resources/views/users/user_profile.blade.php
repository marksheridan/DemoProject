@extends('layouts.user')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <div>
  	<img src="/images/mountains1.jpg" width="1300"height="400">
  </div><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="jumbotron">
				<p> clubbers</p>
				<textarea> text </textarea>
			</div>
		</div>	
		<div Class="col-md-4">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-5">
						<label> contact person</label>
					</div>
					<div class="col-md-5">
						<input type="text" name="user_name" id="user_name" palceholder="name">
                 	</div>
		 		</div><br><br>
		 		<div class="row">
		 			<div class="col-md-5">
						<label>Email</label>
					</div>
					<div class="col-md-5">	
						<input type="text" name="user_name" id="user_name" palceholder="name">
                	</div>
		 		</div><br><br><br>
		 		<div class="row">
		 			<div class="col-md-5">
						<label> Phone Number</label>
					</div>
			     	<div class="col-md-5">
						<input type="text" name="user_name" id="user_name" palceholder="name">
                 	</div>
		 		</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-5">
						<label> Select sity</label>

					</div>
					<div class="col-md-5">
                    	<select name="city" class="city"id="city">
								<option>Bangalore</option>
								<option>Thiruvanabthapuram</option>
								<option>Kozhikode</option>
								<option>Kochi</option>
							</select>
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
                    	<input type="password" name="update_password" id="update_password" palceholder="password">
                 	</div>
					</div>
				</div>	
			</div>
		</div>
	</div>	
</div>
  </div>









@endsection
