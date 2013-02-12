<?php 

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

	public function admin_login() {
	  if ($this->request->is('post')) {
	      if ($this->Auth->login()) {
	          $this->redirect($this->Auth->redirect());
	      } else {
	          $this->Session->setFlash(__('Hibás felhasználónév vagy jelszó!'));
	      }
	  }
	  $this->set('body_id', 'collegues');
	}

	public function admin_logout() {
		$this->set('body_id', 'collegues');
	  $this->redirect($this->Auth->logout());
	}

}
?>