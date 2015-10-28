<?php
$cb = new Couchbase("http://counterstrikevm.cloudapp.net:8091/", "", "", "default");

$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["confirm"];
//Sanitize DATA HERE
if ($password ==  $_POST["confirm"] ){
	$user = $cb -> get($email);
	if($user == false) {
		$cb->set($email, $password);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Registered!')
		window.location.href='http://localhost/';
		</SCRIPT>");			
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('User already exist!')
		window.location.href='http://localhost/';
		</SCRIPT>");
	}
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Password does not match!')
    window.location.href='http://localhost/';
    </SCRIPT>");
}
?>