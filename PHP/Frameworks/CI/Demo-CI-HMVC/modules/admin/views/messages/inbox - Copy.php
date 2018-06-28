<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-xs-12">
				<div class="tc-tabs">
					<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs tab-lg-button">
						<li class="li-new-mail pull-right">
							<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail"><span class="btn btn-primary btn-line"><i class="fa fa-envelope bigger-130"></i><span class="bigger-110">Compose</span> </span></a>
						</li>
						<li class="active">
							<a data-toggle="tab" href="#inbox" data-target="inbox"><i class="fa fa-inbox bigger-130"></i>Inbox</a>
						</li>
					</ul>
					<div class="tab-content no-border no-padding">
						<div id="inbox" class="tab-pane in active">
							<div class="message-container">
								<div id="id-message-list-navbar" class="message-navbar clearfix">
									<div class="message-bar">
										<div class="message-infobar" id="id-message-infobar">
											<div class="title"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-primary">2</span></div>
										</div>
										<div class="message-toolbar hide">
											<div class="inline position-relative">
												<button type="button" class="btn-white btn btn-xs dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-caret-down icon-on-right"></i></button>
												<ul class="dropdown-menu dropdown-caret dropdown-125">
													<li><a href="#"><i class="fa fa-mail-reply"></i>&nbsp; Reply </a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="fa fa-eye"></i>&nbsp; Mark as read </a></li>
													<li><a href="#"><i class="fa fa-eye-slash"></i>&nbsp; Mark unread </a></li>
													<li><a href="#"><i class="fa fa-flag-o"></i>&nbsp; Flag </a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="fa fa-trash-o text-danger"></i>&nbsp; Delete </a></li>
												</ul>
											</div>
											<button type="button" class="btn btn-xs btn-white btn-primary"><i class="fa fa-trash-o text-danger"></i>Delete</button>
										</div>
									</div>
									<div>
										<div class="messagebar-item-left">
											<label class="inline middle"><input type="checkbox" id="id-toggle-all" class="tc" /> <span class="labels"></span></label>&nbsp;
											<div class="inline position-relative">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-caret-down bigger-125 middle"></i></a>
												<ul class="dropdown-menu dropdown-100">
													<li><a id="id-select-message-all" href="#">All</a> </li>
													<li><a id="id-select-message-none" href="#">None</a> </li>
													<li class="divider"></li>
													<li><a id="id-select-message-unread" href="#">Unread</a> </li>
													<li><a id="id-select-message-read" href="#">Read</a> </li>
												</ul>
											</div>
										</div>
										<div class="messagebar-item-right">
											<div class="inline position-relative">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle">Sort &nbsp; <i class="fa fa-caret-down bigger-125 middle"></i></a>
												<ul class="dropdown-menu dropdown-menu-right dropdown-100">
													<li><a href="#"><i class="fa fa-check text-success"></i>Date </a></li>
													<li><a href="#"><i class="fa fa-check invisible"></i>From </a></li>
													<li><a href="#"><i class="fa fa-check invisible"></i>Subject </a></li>
												</ul>
											</div>
										</div>
										<div class="mini-search">
											<form class="form-search">
												<div class="input-icon">
													<i class="fa fa-search nav-search-icon text-primary"></i>
													<input type="text" autocomplete="off" class="nav-search-input form-control massage-list" placeholder="Search inbox ..." />
												</div>
											</form>
										</div>
									</div>
								</div>
								<div id="id-message-item-navbar" class="hide message-navbar clearfix">
									<div class="message-bar">
										<div class="message-toolbar">
											<div class="inline position-relative">
												<button type="button" class="btn-white btn btn-xs dropdown-toggle" data-toggle="dropdown">Action<i class="fa fa-caret-down icon-on-right"></i></button>
												<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
													<li><a href="#"><i class="fa fa-mail-reply"></i>&nbsp; Reply </a></li>					
													<li class="divider"></li>
													<li><a href="#"><i class="fa fa-eye"></i>&nbsp; Mark as read </a></li>
													<li><a href="#"><i class="fa fa-eye-slash"></i>&nbsp; Mark unread </a></li>
													<li><a href="#"><i class="fa fa-flag-o"></i>&nbsp; Flag </a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="fa fa-trash-o text-danger"></i>&nbsp; Delete </a></li>
												</ul>
											</div>
											<button type="button" class="btn btn-xs btn-white"><i class="fa fa-trash-o text-danger"></i>Delete</button>
										</div>
									</div>
									<div>
										<div class="messagebar-item-left"><span class="inline btn-send-message btn-back-message-list"><button class="btn btn-primary btn-line" type="button"><i class="fa fa-arrow-left icon-on-left"></i>Back</button></span></div>
										<div class="messagebar-item-right"><i class="fa fa-clock-o bigger-110"></i><span class="grey">Today, 7:15 pm</span></div>
									</div>
								</div>
								
                                <div id="id-message-new-navbar" class="hide message-navbar clearfix">
									<div class="message-bar">
										<div class="message-toolbar">
											<!--<button type="button" class="btn btn-xs btn-white btn-primary"><i class="fa fa-floppy-o"></i>Save Draft</button>
											<button type="button" class="btn btn-xs btn-white btn-primary"><i class="fa fa-times text-danger"></i>Discard</button>-->
										</div>
									</div>
									<div>
										<div class="messagebar-item-left"><span class="inline btn-send-message btn-back-message-list"><button class="btn btn-primary btn-line" type="button"><i class="fa fa-arrow-left icon-on-left"></i>Back</button></span></div>
										<div class="messagebar-item-right"><span class="inline btn-send-message"><button type="button" class="btn btn-primary btn-line">Send<i class="fa fa-arrow-right icon-on-right"></i></button> </span></div>
									</div>
								</div>
								<div class="message-list-container">
									<div class="message-list">
										<div class="message-item message-unread"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Alex John">Alex John </span><span class="time">1:33 pm</span> <span class="summary"><span class="text">Click to open this message </span></span></div>
										<div class="message-item message-unread"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="John Doe">Trey Maclin <span>(3)</span> </span><span class="time">7:15 pm</span> <span class="attachment"><i class="fa fa-paperclip"></i></span><span class="summary"><span class="text">Please help us on optimization of mySql server </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Philip Markov">Alex Bee </span><span class="time">10:15 am</span> <span class="attachment"><i class="fa fa-paperclip"></i></span><span class="summary"><span class="text">Lorem ipsum dolor sit amet </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Sabrina">Martina </span><span class="time">Yesterday</span> <span class="summary"><span class="text">Dolor sit amet, consectetuer adipiscing </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o selected"></i><span class="sender" title="Philip Markov">Philip Markov </span><span class="time">Yesterday</span> <span class="attachment"><i class="fa fa-paperclip"></i></span><span class="summary"><span class="badge badge-success mail-tag"></span><span class="text">Lorem ipsum dolor sit amet </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Doctor Gomenz">Jelena Jerkic </span><span class="time">April 5</span> <span class="summary"><span class="text">Dolor sit amet, consectetuer adipiscing </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Robin Hood">Robin Hood </span><span class="time">April 4</span> <span class="summary"><span class="message-flags"><i class="fa fa-reply"></i></span><span class="text">Lorem ipsum dolor sit amet </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o selected"></i><span class="sender" title="Google Inc">Google Inc </span><span class="time">April 3</span> <span class="summary"><span class="text">Dolor sit amet, consectetuer adipiscing </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Shrek">Facebook </span><span class="time">March 28</span> <span class="attachment"><i class="fa fa-paperclip"></i></span><span class="summary"><span class="message-flags"><i class="fa fa-flag fa-flip-horizontal"></i></span><span class="text">Lorem ipsum dolor sit amet </span></span></div>
										<div class="message-item"><label class="inline"><input type="checkbox" class="tc" /> <span class="labels"></span></label><i class="message-star fa fa-star-o"></i><span class="sender" title="Yahoo!">Yahoo! </span><span class="time">March 27</span> <span class="summary"><span class="text">Dolor sit amet, consectetuer adipiscing </span></span></div>
									</div>
								</div>
								<div class="message-footer clearfix">
									<div class="pull-left">27 messages total</div>
									<div class="pull-right">
										<div class="inline middle">page 1 of 2</div>&nbsp; &nbsp;
										<ul class="pagination middle">
											<li class="disabled"><span><i class="fa fa-step-backward middle"></i></span></li>
											<li class="disabled"><span><i class="fa fa-caret-left bigger-140 middle"></i></span></li>
											<li><span><input value="1" maxlength="3" type="text" /> </span></li>
											<li><a href="#"><i class="fa fa-caret-right bigger-140 middle"></i></a></li>
											<li><a href="#"><i class="fa fa-step-forward middle"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <form id="id-message-form" class="hide form-horizontal message-form white col-xs-12" novalidate="novalidate">
			<div>
				<div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label><div class="col-sm-3"><div class="input-icon"><span class="fa fa-at"></span><input type="email" class="form-control" name="recipient" id="form-field-recipient" data-value="john@example.com" value="john@example.com" placeholder="Recipient(s)" /> <!--<span class="cc-bcc"><span class="inbox-cc inline toggle" data-toggle="mail-cc">Cc </span><span class="inbox-bcc inline toggle" data-toggle="mail-bcc">Bcc </span></span>--></div></div></div>
				<!--<div class="form-group hide" id="mail-cc"><label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">CC:</label><div class="col-sm-3"><input type="email" class="form-control" data-placeholder="add email" /></div></div>
				<div class="form-group hide" id="mail-bcc"><label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Bcc:</label><div class="col-sm-3"><input type="email" class="form-control" data-placeholder="add email" /></div></div>-->                
                <div class="hr hr-18 dotted"></div>
                
				<div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="form-field-name">Name:</label><div class="col-sm-3"><div class="input-icon"><span class="fa fa-user"></span><input maxlength="100" type="text" class="form-control" name="name" id="form-field-name" placeholder="Name" /></div></div></div>        
				<div class="hr hr-18 dotted"></div>
                
				<div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label><div class="col-sm-6 col-xs-12"><div class="input-icon"><span class="fa fa-comment"></span><input maxlength="100" type="text" class="form-control" name="subject" id="form-field-subject" placeholder="Subject" /></div></div></div>
				<div class="hr hr-18 dotted"></div>
                
				<div class="form-group"><label class="col-sm-3 control-label no-padding-right">Message:</label><div class="col-sm-9"><div class="wysiwyg-editor"></div></div></div>
				<div class="hr hr-18 dotted"></div>
                
				<div class="form-actions"><div class="form-group"><div class="col-sm-offset-3 col-sm-9"><button type="submit" class="btn btn-primary btn-line">Send<i class="fa fa-arrow-right icon-on-right"></i></button></div></div></div>
				<div class="space"></div>
			</div>
		</form>
        
		<div class="hide message-content" id="id-message-content">
			<div class="message-header clearfix">
				<div class="pull-left"><span class="bigger-125">Clik to open this message </span><div class="space-4"></div><i class="fa fa-star-o"></i>&nbsp; <img class="middle" alt="" src="assets/images/user.jpg" width="32" /> &nbsp; <a href="#" class="sender">John Doe</a> &nbsp; <i class="fa fa-clock-o bigger-110 middle"></i><span class="time text-gray">Today, 7:15 pm</span></div>
				<div class="pull-right action-buttons"><a href="#" class="btn-reply tooltip-success" data-rel="tooltip" title="Reply"><i class="fa fa-reply text-success icon-only bigger-130"></i></a><a href="#" class="tooltip-danger" data-rel="tooltip" title="Delete"><i class="fa fa-trash-o text-danger icon-only bigger-130"></i></a></div>
			</div>
			<div class="hr hr-double"></div>
			<div class="message-body">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
				<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
				<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
			</div>
            
			<div class="hr hr-double"></div>
            			
		</div>
	</div>
</div>

<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/jquery.hotkeys.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/ek-wysiwyg.js"></script>
<script src="assets/js/inbox.js"></script>

<script type="text/javaScript">
jQuery(function($) {
    $('#id-message-form').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		rules: {
			recipient: {
				required: true,
				email: true
			},
			name: {
				required: true
			},
			subject: {
				required: true
			},
			message: {
				required: true
			}
		},
        
		messages: {
			recipient: {
				required: "Please provide a valid email.",
				email: "Please provide a valid email."
			},
			name: {
				required: "Please provide a valid name."
			},
            subject: {
				required: "Please provide a subject."
			},
            message: {
				required: "Please type meassage to send."
			}
		},
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
			$('.alert-danger', $('.login-form')).show();
		},

		highlight: function (e) {
			$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
		},
	
		success: function (e) {
			$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
			$(e).remove();
		},
	
		errorPlacement: function (error, element) {
			if(element.is(':checkbox') || element.is(':radio')) {
				var controls = element.closest('div[class*="col-"]');
				if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
				else error.insertAfter(element.nextAll('.labels:eq(0)').eq(0));
			}
			else error.insertAfter(element.parent());
		},
	
		submitHandler: function (form) {},
		invalidHandler: function (form) {}
	});
    
    /*$(".message-container").append('<div class="message-loading-overlay"><i class="fa-spin fa fa-spinner text-primary bigger-160"></i></div>');*/
});
</script>