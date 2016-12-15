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
            overflow-y: scroll;
            overflow-x: hidden;

        }

        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: #12131A;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #24D0F3;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
        #secondapp-layout{
          font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

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

                 <li class="dropdown">
    <a href="#" class="dropbtn">Clubbers</a>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      
    </div>
  </li>
             </div>


             <div class="col-md-1">
                   <a href="{{url('/home') }}">
                        <p>CONTROL PANEL</p>
                    </a>



            </div>
        <div class="col-md-1 col-xs-5">


                 <li class="dropdown">
    <a href="#" class="dropbtn">B2B</a>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">Analytic</a>
      <a href="/register">Add B2B</a>
      
    </div>
  </li>

          
        </div>

             <div class="col-md-2 col-xs-5">


               <li class="dropdown">
    <a href="#" class="dropbtn">Venue</a>
    <div class="dropdown-content">
      <a href="{{url('/showvenue') }}">Show Venues</a>
      <a href="{{url('/showcity') }}">Show Cities</a>
      <a href="{{url('/createvenue') }}">Add Venue</a>
      <a href="{{url('/createcity') }}">Add City</a>
      
    </div>
  </li>

                
             </div>
        <div class="col-md-1">
            <a href="{{url('/logout') }}">
                <p>LOG OUT</p>
            </a>



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
