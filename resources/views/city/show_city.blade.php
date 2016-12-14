@extends('layouts.admin')

@section('content')
<style>
th,td{
    text-align: center;
}
 h4{
            color: #3989AE;
    }

</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
                <div class="panel-heading text-center">
                   <h4><strong>  SHOW CITY</strong> </h4>
                <div class="panel-body">
                    

                    <table class="table">
                        
                            <thead>
                                <tr>
                                    <div class="col-md-1">
                                        <th>City Id</th>
                                    </div> 
                                      <div class="col-md-3">   
                                        <th>City Name</th>
                                    </div>
                                  <div class="col-md-2">
                            <th>City Status</th>
                        </div>
                        <div class="col-md-1">
                            <th>City Tier</th>
                        </div>
                        <div class="col-md-1">
                            <th>Created By</th>
                        </div>
                            <div class="col-md-2">
                            <th>Edit</th>
                        </div>
                        <div class="col-md-2">
                            <th>Delete</th>
                        </div>
                              </tr>
                           </thead>

                     @foreach($city as $cc)
                                <tr>
                                    <div class="col-md-1">
                                <td>
                                    {{ $cc->city_id}}
                                </td>
                            </div>
                            <div class="col-md-3">
                                <td>
                                    {{ $cc->city_name}}
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    {{ $cc->city_status}}
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    {{ $cc->city_tier}}
                                </td>
                            </div>
                            <div class="col-md-1">
                                <td>
                                    {{ $cc->created_by}}
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    <a href="{{ url('editcity/'. $cc->city_id) }}">

                                  <img src="/images/update.jpg" width="20px">
                                    </a>
                                    
                                </td>
                            </div>
                            <div class="col-md-2">
                                <td>
                                    <a href="{{ url('deletecity/'. $cc->city_id) }}">

                                     <img src="/images/logo_1_2.png" width="20px">
                                    </a>
                                </td>
                            </div>
                                @endforeach
                            
                       </tr>
                    </table>                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
