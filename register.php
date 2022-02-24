<?php 
$title = "Register Form";
 	require_once 'includes/header.php';
 ?>

 <div class="register">
 	<h1>Register</h1>
	 <p>Login now!  <a href="login.php">login now!</a></p>

	<form action="includes/register-inc.php" method="post">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="pasword"> 
		<input type="confimPass" name="password" placeholder="confimPass"> <br>
		<button type="submit" name="submit">Submit</button>
	</form>
 </div>

 <?php 
 	// require_once 'includes/footer.php'
  ?>