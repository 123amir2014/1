<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title"> MAQALAK</h1>
								<h6 class="tm-site-description">هر چه دل تنگت می‌خواهد بنویس و کسب درآمد کن</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">خانه</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">درباره ما</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">ارتباط باما</a></li>
								<li class="tm-nav-li"><a href="Login-register.html" class="tm-nav-link">ورود</a></li>
								<li class="tm-nav-li"><a href="Account.html" class="tm-nav-link">داشبورد</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">آخرین مقاله های مقالک</h2>
				<p class="col-12 text-center">شما هم می‌توانید یک مقالک نویس شوید</p>
			</header>
			
		
			<div class="tm-section tm-container-inner">
				<div class="row">
				        <?php
					    $Query = mysql_query ("Select * FROM post_site ORDER BY id DESC LIMIT 10");
			while ($row_news = mysql_fetch_array($Query)) { 
					    ?>
					
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box">
						     <h4 class="tm-gallery-title">
							    <?php  echo $row_news["title"];?>
							</h4>
							<p class="tm-mb-45">
							 <?php echo $row_news["text"]; ?>
							    </p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">ادامه مقالک</a>
						</div>
							
					</div>
					<?php } ?>
				</div>
			
			</div>

			<br></br>

			
			
		
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Maqalak 
            
            | Design: <a rel="nofollow" href="https://sarteh.com/designers/amirhossein_mollaei">AmirHosseinMollaei</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>