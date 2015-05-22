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
	<div class="down" id="space-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/space.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<div class="tabled">
				<div class="cell">
					<h1 class="large"><i>The</i> Space</h1>
				</div>
			</div>
		</div>
	</section>
	<section id="area-schedule">
		<div class="wrapper">
			<div class="centralise area-schedule">
				<h2 class="orange no-pad">
					Area Schedule &amp; Floor Plans
				</h2>
			</div>
			<div class="rel hpad-bottom">
				<div class="six right pad-left-lg">
					<div id="floor-carousel" class="owl-carousel owl-theme show-nav">
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Sixth Floor</h3>
								<p>2,971 sq ft / 271 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-7.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Fifth Floor</h3>
								<p>3,789 sq ft / 352 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-6.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Fourth Floor</h3>
								<p>4,478 sq ft / 416 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-5.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Third Floor</h3>
								<p>4,483 sq ft / 416 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-4.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
						<!--div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Second Floor</h3>
								<p>Let</p>
							</div>
							<img src="/img/floor-plan/floor-plan-2.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div-->
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>First Floor</h3>
								<p>1,647 sq ft / 153 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-1.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
						<div class="item dpad-bottom-pad">
							<div class="carousel-copy">
								<h3>Reception</h3>
								<p>840 sq ft / 78 sq m</p>
							</div>
							<img src="/img/floor-plan/floor-plan-r.jpg" alt="Exterior shot of 24 Savile Row">
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
						</div>
					</div>
				</div>
				<div class="three left">
					<div class="tabled schedule">
						<div class="tbl-row heading">
								<div class="cell"><span>Floor</span></div>
								<div class="cell"><span>sq ft</span></div>
								<div class="cell"><span>sq m</span></div>
						</div>
						<div class="tbl-row bold ctrl">
								<div class="cell">Sixth</div>
								<div class="cell">2,971</div>
								<div class="cell">271</div>
						</div>
						<div class="tbl-row ctrl">
								<div class="cell">Fifth</div>
								<div class="cell">3,789</div>
								<div class="cell">352</div>
						</div>
						<div class="tbl-row ctrl">
								<div class="cell">Fourth</div>
								<div class="cell">4,478</div>
								<div class="cell">416</div>
						</div>
						<div class="tbl-row ctrl">
								<div class="cell">Third</div>
								<div class="cell">4,483</div>
								<div class="cell">416</div>
						</div>
						<div class="tbl-row ">
								<div class="cell">Second</div>
								<div class="cell">Let</div>
								<div class="cell">Let</div>
						</div>
						<div class="tbl-row ctrl">
								<div class="cell">First</div>
								<div class="cell">1,647</div>
								<div class="cell">153</div>
						</div>
						<div class="tbl-row ctrl">
								<div class="cell">Reception</div>
								<div class="cell">840</div>
								<div class="cell">78</div>
						</div>
						<div class="tbl-row heading">
								<div class="cell"><span>Total</span></div>
								<div class="cell"><span>18, 154</span></div>
								<div class="cell"><span>1,686</span></div>
						</div>
					</div>
					<div class="clear hpad-bottom"></div>
					<p class="foot-note">Plans not to scale, indicative only.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div id="down-schedule" class="down">
				<img src="/img/down-blk.png" alt="Scroll Down">
			</div>
		</div>
	</section>
	<section id="floor-plans">
		<div class="wrapper">
			<div class="centralise area-schedule">
				<h2 class="orange no-pad">
					Space Plans
				</h2>
			</div>
			<div class="rel">
				<div class="seven right">
					<div id="space-carousel" class="owl-carousel owl-theme show-nav">
						<div class="item space-plans dpad-bottom-pad">
							<div class="three pad-left-xlg full-h">
								<div class="tabled">
									<div class="rel">
										<h3>Sixth Floor (Open plan)</h3>
										<p class="pad-bottom small bold">2,971 sq ft / 271 sq m</p>
										<p class="bold heading">Open plan Layout</p>
										<p class="qpad-bottom heading">Occupancy 1:10m<sup>2</sup></p>
										<p>2 person reception<span>1</span></p>
										<p>Open plan workstations<span>24</span></p>
										<p>Offices<span>7</span></p>
										<p class="bold qpad-bottom">Total workstation seats<span>28</span></p>
										<p>12 person board room<span>1</span></p>
										<p>4 person meeting room<span>1</span></p>
										<p class="bold qpad-bottom">Total meeting room seats<span>22</span></p>
										<p>Kitchenette<span>1</span></p>
										<p>Print/post<span>1</span></p>

									</div>
								</div>
							</div>
							<div class="six right pad-right-xlg pad-left-lg">
								<img src="/img/floor-plan/floor-plan-open-six.png" alt="Exterior shot of 24 Savile Row">
							</div>
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
							<div class="clear hpad-bottom"></div>
						</div>
						<div class="item space-plans dpad-bottom-pad">
							<div class="three pad-left-xlg full-h">
								<div class="tabled">
									<div class="rel">
										<h3>Sixth Floor (Cellular)</h3>
										<p class="pad-bottom small bold">2,971 sq ft / 271 sq m</p>
										<p class="bold heading">Cellular Layout</p>
										<p class="qpad-bottom heading">Occupancy 1:10m<sup>2</sup></p>
										<p>2 person reception<span>1</span></p>
										<p>Open plan workstations<span>4</span></p>
										<p>Offices<span>7</span></p>
										<p class="bold qpad-bottom">Total workstation seats<span>13</span></p>
										<p>10 person board room<span>1</span></p>
										<p>4 person meeting room<span>1</span></p>
										<p class="bold qpad-bottom">Total meeting room seats<span>14</span></p>
										<p>Kitchenette<span>1</span></p>
										<p>Print/post<span>1</span></p>
									</div>
								</div>
							</div>
							<div class="six right pad-right-xlg pad-left-lg">
								<img src="/img/floor-plan/floor-plan-cellular-six.png" alt="Exterior shot of 24 Savile Row">
							</div>
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
							<div class="clear hpad-bottom"></div>
						</div>
						<div class="item space-plans dpad-bottom-pad">
							<div class="three pad-left-xlg full-h">
								<div class="tabled">
									<div class="rel">
										<h3>Fourth Floor (Open plan)</h3>
										<p class="pad-bottom small bold">4,478 sq ft / 416 sq m</p>
										<p class="bold heading">Open plan Layout</p>
										<p class="qpad-bottom heading">Occupancy 1:10m<sup>2</sup></p>
										<p>2 person reception<span>1</span></p>
										<p>Open plan workstations<span>38</span></p>
										<p>Offices<span>2</span></p>
										<p class="bold qpad-bottom">Total meeting room seats<span>42</span></p>
										<p>12 person board room<span>1</span></p>
										<p>10 person meeting room<span>1</span></p>
										<p class="bold qpad-bottom">Total meeting room seats<span>22</span></p>
										<p>Kitchenette<span>1</span></p>
										<p>Print/post<span>1</span></p>
									</div>
								</div>
							</div>
							<div class="six right pad-right-xlg pad-left-lg">
								<img src="/img/floor-plan/floor-plan-open.jpg" alt="Exterior shot of 24 Savile Row">
							</div>
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
							<div class="clear hpad-bottom"></div>
						</div>
						<div class="item space-plans dpad-bottom-pad">
							<div class="three pad-left-xlg full-h">
								<div class="tabled">
									<div class="rel">
										<h3>Fourth Floor (Cellular)</h3>
										<p class="pad-bottom small bold">4,478 sq ft / 416 sq m</p>
										<p class="bold heading">Open plan Layout</p>
										<p class="qpad-bottom heading">Occupancy 1:26m<sup>2</sup></p>
										<p>2 person reception<span>1</span></p>
										<p>Open plan workstations<span>4</span></p>
										<p>Offices<span>10</span></p>
										<p class="bold qpad-bottom">Total workstation seats<span>16</span></p>
										<p>12 person boardroom<span>1</span></p>
										<p>8 person flexible meeting room<span>2</span></p>
										<p class="bold qpad-bottom">Total meeting room seats<span>28</span></p>
										<p>Kitchenette<span>1</span></p>
										<p>Print/post<span>1</span></p>
									</div>
								</div>
							</div>
							<div class="six right pad-right-xlg pad-left-lg">
								<img src="/img/floor-plan/floor-plan-cellular.jpg" alt="Exterior shot of 24 Savile Row">
							</div>
							<div class="core-office">
								<p class="office"><span></span>Office</p>
								<p class="core"><span></span>Core</p>
							</div>
							<div id="compass" class="north">
								<img src="/img/floor-plan/compass.jpg" alt="Compass" class="full-w">
							</div>
							<div class="clear hpad-bottom"></div>
						</div>
					</div>
				</div>
				<div class="quart pad-left-md left">
					<h3>Fourth Floor</h3>
					<ul class="jumper">
						<li class="jumpToZero">Open Plan</li>
						<li class="jumpToOne">Cellular</li>
					</ul>
					<h3>Sixth Floor</h3>
					<ul class="jumper">
						<li class="bold jumpToTwo">Open Plan</li>
						<li class="jumpToThree">Cellular</li>
					</ul>
					<div class="clear hpad-bottom"></div>
					<p class="foot-note">Plans not to scale, indicative only.</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
</div>



<?php
include '../footer.php'
?>