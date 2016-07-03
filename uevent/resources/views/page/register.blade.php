    @include('page.header');
    {!!HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')!!}
    
                <div class="container login_container"> 
                    <div class="row">
                        <div class="col-sm-4">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3 style="color: #55ACEE">Register to Uevent.org</h3>
                                        @if(count($errors)<0)
	                            		<p>Join Free Universal Event Organization to promote your Event</p>
                                        @endif

                                        @if(count($errors)>0)
                                        <div class="alert alert-danger" style="position: relative;margin-top: 0%">
                                          <ul>
                                          @foreach($errors->all() as $value)
                                            <li>{{ $value}}</li>
                                          @endforeach        
                                          </ul>
                                        </div>
                                        @endif
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-users"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                {{ Form::open(array('url' => 'register_auth','method' => 'POST','class'=>'login-form')) }}
				                    <!-- <form role="form" action="" method="post" class="login-form"> -->
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username...</label>
                                            {{ Form::text('username','', array('class' => 'form-username form-control user','placeholder' => 'Username...','id'=>'form-username')) }}
				                        	
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            {{ Form::email('email','', array('class' => 'form-username form-control user','placeholder' => 'Email:example@domain.com','id'=>'form-username')) }}
                                           
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-phone">Phone</label>
                                            {{ Form::text('phone','', array('class' => 'form-username form-control user','placeholder' => 'Phone: +92-300-0000000','id'=>'form-username')) }}
                                            
                                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
                                            {{ Form::password('password', array('class' => 'form-password form-control pass','placeholder' => 'Password...','id'=>'form-password')) }}
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Confirm Password</label>
                                            {{ Form::password('confirmpassword', array('class' => 'form-password form-control pass','placeholder' => 'Confirm Password...','id'=>'form-password')) }}
                                            
                                        </div>
                                        {{ Form::submit('Join', array('class' => 'btn submit_btn')) }}
<!-- 				                        <button type="submit" class="btn submit_btn">Join</button> -->
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
