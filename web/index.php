<?php

	require("../includes/config.php");
	
	if(!empty($_SESSION["id"]))
	{
		redirect("chat.php");
		exit();
	}
	else
	{
		redirect("login.php");
		exit();
	}
?>
