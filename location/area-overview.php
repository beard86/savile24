<?php 
// Page Setup
$title = 'Location';
$subtitle = 'area-overview';
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
		<img src="/img/hero/area-overview.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<div class="tabled">
				<div class="cell">
					<h1 class="large ">Area Overview</h1>
				</div>
			</div>
		</div>
	</section>


	<section id="intro">
		<div class="intro-text">
			<h2 class="purple">
				This is the heart of the heart of London. Always evolving, yet always true to its soul, character and heritage. Across business, the arts, fashion, dining and culture, Mayfair is a place of discernment and influence on a global scale. This is both an international statement address, and a place to enjoy.  Take centre stage at 24 Savile Row.
			</h2>
		</div>
	</section>

	<section id="main" class="local-map">
		<div class="wrapper">
			<div class="rel">
				<div class="content three full-h left" id="hotspot-list">
					<h3 data-type="occupiers" class="hilight">
						<span class="orange underline">Local Occupiers</span>
					</h3>
					<div style="display:none;" class="occupiers">
						<ul>
							<li data-override="1">01. Ardian</li>
							<li data-override="2">02. Arcelor Mittal</li>
							<li data-override="3">03. PetroSaudi International</li>
							<li data-override="4">04. Ares Capital Corporation</li>
							<li data-override="5">05. Tudor Capital</li> 
							<li data-override="6">06. Castlelake</li>
							<li data-override="6">06. Angelo, Gordon &amp; Co</li>
							<li data-override="7">07. Fortress Investment Group</li>
							<li data-override="8">08. Trafigura</li>
							<li data-override="9">09. Apollo Global Management</li>
							<li data-override="10">10. York Capital</li>
							<li data-override="11">11. Eton Park</li>
						</ul>
					</div>

					<h3 data-type="culture">
						<span class="orange underline">Culture &amp; Dining</span>
					</h3>
					<div style="display:none;" class="culture">		
						<ul>
							<li data-override="1">12. Pollen Street Social</li>
							<li data-override="2">13. Sketch</li>
							<li data-override="3">14. Sartoria</li>
							<li data-override="4">15. Alyn Williams at The Westbury</li>
							<li data-override="5">16. The Square</li>
							<li data-override="6">17. Wild Honey</li>
							<li data-override="7">18. Hibiscus</li>
							<li data-override="8">19. Hélène Darroze at the Connaught </li>
							<li data-override="9">20. Fera at Claridge's</li>
							<li data-override="10">21. Cecconi's</li>
						</ul>
					</div>
				</div>
				<div class="image six pad-left right" id="hotspot-map">
					<div class="orange-hotspot">
						<img class="logo-orange" src="/img/logo-orange.png" />
					</div>		
					<div class="occupiers-hotspots">
						
						<span style="top: 67%; left: 40%;">01</span>
						<span style="top: 60%; left: 39%;">02</span>
						<span style="top: 69%; left: 27.4%;">03</span>
						<span style="top: 50%; left: 61%;">04</span>
						<span style="top: 72%; left: 68%;">05</span>
						<span style="top: 43%; left: 55.5%;">06</span>
						<span style="top: 62%; left: 60%;">07</span>
						<span style="top: 26%; left: 43%;">08</span>
						<span style="top: 24%; left: 48.5%;">09</span>
						<span style="top: 57%; left: 58.5%;">10</span>
						<span style="top: 51%; left: 57%;">11</span>
					</div>
					
					<div class="culture-hotspots">
						<span style="top: 24%; left: 51%;">12</span>
						<span style="top: 33%; left: 56%;">13</span>
						<span style="top: 53%; left: 57%;">14</span>
						<span style="top: 51%; left: 46%;">15</span>
						<span style="top: 55%; left: 40.7%;">16</span>
						<span style="top: 34%; left: 44%;">17</span>
						<span style="top: 30.5%; left: 53%;">18</span>
						<span style="top:44%; left:18%;">19</span>
						<span style="top:24%; left:30%;">20</span>
						<span style="top: 66%; left: 52%;">21</span>
					</div>
					<img src="/img/hotspot-map.png" alt="map" class="full-w desktop">
					<img src="/img/hotspot-map-mobile.png" alt="map" class="full-w hidden">
					<div class="clear pad-bottom-xlg"></div>
					</div>
				</div>
					<div class="rel">
						<div class="two left">
							<img src="/img/area-overview-1.jpg" alt="Area overview" class="full-w">
						</div>
						<div class="three right transport">
							<h2 class="orange underline">
							Transport
							</h2>
							<div class="tabled two left pad-right">
								<div class="tbl-row orange head">
										<div class="cell aleft bold">
											<i class="icon underground"></i>
											<span>Underground</span>
										</div>
										<div class="cell aright"></div>
								</div>
								<div class="tbl-row orange ">
										<div class="cell aleft pad-bottom-pad">from Oxford Circus</div>
										<div class="cell aright pad-bottom-pad">mins</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Euston</div>
										<div class="cell aright">2</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Victoria</div>
										<div class="cell aright">3</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">King's Cross St Pancras</div>
										<div class="cell aright">4</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Bank</div>
										<div class="cell aright">8</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Paddington</div>
										<div class="cell aright">7</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Liverpool Street</div>
										<div class="cell aright">10</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Canary Wharf</div>
										<div class="cell aright">20</div>
								</div>
							</div>
							<div class="tabled two right">
								<div class="tbl-row orange head">
										<div class="cell aleft bold">
											<i class="icon crossrail"></i>
											<span>Crossrail (2018)</span>
										</div>
										<div class="cell aleft"></div>
								</div>
								<div class="tbl-row orange">
										<div class="cell aleft pad-bottom-pad">from Bond St</div>
										<div class="cell aright pad-bottom-pad">mins</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Tottenham Court Road</div>
										<div class="cell aright">1</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Paddington</div>
										<div class="cell aright">3</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Farringdon</div>
										<div class="cell aright">4</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Liverpool Street</div>
										<div class="cell aright">7</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Canary Wharf</div>
										<div class="cell aright">13</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Stratford</div>
										<div class="cell aright">15</div>
								</div>
								<div class="tbl-row">
										<div class="cell aleft">Heathrow</div>
										<div class="cell aright">27</div>
								</div>
								<div class="clear pad-bottom"></div>
							</div>

						</div>
				<div class="clear pad-bottom-xlg"></div>
			</div>
		</div>
	</section>
	<section id="similar">
		<div class="wrapper">
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/fashion.jpg');"></div>
					<div class="abs-full">
						<a href="/location/fashion">
							<div class="tabled">
								<div class="cell">
									<h2>
										Fashion
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/dsquare.jpg');"></div>
					<div class="abs-full">
						<a href="/location/fashion/double-vision.php">
							<div class="tabled">
								<div class="cell">
									<h2 class="orange">
										Dsquared2
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-left">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/art.jpg');"></div>
					<div class="abs-full">
						<a href="/location/art">
							<div class="tabled">
								<div class="cell">
									<h2>
										Art 
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/hauser.jpg');"></div>
					<div class="abs-full">
						<a href="/location/art/hauser-and-wirth.php">
							<div class="tabled">
								<div class="cell">
									<h2 class="orange">
										Hauser &amp; Wirth
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/dining.jpg');"></div>
					<div class="abs-full">
						<a href="/location/dining">
							<div class="tabled">
								<div class="cell">
									<h2>
										Dining
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-left">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/bellamy.jpg');"></div>
					<div class="abs-full">
						<a href="/location/dining/bellamys.php">
							<div class="tabled">
								<div class="cell">
									<h2 class="orange">
										Bellamy’s
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/social.jpg');"></div>
					<div class="abs-full">
						<a href="/location/social">
							<div class="tabled">
								<div class="cell">
									<h2>
										Social
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/foggs.jpg');"></div>
					<div class="abs-full">
						<a href="/location/social/mr-foggs.php">
							<div class="tabled">
								<div class="cell">
									<h2 class="orange">
										Mr. Fogg’s
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</section>

</div>




<?php
include '../footer.php'
?>