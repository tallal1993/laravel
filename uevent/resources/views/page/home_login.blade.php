{!!HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')!!}
<div class="container hmlgn" style="height: 100%;">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-6 app_promotion">
				{{ Html::image('resources/img/7.png','', array('class' => 'appdownloadbanner')) }}
			</div>
			<div class="col-sm-4" style="margin-left: 25px;">
					
	                        	
	                        	<div class="form-box reg_box_home">
		                        	<div class="form-top" style="padding: 0 25px 0px 25px;">
		                        		<div class="form-top-left">
		                        			<h3 style="color: #55ACEE;width: 116%;">Register to Uevent.org</h3>
		                            		
		                        		</div>
		                        		
		                            </div>
		                            <div class="form-bottom" style="background: rgba(238, 238, 238, 0.69);">
					                    
					                    {{ Form::open(array('url' => 'register_auth','method' => 'POST','class'=>'login-form','role'=>'form')) }}
					                    	<div class="home_reg_form_group">
					                    		<label class="sr-only" for="form-username">Username</label>
					                        	
					                        	{{ Form::text('username','', array('class' => 'form-username form-control user','placeholder' => 'Username...','id'=>'form-username')) }}
					                        </div>
	                                        <div class="home_reg_form_group">
	                                            <label class="sr-only" for="form-username">Email</label>                                           
	                                            {{ Form::email('email','', array('class' => 'form-username form-control user','placeholder' => 'Email:example@domain.com','id'=>'form-username')) }}
	                                        </div>
	                                        <div class="home_reg_form_group">
	                                            <label class="sr-only" for="form-username">Phone</label>
	                                            
	                                            {{ Form::text('phone','', array('class' => 'form-username form-control user','placeholder' => 'Phone: +92-300-0000000','id'=>'form-username')) }}
	                                        </div>
					                        <div class="home_reg_form_group">
					                        	<label class="sr-only" for="form-password">Password</label>		                        	
					                        	{{ Form::password('password', array('class' => 'form-password form-control pass','placeholder' => 'Password...','id'=>'form-password')) }}
					                        </div>
	                                        <div class="home_reg_form_group">
	                                            <label class="sr-only" for="form-username">Confirm Password</label>
	                                            {{ Form::password('confirmpassword', array('class' => 'form-password form-control pass','placeholder' => 'Confirm Password...','id'=>'form-password')) }}
	                                        </div>
	                                        <div class="home_reg_form_group">
	                                            <label class="trms" for="form-username"><a class="agree_hover" href="#">Terms and Contidions</a></label>
	                                            <section>
	                                           
	                                            <!-- Squared THREE -->
												<div class="squaredThree">

												{{ Form::checkbox('agree', '1', null, ['class' => '','id'=>'squaredThree']) }}
												
													<label for="squaredThree"></label>
												</div>
	                                           
	                                        </div>
	                                        </section>
					                       
					                        {{ Form::submit('Join', array('class' => 'btn submit_btn')) }}
					                    {{ Form::close() }}
					                    <center>
					                    <h6 class="login_or reg_login_conct_wth">Conect with social account...</h6>
					                    <div class="conect_social">
					                    <a id="login_popup_social" style="color: #2700BB;" href="#"><i class="fa fa-facebook-square"></i></a>
           								<a id="login_popup_social" style="color: rgb(82, 164, 226);" href="#"><i class="fa fa-twitter-square"></i></a>
           								<a id="login_popup_social" href="#" style="color: rgba(208, 45, 25, 0.87);"><i class="fa fa-google-plus-square"></i></a>
           								</div>
           								</center>
				                    </div>
			                    </div>
	                        </div>
		
	</div>
</div>;
