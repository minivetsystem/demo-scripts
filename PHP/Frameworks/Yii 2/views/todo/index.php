<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use app\assets\CalenderAsset;

CalenderAsset::register($this);


$this->title = 'Work List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="clearfix text-right">
        <a class="btn btn-primary " href="javascript:;" onclick="getAddCalender()">Add In WorkList</a>
    </div>

    <div style="margin-top: 10px;">
        <div id='calendar'></div>
    </div>
</div>

<div class="modal fade" id="site_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
