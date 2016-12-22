@extends('layouts.admin')

@section('content')
<style>
th{
    text-align: center;
} 
td{
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
                   <h4><strong>  SHOW VENUE</strong> </h4>
                <div class="panel-body">
                        

                    <table class="table">
                        <thead>
                        <tr>
                            <div class= "col-md-1">
                            <th>Venue Id</th>
                        </div>
                        <div class="col-md-2">
                            <th>Venue Name</th>
                            </div>
                        <div class="col-md-2">
                            <th>Venue Phone No</th>
                        </div>
                        <div class="col-md-1">
                            <th>Venue Category</th>
                        </div>
                       
                        <div class="col-md-4">
                            <th>Venue Address</th>
                           

                        </div>
                        <div class="col-md-1">
                            <th>Edit</th>
                        </div>
                        <div class="col-md-1">
                            <th>Delete</th>
                             </div>
                        </tr>
                    </thead>
                            <tr>
                             @foreach($ven as $vv)

                            <div class= "col-md-1">
                                <td>
                                 {{ $vv->venue_id}}    

                                     </td>
                                 </div>
                                 <div class= "col-md-2">
                                <td>
                                 {{ $vv->venue_name}}  
                                     </td>
                                 </div>
                                 <div class= "col-md-2">
                                <td> 
                                    {{ $vv->venue_phone_no}} 
                                     </td>
                                 </div>
                                 <div class= "col-md-2">
                                <td>
                                 {{ $vv->venue_category}}  
                             </td>
                         </div>
                         <div class= "col-md-4">
                                <td> 
                                    {{ $vv->venue_address }}  
                                </td>
                            </div>
                              <div class= "col-md-1">
                               
                                <td>
                                    <a href="{{ url('editvenue/'. $vv->venue_id) }}">
                                   
                                    <img src="/images/update.jpg" width="20px">

                                    </a>
                                    
                                </td>
                            </div>
                            <div class= "col-md-1">
                                <td>
                                    
                                         <img src="/images/logo_1_2.png" width="20px"onclick="ConfirmDelete($vv->venue_id)">
                                         <script type="text/javascript">
                              function ConfirmDelete(num)
                              {
                                 var ans=confirm("Are you sure you want to delete?");
                                 if(ans==true)
                                 {
                                       window.location.href="/deletevenue/"+num;
                                 }
                              }
                           </script>

                                    
                                </td>
                            </div>
                            </tr>
                                @endforeach
                    </table>                    
    
                 </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
