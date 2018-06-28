<!DOCTYPE html>
<html lang="en">
	<head>
        <base href="<?php echo base_url(); ?>theme/backend/ekoder/" />
		<meta charset="utf-8">
		<title>Login - Sam Mishra Official Admin</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/fonts.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/plugins/gritter/jquery.gritter.css" />
		<link id="qstyle" rel="stylesheet" href="assets/css/themes/style.css">
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script> 
		<script src="assets/js/respond.min.js"></script> 
		<![endif]-->
	</head>
	<body class="login">
		<div id="wrapper">
			<!--//-->
			<div class="login-container">
                <?php if($this->session->flashdata('logout_success')): ?>
                <div class="alert note note-success">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="fa fa-hand-o-right fa-2"></i>Thank You.</h4>
                    <hr class="separator">
                    <p><?php echo $this->session->flashdata('logout_success') ?></p>
                </div>
                <?php endif; ?>
				<h2><a href="<?php echo site_url(); ?>"><img src="assets/images/logo.png" alt="logo" class="img-responsive"></a></h2>
				<div id="login-box" class="login-box visible">
					<p class="bigger-110"><i class="fa fa-key"></i>Please Enter Your Information</p>
					<div class="hr hr-8 hr-double dotted"></div>
					<?php echo form_open('/admin/account/login'); ?>
                    
                        <?php if (validation_errors() && isset($act_form) && $act_form == 'login'): ?>
                        <div class="alert note note-danger">
    						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
    						<h4><i class="fa fa-warning"></i> Login Form Errors</h4>
    						<hr class="separator">
    						<?php echo validation_errors(); ?>
    					</div>
                        <?php endif; ?>
                        
                        <?php if (isset($errors) && strlen($errors) && isset($act_form) && $act_form == 'login'): ?>
                        <div class="alert note note-danger">
    						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
    						<h4><i class="fa fa-warning"></i> Login Form Errors</h4>
    						<hr class="separator">
    						<p><?php echo $errors; ?></p>
    					</div>
                        <?php endif; ?>
                        
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" name="username" class="form-control" placeholder="Username" <?php echo (form_error('username') && isset($act_form) && $act_form == 'login')?'style="border: 1px solid #A94442;"':''; ?>>
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" name="password" class="form-control" placeholder="your password" <?php echo (form_error('password') && isset($act_form) && $act_form == 'login')?'style="border: 1px solid #A94442;"':''; ?>> 
							</div>
						</div>
						<div class="tcb">
							<label><input type="checkbox" class="tc"> <span class="labels">Remember me</span> </label>
							<button type="submit" name="login" class="pull-right btn btn-primary" value="Login">Login<i class="fa fa-key icon-on-right"></i></button>
							<div class="clearfix"></div>
						</div>
						<div class="social-or-login"><span class="text-primary">Or Login Using</span></div>
						<div class="space-4"></div>
						<div class="text-center">
							<a href="#" class="btn btn-twitter btn-sm btn-circle"><i class="fa fa-twitter icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-googleplus btn-sm btn-circle"><i class="fa fa-google-plus icon-only bigger-130"></i></a>
							<a href="#" class="btn btn-facebook btn-sm btn-circle"><i class="fa fa-facebook icon-only bigger-130"></i></a>
						</div>
						<div class="footer-wrap">
							<span class="pull-left">
								<a href="#" onclick="show_box('forgot-box'); return false;"><i class="fa fa-angle-double-left"></i>Forgot password?</a> 
							</span>
							<span class="pull-right">
								<a href="#" onclick="show_box('registration-box'); return false;">Register here <i class="fa fa-angle-double-right"></i></a>
							</span>
							<div class="clearfix"></div>
						</div>
					<?php echo form_close(); ?>
				</div>
				<div id="forgot-box" class="login-box">
					<p class="bigger-110"><i class="fa fa-key"></i>Retrieve Password</p>
					<div class="hr hr-8 hr-double dotted"></div>
					<form method="post" action="index.html">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input type="email" class="form-control" placeholder="Email"> 
								<span class="help-block">Enter your email and to receive instructions</span>
							</div>
						</div>
						<a href="#" class="pull-right btn btn-danger">Submit</a>
						<div class="clearfix"></div>
						<div class="footer-wrap">
							<a href="#" onclick="show_box('login-box'); return false;">Back to login <i class="fa fa-angle-double-right"></i></a>
						</div>
					</form>
				</div>
				<div id="registration-box" class="login-box">               
					<p class="bigger-110"><i class="fa fa-users"></i>New User Registration</p>
					<div class="hr hr-8 hr-double dotted"></div>
                    <?php $attributes = array('id' => 'regForm'); ?>     
					<?php echo form_open('/admin/account/create', $attributes); ?>
                    
                        <?php if($this->session->flashdata('create_user_success')): ?>
                        <div class="alert note note-success">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                            <h4><i class="fa fa-hand-o-right fa-2"></i>Thank You.</h4>
                            <hr class="separator">
                            <p><?php echo $this->session->flashdata('create_user_success') ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (validation_errors() && isset($act_form) && $act_form == 'register'): ?>
                        <div class="alert note note-danger">
    						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
    						<h4><i class="fa fa-warning"></i> Registration Form Errors</h4>
    						<hr class="separator">
    						<?php echo validation_errors(); ?>
    					</div>
                        <?php endif; ?>
                        
                        <?php if (isset($errors) && strlen($errors) && isset($act_form) && $act_form == 'register'): ?>
                        <div class="alert note note-danger">
    						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
    						<h4><i class="fa fa-warning"></i> Registration Form Errors</h4>
    						<hr class="separator">
    						<p><?php echo $errors; ?></p>
    					</div>
                        <?php endif; ?>           
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input type="email" name="user_email" value="<?php echo set_value('user_email'); ?>" class="form-control" placeholder="Email" <?php echo (form_error('user_email') && isset($act_form) && $act_form == 'register')?'style="border: 1px solid #A94442;"':''; ?>>
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" class="form-control" placeholder="Username" <?php echo (form_error('user_name') && isset($act_form) && $act_form == 'register')?'style="border: 1px solid #A94442;"':''; ?>>
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input type="password" name="user_password" value="" class="form-control" placeholder="your password" <?php echo (form_error('user_password') && isset($act_form) && $act_form == 'register')?'style="border: 1px solid #A94442;"':''; ?>>
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-repeat text-gray"></span>
								<input type="password" name="cnf_password" value="" class="form-control" placeholder="confirm password" <?php echo (form_error('cnf_password') && isset($act_form) && $act_form == 'register')?'style="border: 1px solid #A94442;"':''; ?>>
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" name="tc" class="tc"> 
								<span class="labels" <?php echo (form_error('tc') && isset($act_form) && $act_form == 'register')?'style="border: 1px solid #A94442;"':''; ?>>I accept the <a href="#" data-toggle="modal" data-target="#Myterms">Terms of Servcies</a></span> 
							</label>
						</div>
						<p>
                        <button type="submit" name="register" id="ajaxRegister" class="btn btn-success" value="Register">Register<i class="fa fa-angle-double-right icon-on-right"></i></button></p>
						<div class="footer-wrap">
							<a href="#" onclick="show_box('login-box'); return false;"><i class="fa fa-angle-double-left"></i>Back to login</a>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			<div class="modal fade" id="Myterms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
						</div>
						<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<!-- END MAIN PAGE CONTENT --> 
		</div> 
	 
		<!-- core JavaScript -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/js/plugins/pace/pace.min.js"></script>
	
		<!-- PAGE LEVEL PLUGINS JS -->
	
		<!-- Themes Core Scripts -->	
		<script src="assets/js/main.js"></script>

		<!-- REQUIRE FOR SPEECH COMMANDS -->
		<script src="assets/js/speech-commands.js"></script>
		<script src="assets/js/plugins/gritter/jquery.gritter.min.js"></script>
        <script src="assets/js/app.js"></script>	
	
		<!-- initial page level scripts -->
        <?php if(isset($act_form) && $act_form == 'login'): ?>	
		<script type="text/javascript">
			show_box('login-box');
            jQuery('.login-box.visible').removeClass('visible');
            jQuery('#login-box').addClass('visible');
		</script>
        <?php endif; ?>
        
        <?php if(isset($act_form) && $act_form == 'register'): ?>	
		<script type="text/javascript">
            jQuery('.login-box.visible').removeClass('visible');
            jQuery('#registration-box').addClass('visible');
		</script>
        <?php endif; ?>
        
        <?php if(isset($act_form) && $act_form == 'forgot'): ?>	
		<script type="text/javascript">
			jQuery('.login-box.visible').removeClass('visible');
            jQuery('#forgot-box').addClass('visible');
		</script>
        <?php endif; ?>
        
        
	</body>
</html>