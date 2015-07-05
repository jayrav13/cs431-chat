<nav class="navbar navbar-default">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">CS431</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<ul class="nav navbar-nav navbar-right">
			<li><p class="navbar-text">Logged in as <?php echo $user[0]["username"]; ?></p></li>
			<li><a href="logout.php">Log Out</a></li>      
		</ul>
	</div><!-- /.container-fluid -->
</nav>


<div class="chat-container">
	<div class="chat-center">

		<h1 class="chat-header">Chatroom</h1>	
		<div class="chat-content" id="chat-content">
			
		<?php if(isset($chats)) {
			foreach($chats as $chat)
			{ ?>
				<div class="chat-bubble" 

				<?php if($chat["user_id"] == $_SESSION["id"])
				{
					echo "style=\"text-align:right\"";
				}
				else
				{
					echo "style=\"text-align:left\"";
				}

				?>>
					<?php echo "<b>" . $chat["message"] . "</b><br />" . $chat["username"]; ?>	
				</div>
		<?php	}
		} ?>
		</div>
		<br />
		<form method="POST" action="chat.php">
			<div class="input-group">
				<input type="text" autofocus="on" autocomplete="off" class="form-control" name="message" placeholder="Type a message..." aria-describedby="basic-addon1">
				<span class="input-group-btn"><button class="btn btn-default" type="submit">Send</button></span>	
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function() {
		$("#chat-content").scrollTop(document.getElementById("chat-content").scrollHeight + 10);
	});

</script>

