<?php 
// Page Setup
$title = 'Accomodation';
$subtitle = 'the-space';
$logocolour = 'blue';
$PHP_SELF = $_SERVER['PHP_SELF'];
include '../header.php';
?>
<div class="sub-nav-bg"></div>
<div class="container">
	<div class="down" id="specs-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/summary.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<div class="tabled">
				<div class="cell">
					<h1 class="large">Summary<br/>Specification</h1>
				</div>
			</div>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">
			<div class="rel pad-bottom">
				<div class="two right main-carousel-wrap">
					<div id="main-carousel" class="owl-carousel owl-theme">
						<div class="item"><img src="/img/specs/top_carousel-1.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/top_carousel-2.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/top_carousel-3.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/top_carousel-4.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/top_carousel-5.jpg" alt="Exterior shot of 24 Savile Row"></div>
					</div>
				</div>
				<div class="three pad-right full-h a-left">
					<div class="tabled">
						<div class="cell large-copy">
							<p>Floor to ceiling height <br>of 2.7m on floors 1st – 5th</p>
							<p>Floor to ceiling height <br>of 2.9m on 6th floor</p>
							<p>High fired stoneware ceramic <br>tile feature elevations</p>
							<p>Full height double glazed <br>curtain walling window system</p>
							<p>Zinc cladding to 6th floor</p>
							<p>Green roof</p>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
			<div class="rel pad-bottom">
				<div class="two left main-carousel-wrap">
					<div id="main-carousel-2" class="owl-carousel owl-theme">
						<div class="item"><img src="/img/specs/left_carousel-1.jpg" alt="Interior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/left_carousel-2.jpg" alt="Interior shot of 24 Savile Row"></div>
						<div class="item"><img src="/img/specs/left_carousel-3.jpg" alt="Interior shot of 24 Savile Row"></div>
					</div>
				</div>
				<div class="three pad-left full-h a-right">
					<div class="tabled">
						<div class="cell large-copy">
							<p>VRF air-conditioning</p>
							<p>Fully accessible raised floors</p>
							<p>Storage for 32 cycles at lower <br>ground accessed via bike lift</p>
							<p>Male and Female showers <br>and changing rooms</p>
							<p>Public Art bronze plinth designed <br>by Kate Malone in consultation <br>with EPR and Michael Eden</p>
							<p class="hpad-bottom">Building targeted to achieve<br> BREEAM ’Excellent’ rating</p>
							<h2 class="orange"><a href="/pdf/24SavileRow-Specification.pdf">Download full specification ></a></h2>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
</div>

<?php
include '../footer.php'
?>