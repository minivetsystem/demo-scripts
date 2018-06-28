<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('create_education_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('create_education_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('update_education_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('update_education_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('delete_education_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('delete_education_success') ?></p>
        </div>
        <?php endif; ?>
		<?php if($this->session->flashdata('delete_education_failure')): ?>
        <div class="alert note note-danger">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <p><?php echo $this->session->flashdata('delete_education_failure') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row space-2x">
	<div class="col-lg-12">
		<div class="portlet">
			<div class="portlet-heading inverse">
				<div class="portlet-title">
					<h4><i class="fa fa-edit"></i>&nbsp;Manage Educations</h4>
				</div>
				<div class="portlet-widgets"><a href="#" class="tooltip-primary" data-placement="left" data-rel="tooltip" title="" data-original-title="Add Education" data-toggle="modal" data-target="#add-skill"><i class="fa fa-plus"></i></a></div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body no-padding-top no-padding-bottom">
				<table id="listskills" class="datatable table table-hover table-striped table-bordered tc-table">
					<thead>
						<tr>
							<th><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>
							<th data-hide="phone,tablet">ID</th>
                            <th data-class="expand">Qualification</th>
							<th data-hide="phone,tablet">University</th>
                            <th data-hide="phone,tablet">State</th>
							<th data-hide="phone,tablet">Years</th>
							<th>Action</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($educations AS $education): ?>
						<tr>
							<td></td>
							<td><?php echo $education->education_id; ?></td>
                            <td><?php echo ucwords($education->education_qualification); ?></td>
							<td><?php echo $education->education_university; ?></td>
							<td><?php echo $education->education_state; ?></td>
							<td><?php echo $education->education_from .' -- '. $education->education_to; ?></td>
							<td><div class="btn-group btn-group-xs "><a href="<?php echo site_url("admin/education/edit/$education->education_id"); ?>" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a><a href="<?php echo site_url("admin/education/delete/$education->education_id"); ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete this education?);"><i class="fa fa-times icon-only"></i></a></div></td>
                            <td>&nbsp;</td>
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