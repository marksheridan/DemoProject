<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

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
/* background-image:url(../images/arrow.png); */
background: #DEE3E8;
background-repeat:no-repeat;
background-position:300px;
width:150px;
height:50px; 
padding:15px;
/* margin-top:15px; */
font-family:Cursive;
line-height:1;
/* border-radius:0px; */
background-color:#E0EAEC;
color:#2276ED;
font-size:15px;
-webkit-appearance:none;
/* box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6); */
outline:none
}

    </style>
</head>
<body id="secondapp-layout">
    <nav class="navbar navbar-default navbar-static-top">
       <div class="container-fluid"> 
           <!--  <div class="navbar-header">
            
               Collapsed Hamburger
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                   <span class="sr-only">Toggle Navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
           
           
               
               Branding Image
               <a class="navbar-brand" href="{{ url('/') }}">
                   Laravel
               </a>
           
            </div> -->
            <div class="row">
                <div class="col-md-5">
                    <a href="{{url('/home') }}">

                   <img src="/images/Olympic-logo.png" width="77">
                   <a>
                        
                   </div>
            <div class="col-md-2 col-xs-5">

            <select dir class="selectpicker"><br>
                                <option>Clubbers</option>
                                
                            </select>
             </div>


             <div class="col-md-1">
                   <a href="{{url('/home') }}">
                    <p>CONTROL PANEL</p>



          </div>
 <div class="col-md-1 col-xs-5">

            <select dir class="B2B"><br>
                                <option>B2B<option>
                                    <option>profile<option>
                                        <option>profile<option>
                                
                            </select>
             </div>

             <div class="col-md-2 col-xs-5">

            <select dir class="venues"><br>
                                <option>Venues<option>
                                    <option>profile<option>
                                        <option>profile<option>
                                
                            </select>
             </div>
             <div class="col-md-1">
                   <a href="{{url('/home') }}">
                    <p>LOG OUT</p>



          </div>

          
        </div> 
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


</body>
</html>
