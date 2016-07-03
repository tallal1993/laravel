    @include('page.header');
    {!!HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')!!}
    
                <div class="container login_container"> 
                    <div class="row">
                        <div class="col-sm-4">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3 style="color: #55ACEE">Login to Uevent.org</h3>
	                            		<p></p>
	                        		</div>
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger" >
                                          <ul>
                                          @foreach($errors->all() as $value)
                                            <li>{{ $value}}</li>
                                          @endforeach        
                                          </ul>
                                        </div>
                                        @endif
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control user" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control pass" id="form-password">
				                        </div>
				                        <button type="submit" class="btn submit_btn" style="margin-left:0%;">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
                             </div>
                            <div class="col-sm-6">
                                <div class="social-login">
                                    <h3 style="color: white">...or login with:</h3>
                                        <div class="social-login-buttons">
                                            <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                                <i class="fa fa-facebook"></i> Facebook
                                            </a>
                                            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                                <i class="fa fa-twitter"></i> Twitter
                                            </a>
                                            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                                <i class="fa fa-google-plus"></i> Google Plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                       
                        
                        
                    </div>
                    
               
            
        </div>
