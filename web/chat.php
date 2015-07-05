
<?php

	require("../includes/config.php");

	if(isset($_POST["message"]) && count($_POST["message"]) > 0)
	{
		query("INSERT INTO messages (user_id, message) VALUES (?, ?)", $_SESSION["id"], $_POST["message"]);
		redirect("chat.php");
		exit();
	}

	$user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

	$chats = query("SELECT users.username AS username, messages.* FROM messages LEFT JOIN users ON messages.user_id = users.id ORDER BY messages.id ASC");

	render("chat.php", ["title" => "Chat", "chats" => $chats, "user" => $user]);

?>
