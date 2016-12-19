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
        #navuser{
          background-color: #A8B8F3;

        }
        #footer{
          background-color: #A8B8F3;

        }
       
    </style>
     <body id="secondapp-layout">
        <nav class="navbar navbar-default navbar-static-top"id="navuser">
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


               			<a href="{{url('/usereventlist') }}">

                  			 <img src="/images/house-logo-hi.png" width="50">
                		 <a>
                		

                		 <a href="{{url('/userprofile') }}">

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

        <footer>
          <div class="container">

            <div class="nav">
             
              <div class="row"style="width:960px; margin:0px auto;margin-top:32px; border-top:1px solid #2CB2E9;">
                <div class="col-md-4">
                <a href="{{url('/home') }}">
                  <p> TERMS AND CONDITIONS </P>
                </a>
                 <a href="{{url('/home') }}">
                  <p> ABOUT US </P>
                </a>
                </div>

              </div>
           
          </div>
        </footer>

   
    
    
    </body>
</html>
