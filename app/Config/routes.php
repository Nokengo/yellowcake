<?php

	// GERAL
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));

	// ADMIN
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin'=>true));

	// SITE


	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
