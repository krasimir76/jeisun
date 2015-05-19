<?php
require_once "include.php";

galosh("_GET",$_GET);

galosh("_POST",$_POST);

if (isset($_POST["check"])&& $_POST['check'] =="1")
	
{
if( isset($_POST['ime']) && strlen($_POST['ime']) > 3 )
	
	{
		echo "VALID";
	}
	
	else 
	{
		echo "imeto e prekaleno kratko";
	}
}

else
{
	echo "INVALID";
}



