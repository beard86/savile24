<?php 
// Page Setup
$title = 'Building';
$subtitle = 'light-and-dark';
$logocolour = 'blue';
include '../header.php';
?>
<div class="sub-nav-bg"></div>
<div class="container">
	<div class="down" id="hero-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/building.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<div class="tabled">
				<div class="cell">
					<h1 class="blue large"><i>The</i> Story <i>of</i><br/> Light <i>and</i> Dark</h1>
				</div>
			</div>
		</div>
	</section>


	<section id="intro">
		<div class="intro-text">
			<h2>
			Contrasts of colour, texture and pattern create a striking presence and augment the beauty of the street. 
			Dark tiles on Conduit Street contrast with light tiles on Savile Row, and both harmonise with the existing Georgian architecture in fresh and contemporary ways.
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">

			<div class="rel">
				<div class="two pad-left-s right">
					<img src="/img/building-crop.jpg" alt="24 Savile Row vision" class="full-w">
				</div>
				<div class="three pad-right full-h a-left">
					<div class="tabled">
						<div class="cell">

							<p class="bold">A bronze plinth builds up as the elevation changes, with different lighting and London weather reflected back from the tiles.</p>

							<p>Architecturally, the refraction of light and colour is almost three-dimensional. Three types of windows and glazes continue to change the way light interacts with the structure and street.</p>

							<p>On the fifth and six floors, an expansive terrace responds to the timeless magnificence of the London skyline with the crisp beauty of zinc cladding, a rare feature in this area.</p>


						</div>
					</div>
				</div>
				<div class="clear pad-bottom"></div>
			</div>
		</div>
	</section>
	<section id="similar">
		<div class="wrapper">
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('../img/squares/rhythm.jpg');"></div>
					<div class="abs-full">
						<a href="/building/index.php">
							<div class="tabled">
								<div class="cell">
									<h2>
										The Rhythm <i>of the</i> Street
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('../img/squares/truth.jpg');"></div>
					<div class="abs-full">
						<a href="/building/truth-to-materials.php">
							<div class="tabled">
								<div class="cell">
									<h2>
										Truth <i>to</i> Materials
									</h2>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="three left pad-left">
				<div class="square">
					<div class="bgimage" style="background-image: url('../img/squares/test2.jpg');"></div>
					<div class="abs-full">
						<a href="/building/art-of-collaboration.php">
							<div class="tabled">
								<div class="cell">
									<h2 class="blue">
										<i>The</i> Art <i>of</i> Collaboration
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