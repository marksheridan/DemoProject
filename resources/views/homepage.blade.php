@if(Auth::guest())

@include('welcome')	

@else

	@if(Auth::User()->user_type=="admin")
		@include('admin.main_admin')
	@else

		@include('welcome')
	@endif

@endif