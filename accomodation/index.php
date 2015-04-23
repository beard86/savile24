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
	<div class="down" id="hero-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/home.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<h1 class="large">The space</h1>
			<p>Plans and Schedule</p>
		</div>
	</section>


	<section id="intro">
		<div class="centralise area-schedule">
			<h2 class="orange no-pad bord-btm">
				Area Schedule
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">
			<div class="rel">
				<div class="two right">
					<img src="/img/area-schedule.jpg" alt="Area schedule" class="full-w">
				</div>
				<div class="two pad-right left">
					<div class="tabled schedule">
						<div class="tbl-row heading bold">
								<div class="cell bold"><span>Floor</span></div>
								<div class="cell bold"><span>sq ft</span></div>
								<div class="cell bold"><span>sq m</span></div>
						</div>
						<div class="tbl-row">
								<div class="cell">Sixth</div>
								<div class="cell">2,971</div>
								<div class="cell">271</div>
						</div>
						<div class="tbl-row">
								<div class="cell">Fifth</div>
								<div class="cell">3,789</div>
								<div class="cell">352</div>
						</div>
						<div class="tbl-row">
								<div class="cell">Fourth</div>
								<div class="cell">4,478</div>
								<div class="cell">416</div>
						</div>
						<div class="tbl-row">
								<div class="cell">Third</div>
								<div class="cell">4,483</div>
								<div class="cell">416</div>
						</div>
						<div class="tbl-row">
								<div class="cell">Second</div>
								<div class="cell">Let</div>
								<div class="cell">–</div>
						</div>
						<div class="tbl-row">
								<div class="cell">First</div>
								<div class="cell">1,647</div>
								<div class="cell">153</div>
						</div>
						<div class="tbl-row">
								<div class="cell">Reception</div>
								<div class="cell">840</div>
								<div class="cell">78</div>
						</div>
						<div class="tbl-row heading">
								<div class="cell bold"><span>Total</span></div>
								<div class="cell bold"><span>18, 154</span></div>
								<div class="cell bold"><span>1,686</span></div>
						</div>
					</div>

				</div>
				<div class="clear pad-bottom"></div>
				<p class="foot-note">Approximate net internal areas. Floors to be measured upon practical completion</p>
				<div class="clear pad-bottom-lg"></div>
			</div>
			<div id="down-schedule" class="down">
				<img src="/img/down-blk.png" alt="Scroll Down">
			</div>
		</div>
	</section>
	<section id="floor-plans">
		<div class="centralise">
			<div id="floor-carousel" class="owl-carousel owl-theme show-nav">
				<div class="item"><img src="/img/floor-plan/floor-plan.jpg" alt="Exterior shot of 24 Savile Row"></div>
				<div class="item"><img src="/img/floor-plan/floor-plan.jpg" alt="Exterior shot of 24 Savile Row"></div>
				<div class="item"><img src="/img/floor-plan/floor-plan.jpg" alt="Exterior shot of 24 Savile Row"></div>
			</div>
		</div>
		<div id="down-floor" class="down">
			<img src="/img/down-blk.png" alt="Scroll Down">
		</div>
	</section>
	<section id="space-plans">
		<div class="centralise">
			<img src="/img/floor-plan/space-plan.jpg" alt="Exterior shot of 24 Savile Row"  class="full-w">
		</div>
	</section>

</div>




<?php
include '../footer.php'
?>