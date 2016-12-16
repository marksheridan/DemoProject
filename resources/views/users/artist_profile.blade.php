@extends('layouts.user')

@section('content')
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 


 <div class="container">
 	<div class="row">
 		<div class="col-md-12" style: align="center">
 			 <img src="/images/mountains1.jpg" width="900">
        </div>
   			<br><br>

   			 <div class="jumbotron">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
               

                <div class="panel-heading text-center">
                
                </div>
                <div class="panel-body"> 
              <form>

            <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        <label>
                        	contact person
                        </label>
                        </div>
                        <div class="col-md-8">
                      <input id="contact_name" type="text" class="form-control" name="venue_name" placeholder="Name"required>
                    </div>
                </div>
            </div>
                    <br>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        <label>
                        	PhoneNo
                        </label>
                        </div>
                        <div class="col-md-8">
                         <input id="email" type="email" class="form-control" name="phone_no" placeholder="Eg:9999999999"required>

                   </div>
               </div>
           </div>
                  <br>
                   <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                        <label>
                        	Email address
                        </label>
                        </div>
                        <div class="col-md-8">
                        <input id="venue_category" type="email" class="form-control" name="venue_category" placeholder="Venue Category Name"required>
                  </div>
              </div>
          </div>
                  
                  <div class="row">
                            <div class="col-md-5">
                            </div>
                        <div class="form-group">

                           <button type="submit" class="btn btn-primary" align="center" onclick="return validate()">
                            Add</button>
                       


                 </div>
              

                </div>
 
              </form>
            </div>
        </div>
    </div>
</div>
              

    </div>
 </div>       



@endsection