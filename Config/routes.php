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
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
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
	Router::connect(
		'/',
		array('controller' => 'pages', 'action' => 'display', 'home')
	);
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	//Router Testes Ronaldo
	Router::connect(
		'/quem-somos',
		array('controller'=>'pages', 'action'=>'display', 'quem-somos')
	);
	Router::connect(
		'/sobre-o-evento',
		array('controller'=>'pages', 'action'=>'display', 'sobre')
	);
	Router::connect(
		'/cidades',
		array('controller'=>'cidades', 'action'=>'index')
	);

	Router::connect(
		'/inscreva-se',
		array('controller'=>'inscricoes', 'action'=>'index')
	);
	Router::connect(
		'/inscreva-se/sucesso',
		array('controller'=>'pages', 'action'=>'display', 'inscricao-sucesso')
	);

	Router::connect(
		'/cidades/:urlcidade',
		array('controller' => 'cidades', 'action' => 'view'),
		array('pass' => array('urlcidade'), 'urlcidade' => '[a-z0-9-]+')
	);

	Router::connect(
		'/palestrantes/:palestrante',
		array('controller'=>'palestrantes', 'action'=>'view'),
		array('pass' => array('palestrante'), 'palestrante' => '[a-z0-9-]+')
	);

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
