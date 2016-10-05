<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Frontend/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Frontend/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Frontend/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Frontend/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Frontend/custom.css" />
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div id="header">
    	<div class="nav container">
            <div id="logo" class="floatLeft"><?php echo CHtml::encode(Yii::app()->name); ?></div>

            <div id="mainmenu" class="floatRight">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page/view/about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Forget Password', 'url'=>array('/account/recovery'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
            </div><!-- mainmenu -->
            <div class="clear"></div>
        </div>
	</div><!-- header -->

    <div class="container" id="page">
		<div id="content-holder">
			<?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
            <?php endif?>
        
            <?php echo $content; ?>
    
            <div class="clear"></div>
        </div>
    </div><!-- page -->

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Demo Comp.<br/>
		All Rights Reserved.<br/>
		<?php echo 'powered by <a href="http://democomp.com/">Demo Comp</a>'; ?>
	</div><!-- footer -->

</body>
</html>
