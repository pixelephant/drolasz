<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ColleguesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Collegues';
	public $scaffold = 'admin';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Collegue');

	public function admin_index(){
		$this->set('body_id', 'collegues');
		$this->set('collegues', $this->Collegue->find('all'));
	}

	public function admin_delete(){
		$params = $this->request->params;
		$collegue = $this->Collegue->find('first', array('conditions' => array('Collegue.id' => $params['id'])));
		$this->Collegue->delete($params['id']);
		$this->redirect('/admin');
	}

	function admin_edit(){
		$this->set('body_id', 'collegues');
		$params = $this->request->params;
		$collegue = $this->Collegue->findById($params['id']);

		$this->request->data = $collegue;
	}

	function admin_add(){
		$this->set('body_id', 'collegues');

		if(!empty($this->request->data['Collegue'])){
			if(isset($this->request->data['Collegues']['id'])){
				$this->Collegue->findById($this->request->data['Collegue']['id']);
			}else{
				$this->Collegue->create();
			}

			if($this->request->data['Collegue']['image']['size'] == 0 || empty($this->request->data['Collegue']['image']['tmp_name'])){
				unset($this->request->data['Collegue']['image']);
			}

			if($this->Collegue->save($this->request->data)){
				$this->Session->setFlash(__('Sikeres mentés!'));
			}else{
				$this->Session->setFlash(__('Sikertelen mentés!'));
			}
		}
		$this->redirect(array('action' => 'admin_edit', $this->Collegue->id));
	}

}
