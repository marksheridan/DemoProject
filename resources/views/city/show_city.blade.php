@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               
                <div class="panel-body">
                    Show city 

                    <table>
                        <tr>
                            <th>City Id</th>
                            <th>City Name</th>
                            <th>City Status</th>
                            <th>City Tier</th>
                            <th>Created By</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                            <tr>
                             @foreach($city as $cc)


                                <td>
                                    {{ $cc->city_id}}
                                </td>
                                <td>
                                    {{ $cc->city_name}}
                                </td>
                                <td>
                                    {{ $cc->city_status}}
                                </td>
                                <td>
                                    {{ $cc->city_tier}}
                                </td>
                                <td>
                                    {{ $cc->created_by}}
                                </td>
                                <td>
                                    <a href="{{ url('editcity/'. $cc->city_id) }}">update</a>
                                    
                                </td>
                                <td>
                                    <a href="{{ url('deletecity/'. $cc->city_id) }}">delete</a>
                                </td>
                            </tr>
                                @endforeach
                    </table>                    
                </div>
@endsection
