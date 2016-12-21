@extends('layouts.user')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
	jumbotron{
		background-color: #404EDD;
	}
	#users{
		background-color: #0D0D1A;
	}
	#cover{
		background-color: #6FACC3;
	}
  img{
    border-radius: 70px;
  }
    #guser{
        background-color: #A02335;
        height: 17px;
    }
    #btn-primary{
        width: 1000px
    }
    #event_year{
        width:50px;
    }
     #event_day{
        width:50px;
    }
     #event_month{
        width:50px;
    }
    #time{
        width:50px;
    }
     #stime{
        width:50px;
    }
     #sevent_min{
        width:50px;
    }
    #sevent_hour{
        width:50px;
    }
    #cevent_min{
        width:50px;
    }
    #cevent_hour{
        width:50px;
    }
     #eevent_hour{
        width:50px;
    }
    #eevent_min{
        width:50px;
    }
    #event_glimit{
        width:100px;
    }
          
       
 </style>

 <script type="text/javascript">
  function validate()
  {
    var ENameTB = document.getElementById("event_name");
    var enamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!enamefilter.test(ENameTB.value))
    {
      alert("EVENT NAME IS NOT VALID");
      return false;
    }


    var e = document.getElementById("event_day");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID DAY");
return false;
}
 var e = document.getElementById("event_day");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID DAY");
return false;
}

var e = document.getElementById("event_month");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID MONTH");
return false;
}


var e = document.getElementById("event_year");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID YEAR");
return false;
}

var e = document.getElementById("sevent_hour");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID START TIME");
return false;
}

var e = document.getElementById("eevent_hour");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID END TIME");
return false;
}

var e = document.getElementById("cevent_hour");
var strUser = e.options[e.selectedIndex].value;

var strUser1 = e.options[e.selectedIndex].text;
if(strUser==0)
{
alert("INVALID CLOSE TIME");
return false;
}

var starteventele = document.getElementById("sevent_hour");
var strStartEventUser = starteventele.options[starteventele.selectedIndex].value;

var endeventele = document.getElementById("eevent_hour");
var strEndEventUser = endeventele.options[endeventele.selectedIndex].value;

var closeeventele = document.getElementById("cevent_hour");
var strCloseEventUser = closeeventele.options[closeeventele.selectedIndex].value;

var starttimeele = document.getElementById("stime");
var strStartTime = starttimeele.options[starttimeele.selectedIndex].value;

var endtimeele = document.getElementById("etime");
var strEndTime = endtimeele.options[endtimeele.selectedIndex].value;

var closetimeele = document.getElementById("ctime");
var strCloseTime = closetimeele.options[closetimeele.selectedIndex].value;

if ( strStartEventUser > strEndEventUser && strStartTime == strEndTime)
    {
        alert("Start Time shoul be earlier than end time");
    }

if ( strCloseEventUser < strStartEventUser || strCloseEventUser > strEndEventUser && strEndTime == strCloseTime )
    {
        alert("Close time should be inbetween start and end time");
    }



        
         var GlimitTB = document.getElementById("event_glimit").value;
         /*var photofilter= new RegExp("^[a-zA-Z\ ]+$","g");*/
      if(GlimitTB == '')
        {
          alert("gustlimit field is empty.");
          return false;
        }


         var EANameTB = document.getElementById("artist_name");
    var eanamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!eanamefilter.test(EANameTB.value))
    {
      alert("ARTIST NAME IS NOT VALID");
      return false;
    }

     var EPNameTB = document.getElementById("promoter_name");
    var epnamefilter= new RegExp("^[a-zA-Z\ ]+$","g");
    if(!epnamefilter.test(EPNameTB.value))
    {
      alert("PROMOTER NAME IS NOT VALID");
      return false;
    }

}
</script>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12" style: align="center">
            <div class="jumbotron" id="cover"> -->
            <div>
 			 <img src="/images/thaikkudam-bridge.jpg" width="1300"height="400">
        	</div><br>
<div class="container">
   <form method="post">
    <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-2">
                        <label>Event Name</label>
                    </div>
                        
                    <div class="col-md-5">
                        <input type="text"placeholder="EG thaikkudam bridge" id="event_name">  
                    </div>

                </div><br><br>
                <div class="row">
                    <div class="col-md-2">
                        <label>Date</label>
                    </div>
                    <div class="col-md-3">
                      <select name="event_day"id="event_day">
                                <option value="0">0</option> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                              </select>
                    </div> 
                    <div class="col-md-3">
                        <select name="event_month" id="event_month">
                                <option value="0">0</option> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                
                              </select>
                    </div> 
                    <div class="col-md-1">
                       <select name="event_year" id="event_year">
                                 <option value="0">0000</option>
                                 <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                </select>
                    </div>   
                    
                </div><br>
                  <div class="row">
                    <div class="col-md-2">
                        <label>Start Time</label>
                    </div>
                    <div class="col-md-3">
                       <select name="sevent_hour"id="sevent_hour">
                               <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                    </div> 
                    <div class="col-md-3">
                      <select name="sevent_min" id="sevent_min">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                              </select>
                    </div> 
                    <div class="col-md-3">
                       <select name="stime" class="ampm"id="stime">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div>   
                    
                </div>  
                <div class="row">
                    <div class="col-md-2">
                        <label>End Time</label>
                    </div>
                    <div class="col-md-3">
                       <select name="eevent_hour"id="eevent_hour">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                    </div> 
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="eevent_min">
                                 <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                


                                
                            </select>
                    </div> 
                    <div class="col-md-3">
                       <select name="etime" class="ampm"id="etime">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div>   
                    
                </div>
                 <div class="row">
                    <div class="col-md-2">
                        <label>Guestlist close Time</label>
                    </div>
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="cevent_hour">
                               <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                    </div> 
                    <div class="col-md-3">
                       <select name="time" class="ampm"id="cevent_min">
                                 <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                


                                
                            </select>
                    </div> 
                    <div class="col-md-3">
                       <select name="ctime" class="ampm"id="ctime">
                                <option>am</option>
                                <option>pm</option>
                                
                            </select>
                    </div> <br><br><br>
                    <div class="row">
                        <div class="col-md-8">
                            <textarea maxlength="500"col="70"rows="5">When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. </textarea>
                        </div>   
                    </div>  
                    
                </div>
                
            </div>  

        </div>
         <div class="col-md-4">
            
            <div class="jumbotron"id="users">
                <div class="row">
                   
                     <div class="col-md-6">
                        </label> Guest limit</label>
                    </div>
                        
                    <div class="col-md-6">
                         <input type="number"placeholder="EG 05"id="event_glimit"min="1" max="500"required>
                    </div>

                </div><br><br>
                <div class="row">
                    <textarea maxlength="500"col="60"rows="5">When you wish to run the Vagrant commands, 
                                just open up a command line in your Homestearol
                             over where the VM itself is created unless you s
                             tart editing and customising the scripts. 
                    </textarea>


                </div>    
            </div> 
            <div class="jumbotron"id="users">
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING ARTIST</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text"placeholder="artist"id="artist_name">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>SUPPORTING PROMOTERS</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text"placeholder="promoter"id="promoter_name">
                    </div>     
                </div>  
            </div>     

        </div>
        <div class="col-md-4">
            <div class="jumbotron" id="users">
                <div class="row">   
                    <div class="col-md-5">
                        <label> Select city</label>
                    </div>
                    <div class="col-md-5">
                        <select name="time" class="city">
                                <option>Bangalore</option>
                                <option>Kochi</option>
                                 <option>Mumbai</option>
                                
                            </select>
                    </div>    
                </div><br>
                <div class="row">    
                        
                   <div class="col-md-5">
                        <label> Select venue</label>
                    </div>
                    <div class="col-md-5">
                        <select name="time" class="venue">
                                <option>paradaise</option>
                                <option>citybar</option>
                                 <option>baar</option>
                                
                            </select>
                    </div>    
                    </div>

                </div><br><br>
                <div class="jumbotrone"id="users">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br><br>
                            <button type="button" class="btn btn-primary" align="center" onclick="return validate()">
                            UPDATE GUESTLIST EVENT</button>
                            <br><br>
                        </div>    
                    </div>    
                </div>    
            </div>
            </form>
        </div>        
     



    </div>            

	

	



</div>






@endsection