<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('update_work_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('update_work_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('update_work_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('update_work_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
	<div class="col-lg-9 col-md-9">
		<div class="tc-tabs"><!-- Nav tabs style 1 -->
			<ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
				<li class="active"><a href="#p1" data-toggle="tab" aria-expanded="true"><i class="fa fa-edit bigger-130"></i>Edit Work</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="p1">
					<h2>Work Details</h2>
					<div class="hr hr-12 hr-double"></div>
					<?php echo form_open("/admin/works/edit/$work_id", array('class'=>"form-horizontal", 'role'=>"form")); ?>
						<?php if (validation_errors()): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Add Work Errors</h4>
							<hr class="separator">
							<?php echo validation_errors(); ?>
						</div>
						<?php endif; ?>
						
						<?php if (isset($errors) && strlen($errors)): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Add Work Errors</h4>
							<hr class="separator">
							<p><?php echo $errors; ?></p>
						</div>
						<?php endif; ?>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Position:</label>
							<div class="col-sm-3">
								<input type="text" name="position" id="position" class="form-control" placeholder="Developer" value="<?php echo (isset($_POST['position']))?set_value('position'):$work_position; ?>">
							</div>
						</div>						
						<div class="form-group">
							<label class="col-sm-3 control-label">Company:</label>
							<div class="col-sm-5">
								<input type="text" name="company" id="company" class="form-control" placeholder="Liz Infotech Pvt. Ltd." value="<?php echo (isset($_POST['company']))?set_value('company'):$work_company; ?>">
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">Responsibilities:</label>
							<div class="col-sm-9">
							<textarea name="responsibilities" id="responsibilities" class="form-control"><?php echo (isset($_POST['responsibilities']))?set_value('responsibilities'):$work_responsibilities; ?></textarea>
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">Environments</label>
							<div class="col-sm-4">
								<input type="text" class="form-control input-large" name="envs" id="envs" value="<?php echo (isset($_POST['envs']))?set_value('envs'):$work_envs; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">From:</label>
							<div class="col-sm-4">
                                <?php $from = (isset($_POST['from']))?set_value('from'):$work_from; ?>
							<?php echo generate_years_html(' class="form-control selectpicker" name="from" id="from" data-style="btn" data-live-search="true" data-width="170px"', $from); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">To:</label>
							<div class="col-sm-4">
								<?php $to = (isset($_POST['to']))?set_value('to'):$work_to; ?>
								<?php echo generate_years_html(' class="form-control selectpicker" name="to" id="to" data-style="btn" data-live-search="true" data-width="170px"', $to, TRUE); ?>
							</div>
						</div>
						<div class="form-actions">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<input type="hidden" name="update_work" value="1" />
                                    <input type="hidden" name="id" value="<?php echo $work_id; ?>" />
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
	$('#responsibilities').wysihtml5();
	
	// Environment Tags
	$("#envs").select2({tags:["PHP", "JavaScript", "jQuery", "Ajax", "CodeIgniter", "Yii", "Magento", "OpenCart", "MySql", "MongoDB"]});
	
	//Bootstrap Select enable
	$('.selectpicker').selectpicker('show');
});
</script>