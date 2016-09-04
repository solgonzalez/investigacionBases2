<?php
/**
 * This file can be used as a starting point to understand way OrientDB-PHP
 * works.
 * @link https://github.com/AntonTerekhov/OrientDB-PHP
 * @package OrientDB-PHP
 * @subpackage Connection
 */


require_once ('../../../OrientDB/OrientDB.php');

function dbConnect(){
	$rootPassword = 'root';
	$dbName = 'root';
	$clusterName = 'default';
	$database = 'dataBaseConnect';
	echo "Trying to connect";
	try {
    	$db = new OrientDB('localhost', 2425);
	}
	catch (Exception $e) {
    	die('Failed to connect: ' . $e->getMessage());
	}
	echo "Trying to connect 2";
	try {
    	$connect = $db->connect('root', $rootPassword);
    
	}
	catch (OrientDBException $e) {
    	die('Failed to connect():2 ' . $e->getMessage());
	}
	$db->DBOpen('dataBaseConnect', 'root', 'root');
	return $db;
}

$db->DBOpen('prueba', 'root', 'root');

$data = $db->select('select First_name from persona ');
echo $data[0];

