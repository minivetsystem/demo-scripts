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
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common/fontello.css" />
    
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Backend/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/jquery-ui/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/jquery.bootstrap-growl.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common/formvalidator.js"></script>
    <!--[if IE 9]>
        <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
    <![endif]-->
    <!--[if IE 8]>
        <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
    <![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
    <div id="frameMain" class="container pageheader pad30px">
    	<div class="panel">
            <div class="panel-default">
            	<div class="panel-heading">
					<?php
                    if(isset($this->breadcrumbs)):
                        $this->widget('application.components.Backend.com_breadcrumb.AdminBreadCrumb', array(
                          'crumbs' => $this->breadcrumbs,
                          'delimiter' => ' &raquo; ',
                        ));
                    endif
                    ?>
                </div>
                <div class="panel-body">
					<?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
   <div id="loadingScreen"></div>
</body>
</html>
