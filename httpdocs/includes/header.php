<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>

	<!-- Metas -->
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
		<meta name="author" content="Mark Bain" />

	<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Open Graph protocol -->
		<meta property="og:image" content="./assets/images/og-image.png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:image:type" content="image/png">

	<!-- build:css assets/css/build/style.min.css -->
		<link rel="stylesheet" href="./assets/css/source/style.css" />
	<!-- endbuild -->

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicon and touch icons -->
	<!--
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="mstile-144x144.png">
	-->
</head>
<?php 
	// Global vars
	$site_title = 'IELTSjam';
	$tagline = 'Write better IELTS essays';
	$contact_email = 'info@example.com';
?>
<body class="<?php echo $body_class; ?>">
<header class="site-header">
	<div class="section">
		<div class="container">
			<div class="site-branding">
				<div class="site-title">
					<a href="/" rel="home" class="h5">
						<img src="./assets/images/example-logo.png">
					</a>									
				</div>
				<a id="nav-toggle" class="toggle">
					<span class="visuallyhidden">Menu</span>
				</a>
			</div>				
			<div id="main-nav-wrapper">
				<nav class="nav-collapse main-navigation">
					<ul class="nav-collapse main-navigation">
					<li><a href="#" >Item 1</a></li>
					<li><a href="#" >Item 2</a></li>
					<li><a href="#" >Item 3</a></li>
					<li><a href="#" class="cta cta-primary">Item 4</a></li>
					</ul>	
				</nav>
			</div>
			
		</div>
	</div>	
</header>
<main>