<?php

	$dbsite = 'localhost';
	$dbuser = 'root';
	$dbpw = '';
	$dbase = '370';

	$db = mysqli_connect($dbsite,$dbuser,$dbpw,$dbase);
	if(!$db){
		die('Database Connection lost: ' .mysqli_error($db));
	}

?>