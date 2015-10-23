<?php
$cb = new Couchbase("counterstrikevm.cloudapp.net:8091", "", "", "default");
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$db_password = $cb -> get($email);
if($db_password != false){
	if($db_password==$password){	
		$_SESSION["email"] = $email;
		header("location: member.php");		
	}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong Password!')
		window.location.href='http://localhost/';
		</SCRIPT>");
	}	
}
else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('User does not exist!')
    window.location.href='http://localhost/';
    </SCRIPT>");
}
?>