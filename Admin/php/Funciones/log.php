<?php

	include("../connection/connection.php");/*incluye el archivo donde esta la coneccion */

	$email = $_POST["email"] ;
	$password = $_POST["password"];

	$db = dbConnect();
	
	try{
		$updatedCount = $db->query('select isRegister("'.$email.'","'.$password.'");');
		if($update ){
			print("<script>window.location.replace('../../index.html');</script>"); 
		}
		else{
			$mensaje = 'Incorrect password or user';
            print ("<script>alert('$mensaje')</script>");
			print("<script>window.location.replace('../../index.html');</script>");
		}
 
	}
	catch( Exception $e){
		$mensaje = 'Could not enter the system';
            print ("<script>alert('$mensaje')</script>");
            print("<script>window.location.replace('../../pages/examples/login.html');</script>"); 
	}

?>