<!DOCTYPE html>
<?php include 'vars.php';?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Projet | Tarik Bey RAMDANE - Architecte</title>

		
		
		<!-- Latest compiled and minified CSS -->
       
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.css" rel="stylesheet">
		
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		 <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.js"></script>
		
		
		
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
					<a href="index.html" id="branding">
						<!-- <img src="images/logo.png" alt="" class="logo"> -->
						<div class="logo-text">
							<h1 class="site-title">Tarik Bey RAMDANE</h1>
							<small class="site-description">Architect</small>
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
						
						<div class="row">
						
						
						
							<div class="col-md-12">
								<div class="project-images">
									<div class="col-md-6">
								
								<a href="projets" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Retour</a>

								
									  <div class="project-detail">
									<h2 class="project-title">
									
									<?php echo ${'title_' . $_GET['id']}  ;?>
									</h2>
									
									<?php echo ${'text_' . $_GET['id']}  ;?>
									
									<br/><br/>
								</div>
								
								
									</div>
									<div class="col-md-6">
									
										<div class="thumbnails">
										
									
									
									<?php
										$dir = 'images/projets/' . $_GET['id'] . '/';
										$imgs = array();

										if ($dh = opendir($dir)) {
											while (($file = readdir($dh)) !== false) {
												if (!is_dir($file) && preg_match("/\.(bmp|jpe?g|gif|png)$/", $file)) {
												array_push($imgs, $file);
											}
											sort($imgs);
										}

										closedir($dh);
										} else {
											die('cannot open ' . $dir);
										}

										foreach ($imgs as $idx=>$img) {
											
											echo '<a href="' . $dir . $img . '" data-toggle="lightbox" data-gallery="example-gallery">' .            
													
													' <img src="' . $dir . 'small/' . $img . '" alt="' . $img . '" /> ' .
												 
												  '</a>   ' . "\n";
										}
									
										
									?>
										
										
										
										
										
										</div>
									
									
									
									
									</div>
							
								</div>
								
							</div>
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


						</div>

					</div> <!-- .pull-right -->

					<div class="colophon">Copyright 2018 Tarik Bey RAMDANE</div>

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>

		
  <script>
  
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
  
  
  
  
  </script>
		
		
		
	</body>

</html>