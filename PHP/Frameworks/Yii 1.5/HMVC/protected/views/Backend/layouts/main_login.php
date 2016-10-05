<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Backend/style.css" media="screen, projection" />
    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaqueries.js"></script>
    <![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="loginpage">
	<div class="loginbox">
    	<?php echo $content; ?>
    </div>
    
</body>
</html>
