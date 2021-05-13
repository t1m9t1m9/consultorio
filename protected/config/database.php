<?php

// This is the database connection configuration.
return array(
//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
    'class' => 'CDbConnection',
	'connectionString' => 'mysql:host=localhost;dbname=consultorio',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'glim',
	'charset' => 'utf8',

);