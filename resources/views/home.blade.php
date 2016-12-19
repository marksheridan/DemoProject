@if(Auth::User()->user_type=="admin")
    @include('admin.main_admin')
@else
    @include('users.artist_profile')
@endif

