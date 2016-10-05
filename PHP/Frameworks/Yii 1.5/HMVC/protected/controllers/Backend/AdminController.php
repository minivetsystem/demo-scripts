<?php

class AdminController extends BackEndController
{

	public $defaultAction = 'login';
	
	/**
	 * Declares class-based actions.
	 */
	 	
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{	
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout = "panel";
		$this->render('index');
	}
	
	/**
	 * This is the default 'language_editor' action that is invoked
	 */
	public function actionLanguage_editor()
	{	
		$this->layout = "panel";
		$this->render('language_editor');
	}
	
	/**
	 * This is the default 'general_settings' action that is invoked
	 */
	public function actionGeneral_settings()
	{	
		$this->layout = "panel";
		$this->render('general_settings');
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	
	public function actionError()
	{	
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else {
				$this->layout = "panel";
				$this->render('error', $error);
			}
		}
		else {
			$this->layout = "panel";
			$this->render('error');
		}
	}
	
	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if(isset(Yii::app()->user->role) && is_numeric(Yii::app()->user->role)) {
			$this->defaultAction = 'index';
			$this->redirect(Yii::app()->createUrl('admin/index'));
		}
		$model=new LoginForm('Backend');

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the administrator panel if valid
			if($model->validate() && $model->login()) {
				$modelUSER=Users::model()->findByPk(Yii::app()->user->UserID);
				$modelUSER->last_login = date('Y-m-d H:i:s');
				$modelUSER->last_login_ip = CHttpRequest::getUserHostAddress();
				$modelUSER->logged_in = 1;
				$modelUSER->save();
				$this->redirect(Yii::app()->createUrl('admin/index'));
			}
		}
		$this->layout = "main_login";
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Change password.
	 */
	public function actionChangepassword() {
	    $model = new ChangePasswordForm();
	    if(isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
	    }
	    if(isset($_POST['ChangePasswordForm'])) {
			$model->attributes=$_POST['ChangePasswordForm'];
			if($model->validate() && $model->changePassword()) {
				$currentUser = Users::model()->findByPk(Yii::app()->user->UserID);
				$mailData = array('full_name'=>$currentUser->full_name,'email'=>$currentUser->email,'username'=>$currentUser->username,'password'=>$currentUser->password);
				$mailController = new MailController;
				$mailController->_view='password_changed';
				$mailController->_mailData=$mailData;
				$mailController->_subject="Password Changed Successfully";
				$mailController->_recipient=Yii::app()->user->UserEmail;
				$mailController->_sender='info@yiitest.com';
				$sent = $mailController->actionSendMail();
				Yii::app()->admin_user->setFlash('success', '<strong>Exit!</strong> Password changed successfully.');
				$this->redirect( $this->action->id );
			}
	  	}
		$this->layout = "panel";
		$this->render('changepassword', array('model'=>$model));
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		$modelUSER=Users::model()->findByPk(Yii::app()->user->UserID);
		$modelUSER->logged_in = 0;
		$modelUSER->save();
		Yii::app()->admin_user->logout();
		$this->redirect(Yii::app()->createUrl('/admin/login'));
	}
}