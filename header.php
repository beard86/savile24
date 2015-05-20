<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Savile Row | <?php echo $title; ?></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
	<link href="http://fast.fonts.net/cssapi/93f0b630-b004-46b4-948b-7c33138d0c8f.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/css/style.css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

		<style>
		</style>
	<![endif]-->
	<script src="/js/3rdparty/polyfill.js"></script>
	<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.12/video.js"></script>
</head>
<body id="savile" class="<?php echo $title; ?> <?php echo $subtitle; ?> abs-full">
	<header>
		<div class="wrapper">
			<h1 class="logo">
				<a href="/"><img src="/img/logo-<?php echo $logocolour; ?>.gif" alt="24 Savile Row"></a>
				<span class="hidden">24 Savile Row</span>
			</h1>
			<nav id="nav">
				<ul class="main-menu">
					<li class="main-menu-item "><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building' ? ' active' : '');?>" href="/building"> The Building</a>
						<ul class="building sub-menu">
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/index.php' ? ' active' : '');?>" href="/building/index.php">Rhythm of the Street</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/light-and-dark.php' ? ' active' : '');?>" href="/building/light-and-dark.php">The Story of Light and Dark</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/truth-to-materials.php' ? ' active' : '');?>" href="/building/truth-to-materials.php">Truth to Materials</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/art-of-collaboration.php' ? ' active' : '');?>" href="/building/art-of-collaboration.php">The Art of Collaboration</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation' ? ' active' : '');?>" href="/accomodation">Accommodation</a>
						<ul class="accomodation sub-menu">
							<li><a data-page-type="hero" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/index.php' ? ' active' : '');?>" href="/accomodation/index.php">The Space</a></li>
							<li><a data-page-type="area-schedule" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation#area-schedule' ? ' active' : '');?>" href="/accomodation#area-schedule">Area Schedule</a></li>
							<li><a data-page-type="floor-plans" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation#floor-plans' ? ' active' : '');?>" href="/accomodation#floor-plans">Space Plans</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/specification.php' ? ' active' : '');?>" href="/accomodation/specification.php">Specification</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location' ? ' active' : '');?>" href="/location">Location</a>
						<ul class="location sub-menu">
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/index.php' ? ' active' : '');?>" href="/location/index.php">Gateway to Mayfair</a></li>
							<li><a data-page-type="fashion" class="<?php echo ($_SERVER['PHP_SELF'] == '/location/fashion' ? ' active' : '');?>" href="/location/fashion">Fashion</a></li>
							<li><a data-page-type="art"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/art' ? ' active' : '');?>" href="/location/art">Art</a></li>
							<li><a data-page-type="dining"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/dining' ? ' active' : '');?>" href="/location/dining">Dining</a></li>
							<li><a data-page-type="social"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/social' ? ' active' : '');?>" href="/location/social">Social</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/area-overview.php' ? ' active' : '');?>" href="/location/area-overview.php">Maps</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a href="/gallery">Gallery</a>
						<ul class="gallery sub-menu">
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/gallery/index.php' ? ' active' : '');?>" href="/gallery/index.php">Location</a></li>
							<li><a data-page-type="fashion" class="<?php echo ($_SERVER['PHP_SELF'] == '/gallery/building.php' ? ' active' : '');?>" href="/gallery/building.php">Building</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a data-page-type="downloads"  href="/contact/#downloads">Downloads</a></li>
					<li class="main-menu-item"><a data-page-type="contact"  href="/contact">Contact</a></li>
				</ul>
				<div class="mobile-nav hidden">
				     <div class="menu-btn menu-trigger" id="menu-btn">
					<div></div>
					<span></span>
					<span></span>
					<span></span>
				     </div>
			     </div>
			</nav>
		</div>
	</header>
	<!--mobile menu -->
	 <nav id="slide-menu" class="responsive-menu">
	        <ul>
		<li class="main-menu-item "><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building' ? ' active' : '');?>" href="/building"> The Building</a>
			<ul class="building sub-menu">
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/index.php' ? ' active' : '');?>" href="/building/index.php">Rhythm of the Street</a></li>
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/light-and-dark.php' ? ' active' : '');?>" href="/building/light-and-dark.php">The Story of Light and Dark</a></li>
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/truth-to-materials.php' ? ' active' : '');?>" href="/building/truth-to-materials.php">Truth to Materials</a></li>
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/building/art-of-collaboration.php' ? ' active' : '');?>" href="/building/art-of-collaboration.php">The Art of Collaboration</a></li>
			</ul>
		</li>
		<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location' ? ' active' : '');?>" href="/location">Location</a>
			<ul class="location sub-menu">
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/index.php' ? ' active' : '');?>" href="/location/index.php">Gateway to Mayfair</a></li>
				<li><a data-page-type="fashion" class="<?php echo ($_SERVER['PHP_SELF'] == '/location/fashion' ? ' active' : '');?>" href="/location/fashion">Fashion</a></li>
				<li><a data-page-type="art"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/art' ? ' active' : '');?>" href="/location/art">Art</a></li>
				<li><a data-page-type="dining"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/dining' ? ' active' : '');?>" href="/location/dining">Dining</a></li>
				<li><a data-page-type="social"  class="<?php echo ($_SERVER['PHP_SELF'] == '/location/social' ? ' active' : '');?>" href="/location/social">Social</a></li>
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/area-overview.php' ? ' active' : '');?>" href="/location/area-overview.php">Area Overview</a></li>
			</ul>
		</li>
		<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation' ? ' active' : '');?>" href="/accomodation">Accomodation</a>
			<ul class="accomodation sub-menu">
				<li><a data-page-type="hero" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/index.php' ? ' active' : '');?>" href="/accomodation/index.php">The Space</a></li>
				<li><a data-page-type="area-schedule" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation#area-schedule' ? ' active' : '');?>" href="/accomodation#area-schedule">Area Schedule</a></li>
				<li><a data-page-type="floor-plans" class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation#floor-plans' ? ' active' : '');?>" href="/accomodation#floor-plans">Space Plans</a></li>
				<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/specification.php' ? ' active' : '');?>" href="/accomodation/specification.php">Specification</a></li>
			</ul>
		</li>
		<li class="main-menu-item"><a href="/gallery">Gallery</a></li>
		<li class="main-menu-item"><a data-page-type="downloads"  href="/contact/#downloads">Downloads</a></li>
		<li class="main-menu-item"><a data-page-type="contact"  href="/contact">Contact</a></li>
	        </ul>
	</nav>
	<!--mobile menu -->