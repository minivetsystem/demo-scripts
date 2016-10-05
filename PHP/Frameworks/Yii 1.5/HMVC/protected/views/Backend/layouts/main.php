<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/style.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/bootstrap-combined.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/jquery-ui/smoothness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/formvalidator.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/colors.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/jquery-ui/smoothness/jquery.alerts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/common/chosen-jquery/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/fontello.css" />
    
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Backend/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/jquery-ui/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Backend/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Backend/general.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Backend/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/jquery.bootstrap-growl.js"></script>
    <? if(Yii::app()->controller->id == 'updatelist' && Yii::app()->controller->action->id == 'datalist') { ?>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/validator_updatelist.js"></script>
    <? } else { ?>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/formvalidator.js"></script>
    <? } ?>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/jquery-ui/jquery.alerts.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/chosen-jquery/chosen.jquery.js"></script>
    <!--[if IE 9]>
        <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
    <![endif]-->
    <!--[if IE 8]>
        <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaqueries.js"></script>
    <![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">YII TEST<span> - </span></h1>
            <span class="slogan">&nbsp;</span>
			<?php $this->widget('application.components.Backend.com_topmenu.TMenu', array()); ?>
            <br clear="all">
        </div>

        <div class="right">
        	<div class="mobilemenu">
                <a href="#show_mobilemenu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/images/icons/mobilemenu.png" width="26" height="30" /></a>
        	</div>
        	<div class="notification">
                <a class="count" href="<?=Yii::app()->createUrl('admin/notifications')?>"><span>9</span></a>
        	</div>
            <div class="userinfo">
            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/images/thumbs/avatar.png" alt="">
                <span> <?=Yii::app()->user->name?></span>
            </div>
            
            <div style="display: none; width:360px;" class="userinfodrop">
            	<div class="avatar">
                	<a href="javascript:void(0);"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/images/thumbs/avatarbig.png" alt="" width="95"></a>
                </div>
                <div class="userdata">
                	<h4> <?=Yii::app()->user->name?></h4><br>
                    <span class="email"> <?=Yii::app()->user->UserEmail?></span>
                    
                    <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
								array('label'=>'Edit Profile', 'url'=>array('/admin/index')),
								array('label'=>'Change Password', 'url'=>array('/admin/changepassword')),
								array('label'=>'Users List', 'url'=>array('/users/manage')),
								array('label'=>'Logout', 'url'=>array('/admin/logout'), 'visible'=>!Yii::app()->user->isGuest),
							),
					)); ?>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div id="mobilemenu_holder">
    	<?php $this->widget('application.components.Backend.com_topmenu.TMenu', array()); ?>
        <br clear="all">
    </div>
    
	<div id="admin-container">
    	<?php echo $content; ?>
    </div>
   <div id="loadingScreen"></div>
</body>
</html>
