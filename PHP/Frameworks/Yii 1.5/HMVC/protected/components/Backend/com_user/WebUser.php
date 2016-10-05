<?php
/* Author :: Pritam */
/**
 * @property boolean $isAdmin
 */
class WebUser extends CWebUser {
	
	private $_admin_user;
	
	function init() {
		/*if($this->admin_user) {
			echo $this->admin_user->role;
		}*/
	}
	/**
	 * is the user a administrator ?
	 * @return boolean
	 */
	function getIsAdmin(){
		return ( $this->user && $this->user->role == '0' );
	}
	/**
	 * get the logged user
	 * @return User|null the user active record or null if user is guest
	 */
	function getUser(){
		if( $this->isGuest )
			return null;
		if( $this->_admin_user === null ){
			$this->_admin_user = Users::model()->findByPk( $this->id );
		}
		return $this->_admin_user;
	}
}