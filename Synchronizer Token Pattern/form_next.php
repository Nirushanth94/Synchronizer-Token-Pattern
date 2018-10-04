<?php

require_once 'token.php';


$csrf_value = $_POST["token"];


if(isset($_POST['name']))
{
	if(csrf_token::check_csrf_token($csrf_value,$_COOKIE['csrf_cookie']))
	{
		
		echo "Hi ".$_POST['name'].", You successfully submit details";	
		
	}
	else
	{
		echo " Cross-Site Request Forgery Attack found on your site!! which is stopped using Synchronizer Token Patterns ";
	}
}

?>