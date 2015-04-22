<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Savile Row | <?php echo $title; ?></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
	<link href="http://fast.fonts.net/cssapi/93f0b630-b004-46b4-948b-7c33138d0c8f.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/css/style.css">
</head>
<body class="<?php echo $title; ?> <?php echo $subtitle; ?> abs-full">
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
					<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location' ? ' active' : '');?>" href="/location">Location</a>
						<ul class="location sub-menu">
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/index.php' ? ' active' : '');?>" href="/location/index.php">Gateway to Mayfair</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/fashion.php' ? ' active' : '');?>" href="/location/fashion.php">Fashion</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/art.php' ? ' active' : '');?>" href="/location/art.php">Art</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/dining.php' ? ' active' : '');?>" href="/location/dining.php">Dining</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/social.php' ? ' active' : '');?>" href="/location/social.php">Social</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/location/area-overview.php' ? ' active' : '');?>" href="/location/area-overview.php">Area Overview</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation' ? ' active' : '');?>" href="/accomodation">Accomodation</a>
						<ul class="accomodation sub-menu">
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/index.php' ? ' active' : '');?>" href="/accomodation/index.php">The Space</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/fashion.php' ? ' active' : '');?>" href="/accomodation/area-schedule.php">Area Schedule</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/art.php' ? ' active' : '');?>" href="/accomodation/art.php">Plans</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/dining.php' ? ' active' : '');?>" href="/accomodation/dining.php">Space Plans</a></li>
							<li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/accomodation/area-overview.php' ? ' active' : '');?>" href="/accomodation/area-overview.php">Specification</a></li>
						</ul>
					</li>
					<li class="main-menu-item"><a href="/gallery">Gallery</a></li>
					<li class="main-menu-item"><a href="/downloads">Downloads</a></li>
					<li class="main-menu-item"><a href="/contact">Contact</a></li>
				</ul>
				<div class="mobile-nav hidden">
				     <div class="menu-btn" id="menu-btn">
					<div></div>
					<span></span>
					<span></span>
					<span></span>
				     </div>
				     <div class="responsive-menu">
				        <ul>
				           <li>1. Object</li>
				           <li>2. Object</li>
				           <li>3. Object</li>
				           <li>4. Object</li>
				           <li>5. Object</li>
				           <li>6. Object</li>
				        </ul>
				     </div>
				</div>
			</nav>
		</div>
	</header>