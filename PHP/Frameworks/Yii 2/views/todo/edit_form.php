<?php

use yii\helpers\Url;

?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Work details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Title</td>
                        <td><?= $model->title ?></td>

                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?= $model->date ?></td>

                    </tr>
                    <tr>
                        <td>Time Duration</td>
                        <td><?= $model->start_time . " To " . $model->end_time ?></td>
                    </tr>
                    <tr>
                        <td>Work Status</td>
                        <td>
                            <span class="event_<?= $model->work_status ?>"><?= ucfirst($model->work_status) ?></span>
                            <?php
                            if ($model->work_status == "pending") {
                                ?>

                                <p>
                                    <a href="javascript:;" onclick="changeStatus(this)" data-id="<?= $model->id?>">Click here</a> to change work status as completed.
                                </p>
                            <?php } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <h4>Details</h4>
                <p>
                    <?php echo nl2br($model->description) ?>
                </p>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>

    </div>
</div>