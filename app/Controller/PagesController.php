<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

public function beforeFilter() {
  parent::beforeFilter();
  $this->Auth->allow('display');
}

	public $name = 'Pages';
	public $uses = array('Collegue', 'Document');


	public function display() {

		$hun_url['kollegak'] = 'collegues';
		$hun_url['szakterulet'] = 'specialization';
		$hun_url['kapcsolat'] = 'contact';
		$hun_url['dokumentumok'] = 'documents';
		$hun_url['adatkezeles'] = 'privacy';
		$hun_url['szabalyzat'] = 'policies';

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if($path[0] == 'en'){
			array_shift($path);
			$lang = 'en/';
			$this->set('current_page_hun', array_search($path[0], $hun_url));
			$this->set('current_page_eng', $path[0]);
		}else{
			$lang = '';
			$this->set('current_page_hun', $path[0]);
			if(isset($hun_url[$path[0]])){
				$path[0] = $hun_url[$path[0]];
			}
			$this->set('current_page_eng', $path[0]);
		}

		$body_id = $path[0];

		if (!empty($path[0])) {
			$page = $path[0];
			if($page == 'collegues'){
				$this->set('collegues', $this->Collegue->find('all', array('order' => 'position')));
			}
			if($page == 'documents'){
				$this->set('documents', $this->Document->find('all'));	
			}
		}

		if((!file_exists(APP . 'View/Pages/' . $page . '.ctp')) && ($page != 'collegues')){
			throw new NotFoundException('');
		}

		if (!empty($path[1])) {
			$subpage = '/' . $path[1];
			$collegue = $this->Collegue->findBySlug($path[1]);
			$body_id = 'collegue';
			if(empty($collegue)){
				throw new NotFoundException('');
			}else{
				$this->set('collegue', $collegue);
				$collegue = true;
			}
		}

		$this->set(compact('page', 'subpage'));
		$this->set('title_for_layout', __($page));
		$this->set('body_id', $body_id);
		$this->set('lang', $lang);

		if(isset($collegue)){
			$this->render('collegue');
		}else{
			$this->render(implode('/', $path));
		}
	}
}
