<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
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


    </style>
</head>
<body id="secondapp-layout">
    <nav class="navbar navbar-default navbar-static-top">
       
<div class="container-fluid text-centxser hidden-"></div>
       <div class="container-fluid"> 
           
            <div class="row">
            <div class="col-md-3 col-xs-5">

            <select dir class="selectpicker"><br>
                                <option>bangalore</option>
                                <option>goa</option>
                                <option>mumbai</option>
                            </select>
             </div>
             <div class="col-md-6 hidden-xs text-center">
              <a href="{{url('/home') }}">

                   <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                   <a>
                    <br>
                    <p>!clubbers</p>


                   </div>
                   <div class="col-md-3 col-xs-7 text-right">

                    <a href="{{url('/home') }}">

                   <img src="/images/ic_action_search.png" width="32">
                   <a>
                   

  <a href="{{ url('/login') }}">
                     <button type="submit" class="Button" align="center">
                        Login
                     </button>
                    </a>
                  
                 

            <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
               
            </div>
          </div>
            <div>

                    <a href="{{url('/home') }}">

                   <img src="file:///var/www/html/clubbers/DemoProject/public/images/ic_bottom_search.png" width="32">
                   <a>
                   </div> 
        </div> 
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


    <footer>
      <div class="row" style="width:960px; margin:0px auto;margin-top:32px; border-top:1px solid #2CB2E9;">

<p> clubbers</p>
</div>


    </footer>


</body>
</html>
