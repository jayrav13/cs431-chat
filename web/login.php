<?php

	require("../includes/config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST["login"]))
		{
			$result = query("SELECT * FROM users WHERE username = ? and password = ?", $_POST["username"], md5($_POST["password"]));
			if(count($result) == 0)
			{	
				render("login.php", ["title" => "Login", "error" => "Credentials not found. Please register!"]);
			}	
			else
			{
				$_SESSION["id"] = $result[0]["id"];
				redirect("index.php");
			}
		}
		elseif(isset($_POST["register"]))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			$confirm = $_POST["confirm-password"];		

			if(!ctype_alnum($username) || !ctype_alnum($password))
			{	
				render("login.php", ["title" => "Login", "error" => "Username and Password must be alphanumeric."]);
			}
			elseif(strlen($username) < 8 || strlen($password) < 8)
			{
				render("login.php", ["title" => "Login", "error" => "Username and Password must be 8 characters."]);
			}
			elseif($password != $confirm)
			{
				render("login.php", ["title" => "Login", "error" => "Both passwords must match."]);
			}
			else
			{
				$result = query("INSERT INTO users (username, password) VALUES (?, ?)", $username, md5($password));
				
				if(count($result) == 0)
				{
					$query_id = query("SELECT LAST_INSERT_ID() AS id");
					$_SESSION["id"] = $query_id[0]["id"];
					redirect("index.php");
				}
				else
				{
					render("login.php", ["title" => "Login", "error" => "Username already exists - please try again!"]);
				}
				
			}

		}
	}
	elseif($_SERVER["REQUEST_METHOD"] == "GET")
	{
		if(isset($_SESSION["id"]))
		{
			redirect("chat.php");
			exit();
		}
		else
		{
			render("login.php", ["title" => "Login"]);
		}
	}
?>
