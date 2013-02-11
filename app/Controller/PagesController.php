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
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Collegue');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
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
