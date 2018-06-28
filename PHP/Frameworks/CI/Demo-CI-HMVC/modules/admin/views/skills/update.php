<div class="row">
	<div class="col-lg-9 col-md-9">
		<div class="tc-tabs"><!-- Nav tabs style 1 -->
			<ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
				<li class="active"><a href="#p1" data-toggle="tab" aria-expanded="true"><i class="fa fa-edit bigger-130"></i>Edit Skill</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="p1">
					<h2>Skill Details</h2>
					<div class="hr hr-12 hr-double"></div>
					<?php echo form_open("/admin/skills/edit/$skill_id", array('class'=>"form-horizontal", 'role'=>"form")); ?>
						<?php if (validation_errors()): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Edit Skill Errors</h4>
							<hr class="separator">
							<?php echo validation_errors(); ?>
						</div>
						<?php endif; ?>
						
						<?php if (isset($errors) && strlen($errors)): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Edit Skill Errors</h4>
							<hr class="separator">
							<p><?php echo $errors; ?></p>
						</div>
						<?php endif; ?>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Skill Type:</label>
							<div class="col-sm-3">
                                <?php $skill_type = (isset($_POST['type']))?set_value('type'):$skill_type; ?>
								<?php echo generate_skill_types_html(' class="form-control selectpicker" name="type" id="type" data-style="btn" data-live-search="true" data-width="170px"', $skill_type); ?>
							</div>
						</div>						
						<div class="form-group">
							<label class="col-sm-3 control-label">Name:</label>
							<div class="col-sm-5">
								<input type="text" name="name" id="name" class="form-control" placeholder="e.g PHP, MySql" value="<?php echo (isset($_POST['name']))?set_value('name'):$skill_name; ?>">
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">Percentage:</label>
							<div class="col-sm-4">
    							<div id="percent-spinner" class="spinner">
                                    <div class="input-group input-medium">
                                        <input type="text" name="percent" id="percent" value="<?php echo (isset($_POST['percent']))?set_value('percent'):$skill_percent; ?>" class="spinner-input form-control input-sm">
                                        <div class="spinner-buttons input-group-btn">
                                        <button type="button" class="btn spinner-up btn-sm"><i class="fa fa-chevron-up icon-only"></i></button>
                                        <button type="button" class="btn spinner-down btn-sm"><i class="fa fa-chevron-down icon-only"></i></button>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">Exp. Years:</label>
							<div class="col-sm-4">
    							<div id="exp-spinner" class="spinner">
                                    <div class="input-group input-medium">
                                        <input type="text" name="exp" id="exp" value="<?php echo (isset($_POST['exp']))?set_value('exp'):$skill_exp; ?>" class="spinner-input form-control input-sm">
                                        <div class="spinner-buttons input-group-btn">
                                        <button type="button" class="btn spinner-up btn-sm"><i class="fa fa-chevron-up icon-only"></i></button>
                                        <button type="button" class="btn spinner-down btn-sm"><i class="fa fa-chevron-down icon-only"></i></button>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
						
						<div class="form-actions">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<input type="hidden" name="update_skill" value="1" />
                                    <input type="hidden" name="id" value="<?php echo $skill_id; ?>" />
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Skill</button>
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
<script src="assets/js/plugins/fuelux/spinner.min.js"></script>


<script type="text/javaScript">
jQuery(function($) {
    // Environment Tags
	$("#name").select2({tags:["PHP", "HTML", "CSS", "JavaScript", "jQuery", "Ajax", "CodeIgniter (HMVC)", "Yii (HMVC)", "Magento", "OpenCart", "FacebookAPI", "TwitterAPI", "MaxMindAPI", "MySql", "MsSql", "MongoDB", "SqLite"]});
    
	$('#percent-spinner').spinner({min: 30, max: 100});
    $('#exp-spinner').spinner({min: 1, max: 10});
    
	//Bootstrap Select enable
	$('.selectpicker').selectpicker('show');
});
</script>