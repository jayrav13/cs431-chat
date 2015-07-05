

<h1 class="header-title">Welcome to CS 431 Chat!</h1>
<br /><br />

<div class="welcome-container">
	<div class="welcome-center">
	
		<?php if(isset($error)) { ?>
			<div class="alert alert-danger" role="alert">
			<?php echo $error;  ?>
			</div>
		<?php } ?>
	
		<div class="login-container">
			<div class="login-center">

				<h2 class="header-message">Login</h2>

				<form action="login.php" method="post" autocomplete="off">	
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
						<input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
					</div>
					<br />
					<div class="btn-group" role="group" aria-label="...">
						<button name="login" type="submit" class="btn btn-default" value="login" name="login-submit">Log In</button>
					</div>
				</form>
			</div>
		</div>


		<div class="register-container">
			<div class="register-center">

				<h2 class="header-message">Register</h2>

				<form action="login.php" method="post" autocomplete="off">	
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
						<input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
					</div>
					<br />	
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
						<input name="confirm-password" type="password" class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon2">
					</div>
					<br />
					<div class="btn-group" role="group" aria-label="...">
						<button name="register" type="submit" class="btn btn-default" value="register" name="register-submit">Register</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
