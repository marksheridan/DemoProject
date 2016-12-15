@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               
                <div class="panel-body">
                    Show Venue

                    <table>
                        <tr>
                            <th>Venue Id</th>
                            <th>Venue Name</th>
                            <th>Venue Phone No</th>
                            <th>Venue Category</th>
                            <th>User_id</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Venue City</th>
                            <th>Venue Cover Image</th>
                            <th>Venue Status</th>
                            <th>Venue Card</th>
                            <th>Venue Parking</th>
                            <th>Venue Seats</th>
                            <th>Venue Smoking</th>
                            <th>Venue Address</th>
                            <th>Created By</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                            <tr>
                             @foreach($ven as $vv)


                                <td> {{ $vv->venue_id}}        </td>
                                <td> {{ $vv->venue_name}}      </td>
                                <td> {{ $vv->venue_phone_no}}  </td>
                                <td> {{ $vv->venue_category}}  </td>
                                <td> {{ $vv->user_id}}         </td>
                                <td> {{ $vv->latitude}}        </td>
                                <td> {{ $vv->longitude}}       </td>
                                <td> {{ $vv->city_name}}      </td>
                                <td> {{ $vv->venue_cover_img}} </td>
                                <td> {{ $vv->venue_status }}   </td>
                                <td> {{ $vv->venue_card }}     </td>
                                <td> {{ $vv->venue_parking }}  </td>
                                <td> {{ $vv->venue_seats }}    </td>
                                <td> {{ $vv->venue_smoking }}  </td>
                                <td> {{ $vv->venue_address }}  </td>


                                <td>
                                    <a href="{{ url('editvenue/'. $vv->venue_id) }}">update</a>
                                    
                                </td>
                                <td>
                                    <a href="{{ url('deletevenue/'. $vv->venue_id) }}">delete</a>
                                </td>
                            </tr>
                                @endforeach
                    </table>                    
                </div>
@endsection
