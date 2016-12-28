<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> 
   
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    --> <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
     -->   
   
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       -->   <!-- {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
       
        -->   

   <!-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
   <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
   <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
 -->



</head>


	<style>
        body {
            font-family: 'Lato';
            overflow-y: scroll;
            overflow-x: hidden;

        }
        #navuser{
          background-color: #E4E4E4;

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
          <br>
            <div class="container-fluid"> 
               <div class="row">
                <div class="col-md-9">
                    <a href="{{url('/home') }}">

                        <img src="/images/Lamborghini_mit_Stier_logo.svg.png" width="200" height="90">
                    <a>
                        
                </div>
                    <div class="col-md-3">
               			<a data-toggle="modal" data-target="#myModal">

                       		 <img src="/images/64579-add-button.png" width="44">
                    	<a>




               			<a href="{{url('/usereventlist') }}">

                  			 <img src="/images/userhome.png" width="44">
                		 <a>
                		

                		 <a href="{{url('/userprofile') }}">

                   			<img src="/images/profile.png" width="50">
                		 <a>
                 		
                 		 <a href="{{url('/logout') }}">

                  			 <img src="/images/logout.png" width="44">
                         <a>
           	
                   
  
    

     
           
         		</div> 
         </div> 
     </nav>

    @yield('content')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


        <footer>
          <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script>
                $(function() {
                $( "#event_date" ).datepicker();
                });
        </script>
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
