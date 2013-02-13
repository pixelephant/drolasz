<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/users/login', array('controller' => 'users', 'action' => 'login', 'admin' => true));
	Router::connect('/users/logout', array('controller' => 'users', 'action' => 'logout', 'admin' => true));
	Router::connect('/admin', array('controller' => 'collegues', 'action' => 'index', 'admin' => true));
	Router::connect('/admin/collegues/delete/:id', array('controller' => 'collegues', 'action' => 'delete', 'admin' => true));
	Router::connect('/admin/collegues/edit/:id', array('controller' => 'collegues', 'action' => 'edit', 'admin' => true));
	Router::connect('/admin/collegues/edit', array('controller' => 'collegues', 'action' => 'edit', 'admin' => true));
	Router::connect('/admin/collegues/add', array('controller' => 'collegues', 'action' => 'add', 'admin' => true));
	
	Router::connect('/admin/documents/delete/:id', array('controller' => 'documents', 'action' => 'delete', 'admin' => true));
	Router::connect('/admin/documents/edit/:id', array('controller' => 'documents', 'action' => 'edit', 'admin' => true));
	Router::connect('/admin/documents/edit', array('controller' => 'documents', 'action' => 'edit', 'admin' => true));
	Router::connect('/admin/documents/add', array('controller' => 'documents', 'action' => 'add', 'admin' => true));
	Router::connect('/admin/dokumentumok', array('controller' => 'documents', 'action' => 'index', 'admin' => true));
	
	Router::connect('/en', array('controller' => 'pages', 'action' => 'display', 'en', 'home'));
	Router::connect('/en/*', array('controller' => 'pages', 'action' => 'display', 'en'));
	Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
