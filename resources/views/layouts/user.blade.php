<!DOCTYPE html>
<html lang="en">
<head>
	



</head>


	<style>
        body {
            font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

        }
       
    </style>
     <body id="secondapp-layout">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid"> 
               <div class="row">
                <div class="col-md-9">
                    <a href="{{url('/home') }}">

                        <img src="/images/Lamborghini_mit_Stier_logo.svg.png" width="200" height="90">
                    <a>
                        
                </div>
                    <div class="col-md-3">
               			<a href="{{url('/home') }}">

                       		 <img src="/images/64579-add-button.png" width="50">
                    	<a>


               			<a href="{{url('/home') }}">

                  			 <img src="/images/house-logo-hi.png" width="50">
                		 <a>
                		

                		 <a href="{{url('/home') }}">

                   			<img src="/images/web-user.jpg" width="50">
                		 <a>
                 		
                 		 <a href="{{url('/home') }}">

                  			 <img src="/images/gnome_panel_force_quit.png" width="50">
                         <a>
           	
                   </div>
    

     
           
         		</div> 
         </div> 
     </nav>

    @yield('content')

    <!-- JavaScripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    
     --></body>
</html>
