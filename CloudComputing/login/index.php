<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>

 
    <!-- Bootstrap core CSS -->
    <link href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/datepicker.css" rel="stylesheet">
    <link href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <script src="js/ie.js"></script>
<style>
body {
	font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	color:red;
	margin: 0px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 18px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
#container1 {
    background-color: transparent;
	background-image:url(tablet.jpg);
	background-size:650px 750px;
	background-repeat:no-repeat;
	background-position:center;
}

.centered-form {
    margin-top: 121px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 1px 4px 9px;
}
.style2 {
	font-size: xx-large;
	color: #FF0000;
}
.style3 {font-size: 18px}
</style>
  </head>
    
  <body>
<h1 align="center">&nbsp;</h1>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><a href="javascript:;" class="style2" data-toggle="modal" data-target="#loginModal">Click Here To Login</a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<h1></h1>
<p align="center">&nbsp;</p>
<h1></h1>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog">
	    	<div class="modal-content login-modal">
	      		<div class="modal-header login-modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title text-center" id="loginModalLabel"> InternMSU platform,,get your dream interns</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="text-center">
		      			<div role="tabpanel" class="login-tab">
						  	<!-- Nav tabs -->
						  	<ul class="nav nav-tabs" role="tablist">
						    	<li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
						    	<li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
						    	<li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Forget Password</a></li>
						  	</ul>
						
						  	<!-- Tab panes -->
						 	<div class="tab-content">
						    	<div role="tabpanel" class="tab-pane active text-center" id="home">
						    		&nbsp;&nbsp;
						    		<span id="login_fail" class="response_error" style="display: none;">Loggin failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" id="login_username" placeholder="Enter Your Email..">
									    	</div>
									    	<span class="help-block has-error" id="email-error"></span>									  	</div>
									  	<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									      		<input type="password" class="form-control" id="password" placeholder="Password">
									    	</div>
									    	<span class="help-block has-error" id="password-error"></span>									  	</div>
							  			<button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">Login</button>
							  			<div class="clearfix"></div>
							  			<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane" id="profile">
						    	    &nbsp;&nbsp;
						    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		 <form role="form">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
                            </div>
                          
                           
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address.." required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="city" id="city" class="form-control input-sm" placeholder="City.." required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="zip" id="zip" class="form-control input-sm" placeholder="Zip.." required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="bio" id="bio" class="form-control input-sm" placeholder="About Yourself.." required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email-1" id="last_name" class="form-control input-sm" placeholder="Your Email.." required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email-2" id="email" class="form-control input-sm" placeholder="Repeat Email Address" required>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
							  			<button type="button" name="register"id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane text-center" id="forget_password">
						    		&nbsp;&nbsp;
						    	    <span id="reset_fail" class="response_error" style="display: none;"></span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" id="femail" placeholder="Email">
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="femail-error"></span>									  	</div>
									  	
							  			<button type="button" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Reset Password</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>												</div>
												
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						  	</div>
						</div>
	      			</div>
	      		</div>
	    	</div>
	   </div>
  </div>
 	<!-- - Login Model Ends Here -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
	    $(document).ready(function(){
	    	$(document).on('click','.signup-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signup-taba').tab('show');
	    	});	
	
	    	$(document).on('click','.signin-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signin-taba').tab('show');
	    	});
	    	
	    	$(document).on('click','.forgetpass-tab',function(e){
	    		 e.preventDefault();
	    		 $('#forgetpass-taba').tab('show');
	    	});
	    });	
    </script>
  </body>
</html>
