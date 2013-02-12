<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
    'Session',
    'Auth' => array(
      'loginRedirect' => array('controller' => 'collegues', 'action' => 'index', 'admin' => true),
      'logoutRedirect' => array('controller' => 'users', 'action' => 'login', 'admin' => true),
      'authorize' => array('Controller')
    )
  );

	public function isAuthorized($user) {    
    return true;
	}

	public function beforeFilter(){			
			parent::beforeFilter();

			if(isset($this->params['pass'][0]) && $this->params['pass'][0] == 'en'){
				$this->Session->write('Config.language', 'eng');
			}else{
				$this->Session->write('Config.language', 'hun');
			}
			Configure::write('Config.language', $this->Session->read('Config.language'));

			if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin'){
      	$this->layout = 'default_admin';        
      }
		}

}
