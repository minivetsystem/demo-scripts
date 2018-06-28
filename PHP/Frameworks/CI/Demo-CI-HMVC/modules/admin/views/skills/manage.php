<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('create_skill_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('create_skill_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('update_skill_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('update_skill_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('delete_skill_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('delete_skill_success') ?></p>
        </div>
        <?php endif; ?>
		<?php if($this->session->flashdata('delete_skill_failure')): ?>
        <div class="alert note note-danger">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('delete_skill_failure') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row space-2x">
	<div class="col-lg-12">
		<div class="portlet">
			<div class="portlet-heading inverse">
				<div class="portlet-title">
					<h4><i class="fa fa-edit"></i>&nbsp;Managed Skills</h4>
				</div>
				<div class="portlet-widgets"><a href="#" class="tooltip-primary" data-placement="left" data-rel="tooltip" title="" data-original-title="Add Skill" data-toggle="modal" data-target="#add-skill"><i class="fa fa-plus"></i></a></div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body no-padding-top no-padding-bottom">
				<table id="listskills" class="datatable table table-hover table-striped table-bordered tc-table">
					<thead>
						<tr>
							<th><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>
							<th data-hide="phone,tablet">ID</th>
                            <th data-class="expand">Name</th>
							<th data-hide="phone,tablet">Type</th>
                            <th data-hide="phone,tablet">Percentage</th>
							<th data-hide="phone,tablet">Years</th>
							<th data-hide="phone">Status</th>
							<th>Action</th>
                            <th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($skills AS $skill): ?>
						<tr>
							<td></td>
							<td><?php echo $skill->skill_id; ?></td>
                            <td><?php echo ucwords($skill->skill_name); ?></td>
							<td><?php echo $skill->skill_type; ?></td>
							<td><?php echo $skill->skill_percent; ?></td>
							<td><?php echo $skill->skill_exp; ?></td>
							<td><span class="label label-active">Active</span></td>
							<td><div class="btn-group btn-group-xs "><a href="<?php echo site_url("admin/skills/edit/$skill->skill_id"); ?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a><a href="<?php echo site_url("admin/skills/delete/$skill->skill_id"); ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete this skill?);"><i class="fa fa-times icon-only"></i></a></div></td>
                            <td>&nbsp;</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
					<tfoot></tfoot>
				</table>
			</div>
		</div>
		<!-- END YOUR CONTENT HERE -->
	</div>
</div>

<!-- Add Skill Modal -->
<div class="modal fade modal-scroll" id="add-skill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Products</h4>
			</div>
			<div class="modal-body padding-2x">
				<form role="form" method="post">
					<div class="form-group">
						<label>Products Title</label>
						<input type="text" class="form-control">
					</div>					
					<div class="form-group">
						<label>Description</label>
						<div class="wysiwyg-editor" id="desc" style="height: 150px;"></div>
					</div>											
					<div class="form-group">
						<label>Category</label>
						<select class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
					</div>
					
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2">Quantity</label>
							<div class="col-sm-4">
								<div id="MySpinner-1" class="spinner">
									<div class="input-group input-small">
										<input type="text" class="spinner-input form-control">
										<div class="spinner-buttons input-group-btn btn-group-vertical">
											<button type="button" class="btn spinner-up btn-xs">
												<i class="fa fa-chevron-up icon-only"></i>
											</button>
											<button type="button" class="btn spinner-down btn-xs">
												<i class="fa fa-chevron-down icon-only"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Products Image</label>
						<div class="input-group">
							<span class="input-group-btn">
								<span class="btn btn-file">
									Browse <input type="file" multiple>
								</span>
							</span>
							<input type="text" class="form-control" readonly>
						</div>
					</div>										
					<div class="form-actions no-padding-bottom">
						<div class="btn-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>												
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- PAGE LEVEL PLUGINS JS -->
<script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/datatables/datatables.js"></script>
<script src="assets/js/plugins/datatables/datatables.responsive.js"></script>
<script src="assets/js/plugins/datatables/datatables.init.js"></script>
<script>
jQuery(function($) {
	//for table master checkbox demo
	$('table th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
			this.checked = that.checked;
			$(this).closest('tr').toggleClass('selected');
		});
				
	});
});
</script>