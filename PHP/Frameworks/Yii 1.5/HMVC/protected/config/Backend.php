<?php

return CMap::mergeArray(
        require(dirname(__FILE__) . '/main.php'), array(
			'name'=>'YII TEST',
			'homeUrl'=>'admin',
			'defaultController'=>'admin/login',
			'import' => array (
				'application.extensions.yii-js-t.*',
			),
            'components' => array(
				'widgetFactory'=>array(
					'widgets'=>array(
						'CGridView'=>array(
							 'cssFile' => '/assets/default/Backend/common/gridview.css',
						),
					),
				),
				/*'messages' => array(
					'class' => 'JsTPhpMessageSource'
				 ),*/
                'admin_user' => array(
					//tell the application to use your WebUser class instead of the default CWebUser
					'class' => 'application.components.Backend.com_user.WebUser',
					'loginUrl' => 'admin/login',
                    'allowAutoLogin'=>false,
                    'autoRenewCookie' => false,
					
				),
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'showScriptName' => false,
                    'rules' => array(
                        'Backend/' => 'admin/login',
                        'Backend/<_c>/' => '<_c>',
                        'Backend/<_c>/<_a>' => '<_c>/<_a>',
						
						'Backend/users' => 'users/manage',
                        'Backend/users/<_c>' => '<_c>',
                        'Backend/users/<_c>/<_a>' => '<_c>/<_a>',
                    ),					
                ),
				'errorHandler'=>array(
					// use 'site/error' action to display errors
					'errorAction'=>'admin/error',
				),
						 
            )
        )
);