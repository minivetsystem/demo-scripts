<div class="row">
	<div class="col-lg-9 col-md-9">
		<div class="tc-tabs"><!-- Nav tabs style 1 -->
			<ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
				<li class="active"><a href="#p1" data-toggle="tab" aria-expanded="true"><i class="fa fa-edit bigger-130"></i>Edit Education</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="p1">
					<h2>Education Details</h2>
					<div class="hr hr-12 hr-double"></div>
					<?php echo form_open("/admin/education/edit/$education_id", array('class'=>"form-horizontal", 'role'=>"form")); ?>
						<?php if (validation_errors()): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Edit Education Errors</h4>
							<hr class="separator">
							<?php echo validation_errors(); ?>
						</div>
						<?php endif; ?>
						
						<?php if (isset($errors) && strlen($errors)): ?>
						<div class="alert note note-danger">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
							<h4><i class="fa fa-warning"></i> Edit Education Errors</h4>
							<hr class="separator">
							<p><?php echo $errors; ?></p>
						</div>
						<?php endif; ?>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Qualification:</label>
							<div class="col-sm-5">
								<input type="text" name="qualification" id="qualification" class="form-control" placeholder="e.g MCA, BCA" value="<?php echo (isset($_POST['qualification']))?set_value('qualification'):$education_qualification; ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-sm-3 control-label">University:</label>
							<div class="col-sm-5">
								<input type="text" name="university" id="university" class="form-control" placeholder="e.g Anna University" value="<?php echo (isset($_POST['university']))?set_value('university'):$education_university; ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-sm-3 control-label">State:</label>
							<div class="col-sm-5">
								<input type="text" name="state" id="state" class="form-control" value="<?php echo (isset($_POST['state']))?set_value('state'):$education_state; ?>">
							</div>
						</div>													
						<div class="form-group">
							<label class="col-sm-3 control-label">Description:</label>
							<div class="col-sm-5">
                                <textarea name="description" id="description" class="form-control" style="resize: none;"><?php echo (isset($_POST['description']))?set_value('description'):$education_description; ?></textarea>
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-sm-3 control-label">From:</label>
							<div class="col-sm-4">
                                <?php $from = (isset($_POST['from']))?set_value('from'):$education_from; ?>
								<?php echo generate_years_html(' class="form-control selectpicker" name="from" id="from" data-style="btn" data-live-search="true" data-width="170px"', $from); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">To:</label>
							<div class="col-sm-4">
                                <?php $to = (isset($_POST['to']))?set_value('to'):$education_to; ?>
								<?php echo generate_years_html(' class="form-control selectpicker" name="to" id="to" data-style="btn" data-live-search="true" data-width="170px"', $to, TRUE); ?>
							</div>
						</div>					
						
						<div class="form-actions">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<input type="hidden" name="update_education" value="1" />
                                    <input type="hidden" name="id" value="<?php echo $education_id; ?>" />
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Update Education</button>
								</div>
							</div>
						</div>
                        
					<?php echo form_close(); ?>
				</div>
			</div>
		</div><!--nav-tabs style 1-->
	</div>
</div>