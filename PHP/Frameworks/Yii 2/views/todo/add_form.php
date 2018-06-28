<?php
use yii\helpers\Url;
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Add In worklist</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= Url::to(['todo/addtoworklist'])?>" id="work_add_form">
            <div class="modal-body">

                <div class="form-group">
                    <label for="title" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="Worklist[title]">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="title" class="col-form-label">date:</label>
                    <input type="text" class="form-control datepicker" id="date" readonly name="Worklist[date]">
                    <span class="help-block"></span>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Start time:</label>
                            <input type="text" class="form-control timepicker" readonly id="start_time"
                                   name="Worklist[start_time]">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="col-form-label">End time:</label>
                            <input type="text" class="form-control timepicker" readonly id="end_time" name="Worklist[end_time]">
                            <span class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="description" name="Worklist[description]"></textarea>
                    <span class="help-block"></span>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>
        </form>
    </div>
</div>