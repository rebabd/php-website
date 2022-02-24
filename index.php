<?php 
$title = "index";
	require 'includes/header.php';
?>
<?php 

	if (isset($_SESSION['sessionId'])) {
		echo"You are logged in!";
	} else {
		echo "";
	}
?>
	<section>
		<div class="home-side">
			<h5>I am Mst. Reba Khatun</h5>
			<h1>I am a Web Developer</h1>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione vitae quos nobis, labore iusto aliquam  </br>provident recusandae dolorem explicabo, modi ipsum laudantium quae in, repellendus fuga tenetur.</p>
	        <a target="_black" href="https://github.com/rebabd"><button> Contact Now</button></a>
		</div>
	</section>
	<section class="about-bg">
		<h2>About Me</h2>
		<div class="about">
			<div class="half-width">
				<img src="image/2.png">
			</div>
			<div class="half-width">
				<h3>My Skills :</h3>
				<ul class="skills">
					<li>HTML/HTML5</li>
					<li>CSS/CSS3</li>
					<li>Bootstrap</li>
					<li>javaScript</li>
					<li>PHP</li> 
					<li>VS Code</li>
					<li>Git/GitHub/GithubDesktop</li>
					<li>Rest API</li>
					<li>JQuery</li>
					<li>SASS</li>
					<li>mySql</li>
					<li>Database</li>
					<li>WrodPress</li>
					<li>Elementor</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="work-food">
		<h2>Foods Recipie  </h2>
		<p>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<div class="food-recipie">
			<div class="food-frame">
				<div class="food">
					<img src="image/food/1.jpg">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit.Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>
			<div class="food-frame">
				<div class="food">
					<img src="image/food/2.png">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>
			<div class="food-frame">
				<div class="food">
					<img src="image/food/3.jpg">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>
			<div class="food-frame">
				<div class="food">
					<img src="image/food/4.png">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>
			<div class="food-frame">
				<div class="food">
					<img src="image/food/5.png">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>
			<div class="food-frame">
				<div class="food">
					<img src="image/food/6.png">
				</div>
				<div class="food-detail">
					<h4>Recipie Items</h4>
					<p><small>Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit. Foods Recipie Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit.</small></p>
				</div>
			</div>

		</div>
	</section>

<?php 
	require 'includes/footer.php';
?>