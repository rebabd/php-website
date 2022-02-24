<?php 
$title = "Log in";
 	require_once 'includes/header.php';

 ?>


 <div class="login-info">
 	<h1>Log in</h1>
	 <p>No account? <a href="register.php">Register now!</a></p>

	<form action="includes/login-inc.php" method="post">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="Password"> <br>
		<button type="submit" value="Login" name="submit">Submit</button> <br>
		<a href="#">Forget Password</a>
	</form>
 </div>

 <?php 
 	// require_once 'includes/footer.php'
  ?>