<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('update_account_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('update_account_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<link rel="stylesheet" href="assets/css/plugins/select2/select2.css">
<link rel="stylesheet" href="assets/css/plugins/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="assets/css/plugins/bootstrap-wysihtml/bootstrap-wysihtml5.css">
<link rel="stylesheet" href="assets/css/plugins/bootstrap-editable/bootstrap-editable.css">

<div class="row">
	<div class="col-lg-3 col-md-3">
		<div class="well well-sm white">
			<div class="profile-pic">
				<a href="#"><img src="assets/images/user-1.jpg" class="img-responsive"  alt=""></a>
			</div>
			<p class="text-center">
				<button type="button" class="btn btn-facebook btn-xs" data-placement="top" data-rel="tooltip" title="Visit My Facebook" role="button"><i class="fa fa-facebook icon-only"></i></button>				
				<button type="button" class="btn btn-twitter btn-xs" data-placement="top" data-rel="tooltip" title="Visit My Twitter" role="button"><i class="fa fa-twitter icon-only"></i></button>
				<button type="button" class="btn btn-googleplus btn-xs" role="button" data-placement="top" data-rel="tooltip" title="Google +"><i class="fa fa-google-plus icon-only"></i></button>
			</p>
		</div>
		<div class="alert bg-primary">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta.</p>
		</div>
	</div>
	<div class="col-lg-9 col-md-9">
		<div class="tc-tabs"><!-- Nav tabs style 1 -->
			<ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
				<li <?php echo (!isset($act_form) && empty($act_form))?'class="active"':''; ?>><a href="#p1" data-toggle="tab"><i class="fa fa-desktop bigger-130"></i>Overview</a></li>
				<li <?php echo (isset($act_form) && $act_form=='p2')?'class="active"':''; ?>><a href="#p2" data-toggle="tab" <?php echo (isset($act_form) && $act_form=='p2')?'aria-expanded="true"':''; ?>><i class="fa fa-edit bigger-130"></i>Edit Account</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade <?php echo (!isset($act_form) && empty($act_form))?' in active':''; ?>" id="p1">
					<div class="row">					
						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
							<div class="portlet no-border">
								<div class="portlet-heading">
									<div class="portlet-title">
										<h2><?php echo $about_fname.' '.$about_mname.' '.$about_lname.'('.$about_initial.')'; ?></h2>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="portlet-body">
									<div class="editable" id="profile">
									<?php echo $about_intro; ?>
									</div>						
									<div class="space-4"></div>
									<address>
										<a href="mailto:#" id="email"><?php echo $about_email; ?></a>
									</address>					
									<span class="">Last Login </span>
									<span class="editable" id="slider">7 hours ago</span>
									<div class="space-4"></div>

									<ul class="list-inline well well-sm">
										<li><i class="fa fa-flag bigger-110"></i> <a href="#" id="country" data-value="<?php echo $about_country; ?>" class="editable"><?php echo get_country_name($about_country); ?></a></li>
										<li><i class="fa fa-calendar bigger-110"></i> <a href="#" id="dob" class="editable">28th March, 2014</a></li>
										<li><i class="fa fa-graduation-cap bigger-110"></i> RedHat Certification</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="portlet no-border">
								<div class="portlet-heading dark">
									<div class="portlet-title">
									<h4>Skills</h4>
									</div>
									<div class="portlet-widgets">
									<i class="fa fa-sort-alpha-desc bigger-110"></i>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="portlet-body skills light">
								<div class="progress" data-percent="75%">
									<div class="progress-bar progress-bar-success" role="progressbar" style="width: 75%">
									<span class="sr-only">75% Complete</span>
									</div>
									<span class="progress-type">HTML / HTML5</span>
									<span class="progress-completed">75%</span>
								</div>
								<div class="progress" data-percent="40%">
									<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 40%">
									<span class="sr-only">40% Complete</span>
									</div>
									<span class="progress-type">ASP.Net</span>
									<span class="progress-completed">40%</span>
								</div>
								<div class="progress" data-percent="26%">
									<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 26%">
									<span class="sr-only">26% Complete</span>
									</div>
									<span class="progress-type">Java</span>
									<span class="progress-completed">26%</span>
								</div>
								<div class="progress" data-percent="80%">
									<div class="progress-bar" role="progressbar" style="width: 80%">
									<span class="sr-only">80% Complete</span>
									</div>
									<span class="progress-type">jQuery / JavaScript</span>
									<span class="progress-completed">80%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="portlet no-border-bottom">
							<div class="portlet-heading dark">
								<div class="portlet-title">
									<h4><i class="fa fa-rss"></i> Recent Activities</h4>
								</div>
								<div class="portlet-widgets">
									<a href="javascript:;"><i class="fa fa-refresh"></i></a>
									<span class="divider"></span>
									<a href="#" class="tooltip-danger" data-placement="left" data-rel="tooltip" title="Clear"><i class="fa fa-trash-o bigger-110"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="portlet-body no-padding">
								<ul class="lists">
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									Server rdp32 is overloaded
									</li>
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									Email Sent to Sameer Matalia <a href="#">[Ticket ID: 332335]</a>
									</li>
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									Module Suspend Successful - Reason: <a href="#">#827101</a>
									</li>
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									Cron Job: Starting Processing Overdue Suspensions
									</li>
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									Email Sent to <a href="#">Sunil Gupta</a> (Add new domain)
									</li>
									<li>
									<span class="date">17/7/2014</span>
									<span class="icons"><i class="fa fa-warning"></i></span>
									<a href="#">New order</a> received. Please take care of it.
									</li>
								</ul>
							</div>
						</div>
						<div class="hr hr-12 hr-double"></div>
						<div class="action-buttons">
							<a href="#"><i class="fa fa-search-plus"></i> View all</a>
						</div>
					</div>
				</div>
			</div>
				<div class="tab-pane fade  <?php echo (isset($act_form) && $act_form=='p2')?' in active':''; ?>" id="p2">
					<h2>Account details</h2>
					<div class="hr hr-12 hr-double"></div>
					<?php echo form_open('/admin/account/profile', array('class'=>"form-horizontal", 'role'=>"form")); ?>
						<?php if (validation_errors() && isset($act_form) && $act_form == 'p2'): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Update Profile Errors</h4>
							<hr class="separator">
							<?php echo validation_errors(); ?>
						</div>
						<?php endif; ?>
						
						<?php if (isset($errors) && strlen($errors) && isset($act_form) && $act_form == 'p2'): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Update Profile Errors</h4>
							<hr class="separator">
							<p><?php echo $errors; ?></p>
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Initial:</label>
							<div class="col-sm-3">
								<input type="text" name="initial" id="initial" class="form-control" placeholder="SAM" value="<?php echo (isset($about_initial) && !empty($about_initial))?$about_initial:set_value('initial'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">First Name:</label>
							<div class="col-sm-3">
								<input type="text" name="fname" id="fname" class="form-control" placeholder="Saubhagya" value="<?php echo (isset($about_fname) && !empty($about_fname))?$about_fname:set_value('fname'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Middle Name:</label>
							<div class="col-sm-3">
								<input type="text" name="mname" id="mname" class="form-control" placeholder="Rn." value="<?php echo (isset($about_mname) && !empty($about_mname))?$about_mname:set_value('mname'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name:</label>
							<div class="col-sm-3">
								<input type="text" name="lname" id="lname" class="form-control" placeholder="Mishra" value="<?php echo (isset($about_lname) && !empty($about_lname))?$about_lname:set_value('lname'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Company:</label>
							<div class="col-sm-5">
								<input type="text" name="company" id="company" class="form-control" placeholder="Liz Infotech Pvt. Ltd." value="<?php echo (isset($about_company) && !empty($about_company))?$about_company:set_value('company'); ?>">
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">About Me:</label>
							<div class="col-sm-9">
							<textarea name="intro" id="about-editor" class="form-control"><?php echo (isset($about_intro) && !empty($about_intro))?$about_intro:set_value('intro'); ?></textarea>
							</div>
						</div>													
						<hr class="separator">
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="tcb">
									<label>
									<span class="labels"> Contact Informations</span>
									</label>
								</div>
							</div>
						</div>
						<hr class="separator">
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-4">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" name="email" id="email" class="form-control" placeholder="samatwork14@gmail.com" value="<?php echo (isset($about_email) && !empty($about_email))?$about_email:set_value('email'); ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Phone Number:</label>
							<div class="col-sm-4">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" name="phone" id="phone" class="form-control input-phone" placeholder="(980) 474-9368" value="<?php echo (isset($about_phone) && !empty($about_phone))?$about_phone:set_value('phone'); ?>">
								</div>
							</div>
						</div>												
						<div class="form-group">
							<label class="col-sm-3 control-label">Address:</label>
							<div class="col-sm-7">
							<input type="text" name="address" id="address" class="form-control" placeholder="Sec V, Salt Lake" value="<?php echo (isset($about_address) && !empty($about_address))?$about_address:set_value('address'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">City:</label>
							<div class="col-sm-3">
							<input type="text" name="city" id="city" class="form-control" placeholder="Kolkata" value="<?php echo (isset($about_city) && !empty($about_city))?$about_city:set_value('city'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">State:</label>
							<div class="col-sm-4">
							<input type="text" name="state" id="state" class="form-control" placeholder="WB" value="<?php echo (isset($about_state) && !empty($about_state))?$about_state:set_value('state'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Zip code:</label>
							<div class="col-sm-3">
							<input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="700091" value="<?php echo (isset($about_zipcode) && !empty($about_zipcode))?$about_zipcode:set_value('zipcode'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Country:</label>
							<div class="col-sm-4">
								<?php $country = (isset($about_country) && !empty($about_country))?$about_country:set_value('country'); ?>
								<?php echo generate_country_html(' class="form-control selectpicker" name="country" id="country" data-style="btn" data-live-search="true" data-width="170px"', $country); ?>
							</div>
						</div>
						<div class="form-actions">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<input type="hidden" name="id" value="<?php echo (isset($about_id) && !empty($about_id))?$about_id:set_value('id'); ?>" />
									<input type="hidden" name="update_profile" value="1" />
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div><!--nav-tabs style 1-->
	</div>
</div>

<script src="assets/js/plugins/select2/select2.min.js"></script>
<script src="assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/js/plugins/bootstrap-wysihtml/wysihtml.min.js"></script>
<script src="assets/js/plugins/bootstrap-wysihtml/bootstrap-wysihtml.js"></script>
<script src="assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js"></script>
<script src="assets/js/plugins/bootstrap-editable/ek-editable.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/ek-wysiwyg.js"></script>
<script src="assets/js/plugins/masked-input/jquery.maskedinput.min.js"></script>

<script type="text/javaScript">
jQuery(function($) {
	// wysihtml editor
	$('#about-editor').wysihtml5();
	
	$('.input-phone').mask('(999) 999-9999');
	
	//Bootstrap Select enable
	$('.selectpicker').selectpicker('show');
});
</script>