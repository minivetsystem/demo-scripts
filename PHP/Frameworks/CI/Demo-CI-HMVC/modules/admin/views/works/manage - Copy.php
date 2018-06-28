<div class="row space-2x">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-4">
				<h5 class="heading text-uppercase bolder">Featured <small><a href="#">(View All)</a></small></h5>
				<div class="well well-sm white">
					<ul class="list-unstyled">
						<li>
							<div class="media"><a class="pull-left" href=""><img src="http://placehold.it/50x50/#ffffff/#000000" class="img-responsive" alt="50x50"></a><div class="media-body"><p class="no-margin">Product name</p><p><strong>$5,900</strong></p></div></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h5 class="heading text-uppercase bolder">Last Order <small><a href="#">(View All)</a></small></h5>
				<div class="well well-sm white">
					<ul class="list-unstyled">
						<li><div class="media"><a class="pull-left" href=""><img src="http://placehold.it/50x50/#ffffff/#000000" class="img-responsive" alt="50x50"></a><div class="media-body"><p class="no-margin">10 items</p><p><strong>$5,900</strong></p></div></div></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h5 class="heading text-uppercase bolder">Best seller <small><a href="#">(View All)</a></small></h5>
				<div class="well well-sm white">
					<ul class="list-unstyled">
						<li><div class="media"><a class="pull-left" href=""><img src="http://placehold.it/50x50/#ffffff/#000000" class="img-responsive" alt="50x50"></a><div class="media-body"><p class="no-margin">Product name</p><p><strong>$5,900</strong></p></div></div></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="portlet">
			<div class="portlet-heading inverse">
				<div class="portlet-title"><h4><i class="fa fa-edit"></i>Managed Products</h4></div>
				<div class="portlet-widgets"><a href="#" class="tooltip-primary" data-placement="left" data-rel="tooltip" title="" data-original-title="Add product" data-toggle="modal" data-target="#add-products"><i class="fa fa-plus"></i></a></div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body no-padding-top no-padding-bottom">
				<table id="products" class="datatable table table-hover table-striped table-bordered tc-table">
					<thead>
						<tr>
							<th><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>
							<th data-hide="">ID</th>
							<th data-hide="">Position</th>
							<th data-hide="">Company</th>
							<th data-hide="">Environments</th>
							<th data-hide="">From</th>
							<th data-hide="">To</th>
							<th data-hide="" style="display:none;">Status</td>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($works) && count($works)>0): ?>
					<?php foreach($works AS $work): ?>
						
					<?php endforeach; ?>
					<?php else: ?>
						
					<?php endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="9">
								<div class="btn-group pull-left">
									<button class="btn btn-primary dropdown-toggle hidden-xs" data-toggle="dropdown">with Selected <span class="caret"></span></button>
									<button class="btn btn-primary dropdown-toggle visible-xs" data-toggle="dropdown"><i class="fa fa-cog icon-only"></i></button>
									<ul class="dropdown-menu dropdown-primary" role="menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>

			</div>
		</div>
		<!-- END YOUR CONTENT HERE -->
	</div>
</div>

<!-- Add Products Modal -->
<div class="modal fade modal-scroll" id="add-products" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Products</h4>
			</div>
			<div class="modal-body padding-2x">
				<form role="form" method="post">
					<div class="form-group">
						<label>Products Title</label>
						<input type="text" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Short Description</label>
						<textarea  class="form-control" ></textarea>
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
											
					<div class="form-group">
						<label>Price</label>
						<input type="text" class="form-control">
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
											
					<div class="form-group">
						<label>Status</label>
						<select class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
						</select>
					</div>
					
					<div class="form-horizontal">						
						<div class="form-group">
							<label class="col-sm-2 control-label">Featured?</label>
							<div class="col-sm-3">
								<div class="space-4 hidden-xs"></div>
								<label>													
									<input name="switch-field-1" class="tc tc-switch tc-switch-5" type="checkbox" />
									<span class="labels"></span>
								</label>
							</div>
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
<script src="assets/js/plugins/bootstrap-wysiwyg/jquery.hotkeys.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
<script src="assets/js/plugins/bootstrap-wysiwyg/ek-wysiwyg.js"></script>
<script src="assets/js/plugins/fuelux/spinner.min.js"></script>
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
		
		//Bootstrap Wysiwyg Editor
		$('#desc').ek_wysiwyg({
			toolbar:
				[
				'bold',
				'italic',
				'strikethrough',
				'underline',
				null,
				'justifyleft',
				'justifycenter',
				'justifyright',
				null,
				'createLink',
				'unlink',
				null,
				'insertImage'
			]
		}).prev().addClass('editor-style2 text-center');
		
		$('#MySpinner-1').spinner();
		
		// Custome File Input
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});

		$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
    
			var input = $(this).parents('.input-group').find(':text'),
			log = numFiles > 1 ? numFiles + ' files selected' : label;
    
			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
    
		});
	
	});
</script>