
<!---------------MANAGE EXAM LISTS------------>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header well">
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
		</div>
        
		<div class="box-content">
        	<!-----CUSTOM MESSAGE------>
        	<?php echo validation_errors(); ?>

            <?php if($this->session->flashdata('exam_message') != ''):?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $this->session->flashdata('exam_message');?>
                </div>
            <?php endif;?>
            <!-----CUSTOM MESSAGE------>
            
        	<!----TAB UI FOR EXAMS-->
            <ul class="nav nav-tabs" id="myTab">
            	<?php if(isset($edit) == true):?>
                	<li><a href="#edit">Edit exam</a></li>
                <?php endif;?>
                <li class="active"><a href="#manage">Manage exams</a></li>
                <li><a href="#create">Create exam</a></li>
            </ul>
            
            
            <div id="myTabContent" class="tab-content">
            	<!------EDIT EXAM------->
            	<?php 
				if(isset($edit) == true):
				$exam_info	=	$this->crud_model->get_exam_info($edit_exam_id);
				foreach($exam_info as $row):?>
            	
                <div class="tab-pane" id="edit">
                	<form class="form-horizontal" method="post" 
                    	action="<?php echo base_url();?>index.php/admin/exams/edit/<?php echo $edit_exam_id;?>">
                        <fieldset>
                            <legend><i class="icon32 icon-edit"></i>Edit exam</legend>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Exams name </label>
                                <div class="controls">
                                    <input type="text" class="span6 typeahead" name="name" value="<?php echo $row['name'];?>" placeholder="e.g 1st semester exam"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Date </label>
                                <div class="controls">
									<textarea class="span6 autogrow" name="date" ><?php echo $row['date'];?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Comment </label>
                                <div class="controls">
									<textarea class="span6 autogrow" name="comment" ><?php echo $row['comment'];?></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="hidden" name="operation" value="edit"  />
                                <input type="submit" class="btn btn-primary" value="Edit exam"/>
                            </div>
                        </fieldset>
                    </form>
                
                </div>
                <?php endforeach;endif;?>
                
            	<!------MANAGE EXAMS------->
                <div class="tab-pane active" id="manage">
                	<form class="form-horizontal" method="post" >
                        <fieldset>
                            <legend><i class="icon32 icon-gear"></i>Manage exams</legend>
                        </fieldset>
                    </form>
                    <table class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th>Exams list</th>
                                <th>Date</th>
                                <th>Comment</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php 
                           $exams	=	$this->crud_model->get_exams(); 
                           foreach($exams as $row): ?>
                        <tr>
                            <td>
                                <?php echo $row['name'];?>
                            </td>
                            <td>
                                <?php echo $row['date'];?>
                            </td>
                            <td class="center">
                                <?php echo $row['comment'];?>
                            </td>
                            <td class="center">
                                <a class="btn btn-info" 
                                	href="<?php echo base_url();?>index.php/admin/exams/edit/<?php echo $row['exam_id'];?>">
                                        <i class="icon-edit icon-white"></i>  
                                            Edit                                            
                                        		</a>
                                <a class="btn btn-danger" onclick="return confirm('delete ?')"
                                	href="<?php echo base_url();?>index.php/admin/exams/delete/<?php echo $row['exam_id'];?>">
										<i class="icon-trash icon-white"></i> 
											Delete
                                            	</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    </table>

                </div>
                <div class="tab-pane" id="create">
                	<!------CREATE NEW EXAM------->
                	<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/admin/exams">
                        <fieldset>
                            <legend><i class="icon32 icon-square-plus"></i>Create new exam</legend>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Exams name </label>
                                <div class="controls">
                                    <input type="text" class="span6 typeahead" name="name" placeholder="e.g 1st semester exam"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Date </label>
                                <div class="controls">
									<textarea class="span6 autogrow" name="date" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Comment </label>
                                <div class="controls">
									<textarea class="span6 autogrow" name="comment" ></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="hidden" name="operation" value="create"  />
                                <input type="submit" class="btn btn-primary" value="Create exam"/>
                                <input type="reset" class="btn" value="reset form"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        
			
		</div>
	</div>
</div>


