<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact</title>
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
										echo"<h1>Contact</h1>";
                                        ?>
									</header>								
                                </div>
							</section>

					</div>

					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" />
										</div>
										<div class="field">
											<label for="message">Notes</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">baking@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
                                        <?php
										echo"<h3>Phone</h3>";
										echo"<span>+63 923-187-1232<br></span>";
										echo"<span>+63 333-555-3366</span>";
                                        ?>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
                                        <?php
										echo"<h3>Address</h3>";
										echo"<span>ZIP Code: 0945 <br>Brgy.: Masiga <br>Municipality: Gasan <br> Province: Marinduque</span>";
                                        ?>
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