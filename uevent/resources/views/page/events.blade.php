@include('page.header');
{!!HTML::script('http://maps.googleapis.com/maps/api/js')!!}
<script>
var myCenter=new google.maps.LatLng(45.434046,12.340284);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var map=new google.maps.Map(document.getElementById("googleMap1"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<body>
<div class="fluid-container landing_page_frst_container">
<div class="col-sm-12">
<center>

<div class="fa fa-child fontowsm" id="child" aria-hidden="true" ></div>
<h1 class="h1heading"> Explore The Fun</h1>
<h4 class="h4heading">Discover Awesome Events around you</h4>
</center><br/>
</div>
<div class="col-sm-3 dropdownmenu"><center><i class="fa fa-calendar fontowsm" aria-hidden="true"></i></center><br />
<center><select class="drop">
<option value="" >When</option>
<option value="1" >Today</option>
<option value="2" >This week</option>
<option value="3" >This month</option>

</select></center>

</i></div>
<div class="col-sm-3 dropdownmenu"><center><i class="fa fa-bullhorn fontowsm" aria-hidden="true"></i></center><br />
<center><select name="category" class="drop" >
<option value="">What</option>
<option value="church">Church</option><option value="baptising"> - Baptising</option><option value="ceremonies"> - Ceremonies</option><option value="meetings"> - Meetings</option><option value="conferences">Conferences</option><option value="colloquium"> - Colloquium</option><option value="roundtable"> - Roundtable</option><option value="seminar"> - Seminar</option><option value="symposium"> - Symposium</option><option value="workshop"> - Workshop</option><option value="movies">Movies</option><option value="drama"> - Drama</option><option value="family"> - Family</option><option value="romance"> - Romance</option><option value="thrillers"> - Thrillers</option><option value="party">Party</option><option value="open-entry-parties"> - Open Entry Parties</option><option value="private-parties"> - Private Parties</option><option value="product-launches">Product Launches</option><option value="team-building-events">Team Building Events</option><option value="theater">Theater</option><option value="yard-sale">Yard Sale</option>
</select></center></div>
<div class="col-sm-3 dropdownmenu"><center><i class="fa fa-map-marker fontowsm" aria-hidden="true"></i></center><br />
<center><select name="location" class="drop">
<option value="">Where</option>
<option value="east-coast">East Coast</option><option value="los-angeles-ca">Los Angeles, CA</option><option value="new-york-ny">New York, NY</option><option value="phoenix-az">Phoenix, AZ</option><option value="san-francisco-ca">San Francisco, Ca</option><option value="seattle-wa">Seattle, WA</option><option value="west-coast">West Coast</option>
</select></center></div>
<div class="ccol-sm-3 dropdownmenu"><center><i class="fa fa-search fontowsm" aria-hidden="true"></i></center><br />
<center>
<button class="button1" type="submit" > Show me the fun!</button></center></div>
<div class="upcome">
<center>

<h2 class="h2heading"><mark class="upcmng_heading">Upcoming Events</mark><mark class="upcmng_hdng_loc"> V2</mark></h2>
<h4 class="h4heading">Pellentesque id felis ut neque malesuada maximus quis id arcu</h4>
</center><br/></div>

</div>
</div>
<div class="container" style="margin-bottom: 2%;">
    <div class="row" style="background: #e9ebee;">
        <div class="col-sm-12" style="border-bottom: solid;border-width: 1px;border-color: rgba(128, 128, 128, 0.48);">
            <div class="col-sm-2" style="
    width: 20%;
    margin-left: -14px;
    margin-top: 1%;
    margin-bottom: 1%;
    /* border-bottom: solid; */
">
                <a href="#">
                    <img src="resources/img/banner.jpg" style="width: 100%;padding: 2%">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#"><h3 style="
    margin-top: 6%;
">Event Name</h3></a>
                <p style="margin-top: -4%;color: grey;">Catagory:<a href="#"> Catagory</a></p>
                <h4 style="margin-top: -1%;"><strong>Launch By:</strong><a href="#"> company Name</h4></a>
                <div class="rating">
                    4.7 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <p style="
    display: -webkit-inline-box;
    color: grey;
">1,835,016 views</p>
            </div>
            <div class="col-sm-3">
                               <i class="fa fa-map-marker" aria-hidden="true" style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                        margin-bottom: 0%;
                    margin-top: 4%;
                "></i><p style="display: -webkit-inline-box;">Chauburji Lahore, Pakistan.</p>
                <p><i class="fa fa-phone" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 0%;
                    margin-top: 0%;
                "></i>03344001952</p>

                <p><i class="fa fa-calendar-o" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 0%;
                    margin-top: 0%;
                "></i>13 Jun, 2016.</p>

                <p><i class="fa fa-envelope-o" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 1%;
                    margin-top: 0%;
                "></i>info@abc.com</p>

            </div>
            <div class="col-sm-2">
               <div id="googleMap1" style="width: 268px;height: 121px;margin: 4%;">
                </div>
            </div>
            <div class="col-sm-1">
                <a href="#" style="
    position: absolute;
    margin: 104%;
    margin-top: 6%;
    font-size: x-small;
    color: white;
    padding: 7px;
    background: #0099ff;
    border-radius: 4px;
    z-index: 99;
    width:;
    /* float: right; */
">Report!</a>
<a href="#" class="fa fa-share" style="
    position: absolute;
    margin: 104%;
    margin-top: 43%;
    font-size: x-small;
    color: white;
    padding: 7px;
    background: #0099ff;
    border-radius: 4px;
    z-index: 99;
        width: 47px;
    /* float: right; */
"> share</a>
            </div>
        </div>
            
       
    </div>
    

    <div class="row" style="background: #e9ebee;">
        <div class="col-sm-12" style="border-bottom: solid;border-width: 1px;border-color: rgba(128, 128, 128, 0.48);">
            <div class="col-sm-2" style="
    width: 20%;
    margin-left: -14px;
    margin-top: 1%;
    margin-bottom: 1%;
    /* border-bottom: solid; */
">
                <a href="#">
                    <img src="resources/img/banner.jpg" style="width: 100%;padding: 2%">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#"><h3 style="
    margin-top: 6%;
">Event Name</h3></a>
                <p style="margin-top: -4%;color: grey;">Catagory:<a href="#"> Catagory</a></p>
                <h4 style="margin-top: -1%;"><strong>Launch By:</strong><a href="#"> company Name</h4></a>
                <div class="rating">
                    4.7 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div>
                <p style="
    display: -webkit-inline-box;
    color: grey;
">1,835,016 views</p>
            </div>
            <div class="col-sm-3">
                               <i class="fa fa-map-marker" aria-hidden="true" style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                        margin-bottom: 0%;
                    margin-top: 4%;
                "></i><p style="display: -webkit-inline-box;">Chauburji Lahore, Pakistan.</p>
                <p><i class="fa fa-phone" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 0%;
                    margin-top: 0%;
                "></i>03344001952</p>

                <p><i class="fa fa-calendar-o" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 0%;
                    margin-top: 0%;
                "></i>13 Jun, 2016.</p>

                <p><i class="fa fa-envelope-o" aria-hidden="true"style="
                    margin: 6%;
                    font-size: large;
                    color: #0099ff;
                    margin-right: 1%;
                    margin-bottom: 1%;
                    margin-top: 0%;
                "></i>info@abc.com</p>

            </div>
            <div class="col-sm-2">
               <div id="googleMap" style="width: 268px;height: 121px;margin: 4%;">
                </div>
            </div>
            <div class="col-sm-1">
                <a href="#" style="
    position: absolute;
    margin: 104%;
    margin-top: 6%;
    font-size: x-small;
    color: white;
    padding: 7px;
    background: #0099ff;
    border-radius: 4px;
    z-index: 99;
    width:;
    /* float: right; */
">Report!</a>
<a href="#" class="fa fa-share" style="
    position: absolute;
    margin: 104%;
    margin-top: 43%;
    font-size: x-small;
    color: white;
    padding: 7px;
    background: #0099ff;
    border-radius: 4px;
    z-index: 99;
        width: 47px;
    /* float: right; */
"> share</a>
            </div>
        </div>
            
       
    </div>

</div>
</body>
</html>
