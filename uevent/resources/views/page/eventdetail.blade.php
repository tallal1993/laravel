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

var map=new google.maps.Map(document.getElementById("googleMap01"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="fluid-container event_detail_container">
    <div class="row" style="margin: 0px">
        <center>
            <h1 class="event_heading">
                <mark class="event_heading_name">{{$eventname}}</mark>
                <p class="event_date">Saturday, June 18, 2016</p>
            </h1>
        </center>

        <div class="container">
        <div class="row below_700px" style="margin-bottom: 14%;">
            <div class="col-sm-12 col-md-12">
            
                <h1 style=" text-align:center;"><mark class="event_count_day" style="padding: 3%;font-size: inherit;">59 : 42 : 30 : 10</mark></h1>
                
        </div>
        </div>

<div class="row above_700px" style="margin: 12%;margin-top: 0%;">
        <div class="col-sm-3 col-md-3">
            
                <h1 style=" text-align:center;"><mark class="event_count_day">59</mark></h1>
                <h3 style=" text-align:center;"><mark class="event_count_day_label">Days</mark></h3>
                
        </div>

        <div class="col-sm-3">
            
                <h1 style=" text-align:center;"><mark class="event_count_day">32</mark></h1>
                <h3 style=" text-align:center;"><mark class="event_count_day_label" style="
    padding-left: 0%;
    padding-right: 0%;
    font-size: 2.1em;
">Hours</mark></h3>
                
        </div>

        <div class="col-sm-3">
            
                <h1 style=" text-align:center;"><mark class="event_count_day">18</mark></h1>
                <h3 style=" text-align:center;"><mark class="event_count_day_label" style="
    padding-left: 0%;
    padding-right: 0%;
    padding-top: 2%;
    font-size: 1.9em;
    padding-bottom: 2%;
">Minuts</mark></h3>
                
        </div>

        <div class="col-sm-3">
            
                <h1 style=" text-align:center;"><mark class="event_count_day">28</mark></h1>
                <h3 style=" text-align:center;"><mark class="event_count_day_label" style="
    padding-left: 0%;
    padding-right: 0%;
    font-size: 1.4em;
    padding-top: 6%;
    padding-bottom: 6%;
">Seconds</mark></h3>
                
        </div>
    </div>
    
</div>
        </div>

        <div class="container" style="margin-top: -7%;">
    <div class="row" style="background: #e9ebee;">
        <div class="col-sm-12" style="border-bottom: solid;border-width: 1px;border-color: rgba(128, 128, 128, 0.48);">
            <div class="col-sm-2" style="
    width: 20%;
    margin-left: -14px;
    margin-top: 1%;
    margin-bottom: 1%;
    /* border-bottom: solid; */
">

    <!-- COURSAL -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../resources/img/banner.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="../resources/img/banner.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../resources/img/banner.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="../resources/img/banner.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    
  </div>
    <!-- END -->
            </div>
            <div class="col-sm-3">
                <a href="#"><h3 style="
    margin-top: 6%;
">#Tags</h3></a>
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
               <div id="googleMap01" style="width: 268px;height: 121px;margin-top: 5%;">
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
            <div class="row" style="background: #e9ebee;">
                <div class="col-sm-3 col-md-3">
                    <h3 class="event_overview">Overview</h3>
                </div>
                <div class="col-sm-9 col-md-9">
                    <p style="margin: 2%;">this is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain eventthis is overview of a certain event</p>
                </div>
            </div>
            <div class="row" style="background: #e9ebee;">
                <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = '//uevent.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

            </div>
       
    </div>
    </div>
    
</div>
