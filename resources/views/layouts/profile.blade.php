<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        body {
            font-family: 'Lato';
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
       
       <div class="container-fluid"> 
           
            <div class="row">

            <div class="col-md-3 col-xs-5">
               <a href="{{url('/userprofile') }}">

                   <img src="/images/back.button.jpg" width="35">
                   <a>

            
             </div>
             <div class="col-md-6 text-center">
             

                   <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                  
                    <br>
                    <p>!clubbers</p>


                </div>
                   <div class="col-md-2 col-xs-7 text-right">

                    <a href="{{url('/search') }}">

                   <img src="/images/ic_action_search.png" width="32">
                   </a>

                  </div>
                  <div class="col-md-1">
                  
                       <li class="dropdown">
                        <a href="#" class="dropbtn">
                           <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg"class="img-rounded" width="32">
                        </a>
                          <div class="dropdown-content">
                            <a href="#">Profile</a>
                             <a href="#">Terms And Policy</a>
                              <a href="/register">logout</a>
                        </li>
                      
  
                    </div>     
                  </div>

                    

              
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
<div class="col-md-10">
<h4> About Us</h4>
<p>Clubbers is a one stop platform for party goers/socialites to not only view all the most happening parties in town but to also get themselves and their friends hassle free onto the Guest-list, RSVP or purchase tickets for the best events. 
  </p>
</div>
<div class="col-md-2">
 <a href="{{url('/') }}">

                   <img src="/images/1014d3e2908092bb2deb3c54dc16ae42.jpg" width="44">
                   </a>
                     
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
