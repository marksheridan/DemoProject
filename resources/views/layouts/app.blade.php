<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        body {
            font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

        }

        .fa-btn {
            margin-right: 6px;
        }
        #nav{
          background-color: #E7EEF1; 
        }
        
         .Button{
  border-radius:16px;
  background: #3686D4;
  padding:6px 20px;
  padding-top:8px;
  outline:none;
  color:#fff;
  text-transform: uppercase;
  font-size: 14px;
  font-family: 'Varela Round', sans-serif;
  border: 2px solid #48B4F2;
}

  select {
position: relative;
}
#event_city_id{
  -webkit-appearance:none;
  background-color:#F0E6E6;
  border: none; 
 
 color: #150101;
 -webkit-border-radius: none;
 border-radius: 0px;
 font-size: 12px;
 padding: 15px;
 width: 40%;
 cursor: pointer;

 background: #E7EEF1 url("/images/ic_expand_down.png") no-repeat right center;
 background-size: 20px 20px; 
}
.form-control{
  text-align: center;
}
#clu{
  color: #C50707;
}
#clul{
  color: #12599D;
}

    </style>
</head>
<body id="secondapp-layout">
    <nav class="navbar navbar-default navbar-static-top"id="nav">
       
<div class="container-fluid text-centxser hidden-"></div>
       <div class="container-fluid"> 
           
            <div class="row">
            <div class="col-md-3 col-xs-6">
              

     
            
        <h5><strong>    {{ Form::select('event_city_id', $cities, "0" , ["id"=>"event_city_id", "class"=>"event_city_id", 'placeholder'=>"ALL CITIES"]) }}

         </h5></strong>

            </div>
            
            <div class="col-md-6 hidden-xs text-center">
                <a href="{{url('/') }}">
                    <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                </a>
            </div>
            
            <div class="col-md-3 col-xs-7 text-right">
                <a href="{{url('/search') }}">
                    <img src="/images/ic_action_search.png" width="32">
                </a>
                @if(Auth::guest())
                    <a href="{{url('/login') }}">
     
                        <button type="submit" class="Button" align="center">
                            Login
                        </button>
                    </a>
                @else
                    <a href="{{url('/logout') }}">
     
                        <button type="submit" class="Button" align="center">
                            Logout
                        </button>
                    </a>
                @endif
            </div>
                   <!--  <div class="modal fade" id="myModal" role="dialog">
                       <div class="modal-dialog">
                       
                         Modal content
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <div class="col-md-12 hdden-xs text-center">
                                 <a href="{{url('/home') }}">
                   
                                      <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                                      <a>
                   <br>
                   <p>!clubbers</p>
                   
                   
                                      </div>
                           </div>
                           <div class="modal-body">
                               <form method="post" action="{{ url('/storeevent') }}" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="row">
                             <div class="form-group">
                             
                                
                             
                               <div class="col-md-6">
                                 <input id="name" type="text" class="form-control" name="name" placeholder="user name">
                             </div>
                           </div>
                         </div>
                    <div class="row">
                             <div class="form-group">
                             
                                
                             
                               <div class="col-md-6 text-center">
                                 <input id="name" type="text" class="form-control" name="name" placeholder="password">
                             </div>
                           </div>
                         </div>
                   
                   
                           </div>
                           <div class="modal-footer">
                             <div class="col-md-12 text-center">
                               <button type="button" class="Button" data-dismiss="modal">Close</button>
                              <input type="submit" value="login" onclick="return validate()" data-target="#myModal2" class="Button"  data-toggle="modal"/>
                   
                             </div>
                           </div>
                         </div>
                         
                       </div>
                     </div>
                    -->
                  
                 

            <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
               
            <!-- </div> -->
         <!--  </div>
           <div> -->

                   
                   </div> 
        </div> 
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->


    <footer>
      <div class="row" style="width:960px; margin:0px auto;margin-top:32px; border-top:1px solid #2CB2E9;">
<div class="col-md-10">
<h4> About Us</h4>
<p>Clubbers is a one stop platform for party goers/socialites to not only view all the most happening parties in town but to also get themselves and their friends hassle free onto the Guest-list, RSVP or purchase tickets for the best events. 
  </p>
</div>
<div class="col-md-2">
 

                   <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                   
                     
                   </div>

</div>
<div class="row" style="width:960px; margin:0px auto;margin-top:32px; solid #2CB2E9;">
  <div class="col-md-10">
  <h4>Social</h4>
  <a href="https://www.facebook.com/">facebook || </a>
  <a href="https://twitter.com/login"> twitter ||</a>
  <a href="https://www.instagram.com/?hl=en"> instagram </a>
  <br><br><br>
  <p id="clu">With love from Bangalore</p>
  <br>
   </div>


    </footer>


</body>
</html>
