<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


	<style>
        body {
            font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

        }
        #navuser{
          background-color: #5B5B6A;

        }
        #footer{
          background-color: #A8B8F3;

        }
        #modal-content{
          background-color: #484755;
        }
        #modalheader{
         background-color:  #9A0202;
         color: #FCF4F4;
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
               			<a data-toggle="modal" data-target="#myModal">

                       		 <img src="/images/64579-add-button.png" width="50">
                    	<a>




               			<a href="{{url('/usereventlist') }}">

                  			 <img src="/images/house-logo-hi.png" width="50">
                		 <a>
                		

                		 <a href="{{url('/userprofile') }}">

                   			<img src="/images/web-user.jpg" width="50">
                		 <a>
                 		
                 		 <a href="{{url('/logout') }}">

                  			 <img src="/images/gnome_panel_force_quit.png" width="50">
                         <a>
           	
                   
  
    

     
           
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

   </div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"id="modalheader">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD AN EVENT</h4>
            </div>
            
            <div class="modal-body"id="modalbody">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{url('/addevent/rsvp') }}">
                            <img src="/images/ic_pin.png" width="50"><br>
                            RSVP
                        </a>
                    </div> 
                    <div class="col-md-4">
                        <a href="{{url('/addevent/guest') }}">
                            <img src="/images/Guestlist_CirclePurple_300dpi.png" width="50"><br>
                        GUESTLIST 
                        </a>                          
                    </div> 
                    <div class="col-md-4">
                        <a href="{{url('/') }}">
                            <img src="/images/Internet-Data-Network-Ticket-Home-Furnishings-Furniture-3186173011.png" width="50"><br>
                            TICKETS
                        </a>                                   
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>
                                                                           
                            <!--         </div> 
                                                             </div> 
                                                        </div>
                                                       
                                                      </div>
                                  
                                                  </div>
                                                </div> -->

    
    
    </body>
</html>
