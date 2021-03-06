<?php 
// Page Setup
$title = 'Building';
$subtitle = 'rhythm';
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
		<img src="/img/hero/building.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<div class="tabled">
				<div class="cell">
					<h1 class="large blue">Rhythm <i>of</i><br><i>the</i> Street</h1>
				</div>
			</div>
		</div>
	</section>

	<section id="intro">
		<div class="intro-text">
			<h2>
				<blockquote>One of the first principles of art so clearly seen in primitive work is truth to material, the artist shows an instinctive understanding of his material, its right use and possibilities.” 
					<footer>
						<cite>Henry Moore</cite>
					</footer>
				</blockquote>
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">

			<div class="rel">
				<div class="six pad-right-s left">
					<img src="/img/scribble.jpg" alt="24 Savile Row vision" class="full-w">
				</div>
				<div class="three pad-left full-h a-right">
					<div class="tabled">
						<div class="cell">
							<h2 class="orange">Vision</h2>

							<p class="bold">24 Savile Row is the vision of EPR architects, who invited renowned London-based ceramicist Kate Malone to help achieve a new concept in contemporary office building. </p>

							<p>This creative collaboration has realised not just another landmark for Mayfair, but the capital’s largest work of art. 24 Savile Row comes uniquely hung with 10,000 ceramic tiles, each oneintricately handcrafted, set on a handcast bronze plinth. </p>

							<p>Creating new beauty in detail, form and function, we are delighted to present this most exclusive office space, with interiors realised by Milan-based interior architects Storage Associati. </p>

						</div>
					</div>
				</div>
				<div class="clear pad-bottom"></div>
			</div>

			<div class="rel">
				<div class="two right">
					<img src="/img/ext.jpg" alt="Exterior" class="full-w">
				</div>
				<div class="three pad-right full-h">
					<div class="tabled">
						<div class="cell">
							<h2 class="orange">Realised</h2>
							<p class="bold">The ultimate pursuit of perfection</p>
							<p>To balance the decadence of her decorative art, her public and commercial art is on show in hospitals, parks, schools and libraries and its essence it to service the community.</p>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>

		</div>
	</section>
	<section id="similar">
		<div class="wrapper">
			<div class="three left pad-right">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/truth.jpg');"></div>
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
			<div class="three left pad-middle">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/test2.jpg');"></div>
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
			<div class="three left pad-left">
				<div class="square">
					<div class="bgimage" style="background-image: url('/img/squares/test3.jpg');"></div>
					<div class="abs-full">
						<a href="/building/light-and-dark.php">
							<div class="tabled">
								<div class="cell">
									<h2>
										<i>The</i> Story <i>of</i> Light <i>and</i> Dark
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