<?php 
// Page Setup
$title = 'Gallery';
$subtitle = 'gallery';
$logocolour = 'cream';
$PHP_SELF = $_SERVER['PHP_SELF'];
include '../header.php';
?>
<div class="container">
	<div class="down" id="hero-down">
		<img src="img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<div id="gallery-carousel" class="owl-carousel owl-theme show-nav">
			<div class="item"><img src="/img/hero/building.jpg" alt="Exterior shot of 24 Savile Row"></div>
			<div class="item"><img src="/img/hero/home.jpg" alt="Exterior shot of 24 Savile Row"></div>
			<div class="item"><img src="/img/hero/building.jpg" alt="Exterior shot of 24 Savile Row"></div>
		</div>
	</section>

</div>




<?php
include '../footer.php'
?>