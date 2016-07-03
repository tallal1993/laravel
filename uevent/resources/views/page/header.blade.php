<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Off Canvas Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <!-- Styles -->
  {!!HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css')!!}
  {!!HTML::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css')!!}
  {!!HTML::style('public/style/bootstrap.min.css')!!}
  {!!HTML::style('public/style/custom.css')!!}
  {!!HTML::style('public/style/menu.css')!!}
  {!!HTML::style('public/style/style.css')!!}
  
  {!!HTML::script('http://www.jqueryscript.net/css/jquerysctipttop.css')!!}
  {!!HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js')!!}

  


    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<div class="fluid-container headloccont" style="padding: 4.2px;">
  <div class="col-sm-12 locdiv">
    <div class="dropdown loc">
      <button onclick="hd_bar_drpdwn()" class="dropbtn fa fa-globe"></button>
      <button onclick="hd_bar_drpdwn()" class="dropbtn hd_loc">Location</button>
        <div id="myDropdown" class="dropdown-content" style="z-index: 9999;BACKGROUND-COLOR: rgb(80, 160, 173);COLOR: #2A9CAF;">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </div>
      </div>

      <div class="dropdown sport_login" style="float: right;">
      <button class="dropbtn fa fa-phone-square"></button>
      <button class="dropbtn hd_loc sprt">24/7 Support+1 480 463 8811</button>
      @if(Session::get('usercheckin'))
      <!-- <button onclick="window.Location.href('/logout')" style="   background-color:#66AFE9;color: white;padding: 4px;margin: 1px;border-radius: 3px;" class="dropbtn hd_loc fa fa-user"> Logout</button> -->
      <a href="logout">logout</a>
      @else
      <button id="login" style="   background-color:#66AFE9;color: white;padding: 4px;margin: 1px;border-radius: 3px;" class="dropbtn hd_loc fa fa-user"> Login</button>
      @endif
        {{ Form::open(array('url' => 'loginauth','method' => 'POST','id'=>'login-form')) }}
           <p>{{ Form::text('email','', array('class' => 'text','placeholder' => 'User Name')) }} </p>
           <p>{{ Form::password('password', array('class' => 'text','placeholder' => 'Password')) }}</p>
           <p>{{ Form::submit('Submit', array('class' => 'submit login_submit')) }}</p>
           <p><h6 class="login_or">...or<br>conect with social account</h6></p>
           <p><center><a id="login_popup_social" style="color: #2700BB;" href="#"><i class="fa fa-facebook-square"></i></a>
           <a id="login_popup_social" style="color: rgb(82, 164, 226);" href="#"><i class="fa fa-twitter-square"></i></a>
           <a id="login_popup_social" href="#" style="color: rgba(208, 45, 25, 0.87);"><i class="fa fa-google-plus-square"></i></a>
           </center></p>
        {{ Form::close() }}
      <div id="myDropdown1" class="dropdown-content" style="z-index: 9999;BACKGROUND-COLOR: rgb(80, 160, 173);COLOR: #2A9CAF;">
        </div>
      </div>
 
      <script>
      $("#login").click(function() {
  $("#login-form").slideToggle();
});
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function hd_bar_drpdwn() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function hd_bar_drpdwn1() {
    // document.getElementById("myDropdown1").classList.toggle("show");
    location.href="Home";
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  </div>  
</div>
<div>

    <nav>
        <ul class="list-unstyled main-menu">
          <li class="text-right">
          <div class="menu_avatar_container">
          {!!HTML::image('resources/img/logo.png','Avatar', array('class' => 'menu_avatar'))!!}
            <!-- <img src="img/logo.png" class="menu_avatar"> -->
            <h3 class="menu_usr_nm">{{ Session::get('usercheckin') }}</h3>
            <h5 class="menu_email">#00001</h5>
            <button class="fa fa-pencil menu_user_edit" title ="Edit User profile"></button>
            <!-- <button class="fa fa-sign-out menu_signout" title="Log out"><span class="menu_span_logout">Log out<span></button>-->
          </div><a href="#" id="nav-close">x</a></li>
         <!-- <li></li>-->
          
          <li class="active"><span class="fa fa-home "></span><a class="a_active" href="#">Home<span class="icon"></span></a></li>
          <li><span class="fa fa-globe"></span><a href="#">About<span class="icon"></span></a></li>
          <li><span class="fa fa-calendar-o"></span><a href="#">Events<span class="icon"></span></a></li>
          <li><a href="#">Dropdown</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="#">Sub Menu One <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="#">Sub Menu Two <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="#">Sub Menu Three <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="#">Sub Menu Four <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="#">Sub Menu Five <span class="icon"></span></a></li>
            </ul>
          </li>
          <li><a href="#">Menu Four <span class="icon"></span></a></li>
          <li><span class="fa fa-sign-out"></span><a href="#">Log out<span class="icon"></span></a></li>
        </ul>
      </nav>
         
    <div class="navbar navbar-inverse navbar-fixed-top">      
        <!--Include your brand here-->
        <!--<a class="navbar-brand" href="#">Off Canvas Menu</a>-->
        <div class="container">
        {!!HTML::image('resources/img/1.png','Logo', array('class' => 'header_logo'))!!}
         <!--  <img src="resources/img/logo.png" class="header_logo"> -->
        </div>
        <div id="menu_search" class="container head_search_container">
          <form class="form-inline menu_form-inline" role="form">
            <div class="form-group head_search">
              <input type="text" placeholder="Event Name" class="form-control menu_form-control first_input" id="usr">
               <input type="text" placeholder="Country Name" class="form-control menu_form-control scnd_input" id="usr"> 
              <button type="submit" class="btn btn-default hdr_srch_by_nm_btn menu_srch_btn ">Search</button>       
          </form>
        </div>
        </div>
        <div class="navbar-header pull-right">
          <a id="nav-expander" class="nav-expander fixed">
            MENU &nbsp;<i class="fa fa-bars fa-lg white"></i>
          </a>
        </div>
    </div>
    </div>
    </div> <!-- /container -->
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {!!HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
    {!!HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"')!!}
    {!!HTML::script('public/js/jquery.navgoco.js')!!}
    {!!HTML::script('public/js/main.js')!!}
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
    <script>
    $(document).ready(function(){                       
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
          e.preventDefault();
          $('body').toggleClass('nav-expanded');
        });
        $('#nav-close').on('click',function(e){
          e.preventDefault();
          $('body').removeClass('nav-expanded');
        });
        // Initialize navgoco with default options
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });
      });
      </script>

