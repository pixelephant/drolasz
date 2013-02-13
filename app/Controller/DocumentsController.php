<?php

App::uses('AppController', 'Controller');

class DocumentsController extends AppController {

	public $name = 'Documents';
	public $scaffold = 'admin';

	public $uses = array('Document');

	public function admin_index(){
		$this->set('body_id', 'collegues');
		$this->set('documents', $this->Document->find('all'));
	}

	public function admin_delete(){
		$params = $this->request->params;
		$document = $this->Document->find('first', array('conditions' => array('Document.id' => $params['id'])));
		$this->Document->delete($params['id']);
		
		unlink('files/' . $document['Document']['file_hun']);
		unlink('files/' . $document['Document']['file_eng']);
		$this->redirect('/admin/dokumentumok');
	}

	function admin_edit(){
		$this->set('body_id', 'collegues');

		$params = $this->request->params;

		if(isset($params['id'])){
			$document = $this->Document->findById($params['id']);
			if(empty($document)){
				$this->redirect('/admin');
			}
			$this->set('id', $params['id']);
			$this->request->data = $document;
		}
	}

	function admin_add(){
		$this->set('body_id', 'documents');

		if(!empty($this->request->data['Document'])){
			if(isset($this->request->data['Document']['id'])){
				$document = $this->Document->findById($this->request->data['Document']['id']);
			}else{
				$this->Document->create();
			}

			if($this->request->data['Document']['file_hun']['size'] != 0 && !empty($this->request->data['Document']['file_hun']['tmp_name'])){
				$name = $this->request->data['Document']['file_hun']['name'];
  			move_uploaded_file($this->request->data['Document']['file_hun']['tmp_name'], $this->approot.'files/'.$name);
  			$this->request->data['Document']['file_hun'] = $name;
			}else{
				unset($this->request->data['Document']['file_hun']);
			}

			if($this->request->data['Document']['file_eng']['size'] != 0 && !empty($this->request->data['Document']['file_eng']['tmp_name'])){
				$name = $this->request->data['Document']['file_eng']['name'];
  			move_uploaded_file($this->request->data['Document']['file_eng']['tmp_name'], $this->approot.'files/'.$name);
  			$this->request->data['Document']['file_eng'] = $name;
			}else{
				unset($this->request->data['Document']['file_eng']);
			}

			if($this->Document->save($this->request->data)){
				$this->Session->setFlash(__('Sikeres mentés!'));
			}else{
				$this->Session->setFlash(__('Sikertelen mentés!'));
			}
		}
		$this->redirect(array('action' => 'admin_edit', $this->Document->id));
	}

}