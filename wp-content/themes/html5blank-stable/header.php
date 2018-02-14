<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<link rel="stylesheet" href="/newlifeem/bootstrap-4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
		<script src="/newlifeem/js/jquery-3.2.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="/newlifeem/bootstrap-4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">
				
			<!-- nav -->
			<nav class="navbar navbar-expand-sm navbar-light bg-light">
				<!-- logo -->
				<a class="navbar-brand" href="#"><strong>New Life English Ministry</strong></a>	<!-- add logo here -->
				<!-- /logo -->
					
				<!-- button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
				</button>
				<!-- /button -->

				<!-- menu -->
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Calendar</a>
						</li>
					</ul>
				</div>
				<!-- /menu -->
			</nav>
			<!-- /nav -->
				
		</header>
		<!-- /header -->
		
		<!-- wrapper -->
		<div class="wrapper">
