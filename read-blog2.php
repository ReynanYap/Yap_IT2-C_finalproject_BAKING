<!DOCTYPE HTML>
<html>
	<head>
		<title>Read Blog</title>
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

					<div id="main" class="alt">
							<section id="one">
								<div class="inner">
									<header class="major">
                                        <?php
										echo"<h1>Buko Pie</h1>";
                                        ?>

										<h4><i class="fa fa-user"></i>Reynan Yap  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 01/27/2022  1:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 34k</h4>
									</header>
									<span class="image main"><img src="images/b24.webp" alt="" /></span>
                                    <?php
									echo"<p>Buko Pie, sometimes anglicized as coconut pie, is a traditional Filipino baked young coconut (malauhog) custard pie. It is considered a specialty in the city of Los Baños, Laguna located on the island of Luzon.</p>";
                                    echo"<p>Buko Pie is made with young coconuts (buko in Tagalog), and uses sweetened condensed milk, which makes it denser than cream-based custard pies. There are also variations of the pie, which are similar but use slightly different ingredients, such as macapuno pie, that uses macapuno, special type of coconut that is thick and sticky</p>";								
                                    echo"<p>The pie was originally a delicacy only available in the Philippines, but blast freezing technology has allowed buko pie-makers the ability to export. As it has become easier to transport and more accessible around the world, people are able to buy it as a pasalubong or homecoming present after having visited the Philippines.[5] Buko pie is traditionally plain, but nowadays flavorings such as pandan, vanilla, or almond essences are used..</p>";
                                   ?>
								</div>
							</section>

					</div>

					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Leave a Comment</h2>
								</header>

								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name">
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email">
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-info"></span>
                                        <?php
										echo"<h3>Information</h3>";
										echo"<span>Terms & Privacy</span>";
                                        ?>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-share"></span>
										<h3>Share</h3>

										<p style="position: relative;">
											<a href="#" style="position: relative;" class="icon alt fa-twitter"><span class="label">Twitter</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-facebook"><span class="label">Facebook</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a> &nbsp;
										</p>
									</div>
								</section>
							</section>
						</div>
					</section>

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