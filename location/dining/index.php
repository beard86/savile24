<?php 
// Page Setup
$title = 'Location';
$subtitle = 'dining';
$logocolour = 'blue';
$PHP_SELF = $_SERVER['PHP_SELF'];
include '../../header.php';
?>
<div class="sub-nav-bg"></div>
<div class="container">
	<div class="down" id="hero-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/dining-hero.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<h1 class="orange large uppercase">DINING</h1>
		</div>
	</section>


	<section id="intro">
		<div class="intro-text">
			<h2>
				Every day in Mayfair, the world’s top chefs conjure artful displays that span the full spectrum of culinary brilliance. 22 Michelin-starred restaurants in the neighbourhood showcase everything from the reverent haute cuisine classicism of Michel Roux Jr at Le Gavroche, to the delights of Pierre Gagnaire’s ingenious molecular gastronomy at Sketch.
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">
			<div class="rel six centralise">
				<div class="two pad-left full-h left">
					<div class="tabled">
						<div class="cell no-margin-header">
							<a href="/location/dining/bellamys.php">
								<h2 class="orange">Read our case study</h2>
								<h2 class="orange">with Bellamy’s</h2><br/>
								<h2 class="orange">restaurant ></h2>
							</a>
						</div>
					</div>
				</div>
				<div class="two pad-right-s right">
					<a href="/location/dining/bellamys.php">
						<img src="/img/bellamys.jpg" alt="DSquared2" class="full-w">
					</a>
				</div>
				<div class="clear pad-bottom"></div>
			</div>
			<div class="rel">
				<div class="two left">
					<img src="/img/dining-1.jpg" alt="Exterior" class="full-w">
				</div>
				<div class="three pad-left full-h a-right">
					<div class="tabled">
						<div class="cell">
							<p class="bold">Mayfair reads like a roll call of some of the world’s most extraordinary culinary talents: Helen Darròze and Alain Ducasse, Angela Hartnett and Simon Rogen.</p>
							<p>Often discreet, always opulent, there’s a heady mix here. Old school meets contemporary. Rule breakers meet the old guard. Excellence comes as standard.</p>
						</div>
					</div>

				</div>
				<div class="clear pad-bottom-xlg"></div>
			</div>
			<div class="rel">
				<div class="three pad-right full-h a-left">
					<div class="tabled">
						<div class="cell purple">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida facilisis nunc non finibus. Phasellus nec erat lacus. Aenean in neque nisl. Donec pulvinar tortor in accumsan pretium. Integer convallis lorem non ex pretium lacinia. Aenean euismod condimentum tellus, eu accumsan lacus porta ac. Aliquam consequat tortor nec lectus rutrum bibendum.</p>
							<p>Sed molestie purus odio, fringilla congue dui mattis eleifend. Suspendisse pretium condimentum molestie. Etiam ante tellus, mollis placerat libero at, volutpat sagittis tellus. Donec nisi ligula, elementum id feugiat efficitur, efficitur ut libero. Proin a est malesuada, bibendum lacus in, lacinia metus. Integer eget aliquam felis. Donec vel massa sit amet sapien mollis malesuada ut eleifend augue. Phasellus ac sem viverra, sagittis justo in, ultrices libero. Mauris pretium condimentum risus at ultricies. Sed dignissim, elit id consequat tristique, velit ex feugiat arcu, vel imperdiet mauris justo sit amet mi.</p>
						</div>
					</div>

				</div>
				<div class="two right">
					<img src="/img/dining-2.jpg" alt="Exterior" class="full-w">
				</div>
				<div class="clear pad-bottom-xlg"></div>
			</div>
		</div>
	</section>
	<section id="similar">
		<div class="wrapper">
			<div class="three left pad-left">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/test3.jpg');"></div>
					<div class="abs-full">
						<div class="tabled">
							<div class="cell">
								<h2>
									Art
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/test2.jpg');"></div>
					<div class="abs-full">
						<div class="tabled">
							<div class="cell">
								<h2>
									Dining
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/test3.jpg');"></div>
					<div class="abs-full">
						<div class="tabled">
							<div class="cell">
								<h2>
									Social
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</section>

</div>




<?php
include '../../footer.php'
?>