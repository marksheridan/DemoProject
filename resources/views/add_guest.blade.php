 @extends('layouts.app')

@section('content')
<!-- @if(count($errors) > 0)

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
@endif   -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    Add guest

                     {{Form::open(['url' => '/storeguest', 'method' => 'post']) }}

                    <table>
                        <tr>
                            <td>
                            {{ Form::label('guestname', 'Guest Name') }}
                            </td>

                            <td>
                            {{ Form::text('guest_name')  }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                           {{ Form::label('guest_phone_no', 'guest phone number') }}
                            </td>

                            <td>
                                {{ Form::text('guest_phone_no')  }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                           {{ Form::label('guest_email_id', 'Guest Email Id') }}
                            </td>

                            <td>
                           {{ Form::text('guest_email')  }}           
                            </td>
                        </tr>
                        <tr>
                           <td>
                        Total no. of couples
                        </td>
                        <td>
                        <select name="no_of_couples" id="noc">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                        </select>
      
                        </td>
            
                        </tr>

                        <tr>
                            <td>

                            {{ Form::submit(' book ') }}
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
