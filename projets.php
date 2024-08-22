<!DOCTYPE html>
<?php include 'vars.php';?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Projets | Tarik Bey RAMDANE - Architecte</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124466608-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124466608-2');
</script>

		

	</head>


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="/" id="branding">
						<!-- <img src="images/logo.png" alt="" class="logo"> -->
						<div class="logo-text">
							<h1 class="site-title">Tarik Bey RAMDANE</h1>
							<small class="site-description">Architecte</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Accueil</a></li>
							<li class="menu-item current-menu-item"><a href="projets">Projets</a></li>
							<li class="menu-item"><a href="presse">Presse</a></li>
							<li class="menu-item"><a href="contact">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				
				<div class="page">
					<div class="container">
						<h2 class="entry-title">Projets</h2>
						<!-- <p>description ici</p> -->

						<!-- <div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Afficher tous</option>
								<option value=".skyscraper">RESIDENTIEL</option>
								<option value=".shopping-center">MAISON INDIVIDUELLE</option>
								<option value=".apartment">BUREAUX</option>
							</select>
							<a href="#" class="current wow fadeInRight" data-filter="*">Afficher tous</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".skyscraper">RESIDENTIEL</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center">MAISON INDIVIDUELLE</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">BUREAUX</a>
						</div> -->


						<div class="filterable-items">


						<?php for($i = 19; $i > 0; --$i) { ?>

							<div class="project-item filterable-item shopping-center">
								<figure class="featured-image">
									
									
									<a href="project-single.php?id=<?php echo $i  ;?>">
									<img src="images/projets/<?php echo $i  ;?>/main/01.jpg" alt="#"></a>
									
									
									<figcaption>
										<h2 class="project-title"><a href="project-single.php?id=<?php echo $i  ;?>"><?php echo ${'title_' . $i}  ;?></a></h2>
										<p class="project-subtotle">
										
										</p>
										<!-- 
										<p></p>
										<a href="project-single.php?id=01" class="more-link"><img src="images/arrow.png" alt=""></a> 
										-->
										
										
									</figcaption>
									
									
								</figure>
							</div>
							
						<?php } ?>						
							
												
							
						</div>
					</div>



				</div> <!-- .page -->



			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="pull-left">

						<address>
							<strong>Tarik Bey RAMDANE</strong>
							<p>02 Rue de ouled Fayet, Chéraga, ALGER</p>
						</address>

						<a href="#" class="phone">+ 213 555 02 24 94</a>
					</div> <!-- .pull-left -->
					<div class="pull-right">

						<div class="social-links">

							<a target="_blank" href="https://www.facebook.com/tarikbey.ramdane"><i class="fa fa-facebook"></i></a>
						<!-- 	<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a> -->

						</div>

					</div> <!-- .pull-right -->

					<div class="colophon">Copyright 2018 Tarik Bey RAMDANE</div>

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>