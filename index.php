<!DOCTYPE HTML>
<html>
	<head>
		<title>BAKING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">

				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>BAKING</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<nav id="menu">
					<ul class="links">
		                <li class="active"> <a href="index.php">Home </a> </li>
                        <li> <a href="about us.php">About Us</a> </li>
						<li> <a href="Recipe.php">Recipe</a> </li>
		                <li> <a href="blog.php">Blog</a> </li>
		                <li> <a href="author.php">Author</a> </li>
		                <li><a href="contact.php">Contact Us</a></li>
            		</ul>
				</nav>

					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<?php
								echo"<h1>Welcome To BAKING</h1>";
								?>
							</header>
							<div class="content">
								<?php
								echo"<p>The best things in life are Sweet</p>";
								?>
								<ul class="actions">
									<li><a href="Recipe.php" class="button next scrolly">Recipe</a></li>
								</ul>
							</div>
						</div>
					</section>

				
				<div id="main">
					<section>
						<div class="inner">
							<header class="major">
								<?php
								echo"<h2>About us</h2>";
							?>	
							</header>
							<?php
							echo"<p>We're all about making baking easier for everyone. A perfectly baked moist cake is one of life’s simple pleasures. Baking cakes at home can be just as fun as eating them as long as you have the right recipes!.</p>"
							?>
							<ul class="actions">
								<li><a href="about us.php" class="button next">Read more</a></li>
							</ul>
						</div>
					</section>

					<section class="tiles">
						<article>
							<span class="image">
								<img src="images/cup.jpg" alt="" />
							</span>

							<header class="major">
								<?php
								echo"<h3>CupCake</h3>";
								?>
								<p>"What makes life so sweet? Cupcakes to eat and someone to love."</p>

								<div class="major-actions">
									<a href="cupcake.php" class="button small next">See More</a>
								</div>
							</header>
						</article>

						<article>
							<span class="image">
								<img src="images/cake.jpg" alt="" />
							</span>

							<header class="major">
								<?php
								echo"<h3>Cake</h3>";
								?>
								<p>Love at first bite, Nothing in this world is better than cake but more cake.</p>

								<div class="major-actions">
									<a href="cake.php" class="button small next">See More</a>
								</div>
							</header>
						</article>

						<article>
							<span class="image">
								<img src="images/cookies.jpg" alt="" />
							</span>

							<header class="major">
								<?php
								echo"<h3>Cookies</h3>";
								?>
								<p>Keep calm and bake cookies because life is better with fresh baked cookies.</p>

								<div class="major-actions">
									<a href="cookies.php" class="button small next">See More</a>
								</div>
							</header>
						</article>
					</section>

					<section>
						<div class="inner">
							<header class="major">
								<?php
								echo"<h2>Author</h2>";
								?>
							</header>
							<div class="row">
								<div class="col-6">
									<p><em>"I believe that this website will help an individual who want to learn baking."</em></p>
									<p><strong>- Reynan Yap</strong></p>
									
								</div>
					</section>

					<section class="tiles">
						<article>
							<span class="image">
								<img src="images/apple.jpg" alt="" />
							</span>
							<header class="major">
								<?php
								echo"<h3>Apple Pie</h3>";
								?>
								<p><br> <span>Reynan Yap</span> | <span>05/14/2022 10:30 </span> | <span>114</span></p>

								<div class="major-actions">
									<a href="read-blog.php" class="button small next scrolly">Read Blog</a>
								</div>
							</header>
						</article>
						<article>
							<span class="image">
								<img src="images/salad.jpg" alt="" />
							</span>
							<header class="major">
								<?php
								echo"<h3>Fruit Salad Cake</h3>";
								?>
								<p><br> <span>Reynan Yap</span> | <span>02/25/2022 9:30 </span> | <span>1k</span></p>

								<div class="major-actions">
									<a href="read-blog1.php" class="button small next scrolly">Read Blog</a>
								</div>
							</header>
						</article>
						<article>
							<span class="image">
								<img src="images/buko.jpg" alt="" />
							</span>
							<header class="major">
								<?php
								echo"<h3>Buko Pie</h3>";
								?>

								<p><br> <span>Reynan Yap</span> | <span>01/27/2022 1:30 </span> | <span>34k</span></p>

								<div class="major-actions">
									<a href="read-blog2.php" class="button small next scrolly">Read Blog</a>
								</div>
							</header>
						</article>
					</section>
				</div>

				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright © 2022 Reynan Yap</li>
							<li> <a href="https://www.mscmarinduque.edu.ph/">Marinduque State College</a></li>
						</ul>
					</div>
				</footer>

			</div>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>