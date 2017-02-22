<?php

	error_reporting(E_ALL);

	ini_set('display_errors', 1);

	//fitxer de configuracio
	require_once 'x.inc.php';
	
	use \X\Sys\Autoload;
	use \X\Sys\Core;

	$loader=new Autoload();
	$loader->register();

	//Registre de Namespace de ruta actual
	$loader->addNamespace('X\Sys', 'sys');

	Core::init();