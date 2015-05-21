<?php 
// Page Setup
$title = 'Home';
$logocolour = 'cream';
include 'header.php';
?>

<div class="container">
	<div class="down" id="hero-down">
		<img src="img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<div id="hero-carousel" class="owl-carousel owl-theme">
			<div class="item">
				<img src="/img/hero/home.jpg" alt="Exterior shot of 24 Savile Row">
				<div class="text-container">
					<h1 class="futura light alt-center">
						The art is the building <br>
						The building is 24 Savile Row
					</h1>
				</div>
			</div>
			<div class="item"><img src="/img/hero/home-2.jpg" alt="Exterior shot of 24 Savile Row"></div>
		</div>
	</section>

	<section id="intro">
		<div class="intro-text">
			<h2>
				Mayfair’s reputation as a style-driven retail destination is unparalleled. A celebrated address now has a landmark building to uniquely resonate with its surroundings.
			</h2>
			<h2>
				24,783 sq ft of office accommodation includes 8,691 sq ft of flagship retail on the ground and&nbsp;lower ground floors.
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">
			<div class="rel">
				<div class="three pad-right full-h">
					<div class="tabled">
						<div class="cell">
							<h2>Kate Malone</h2>
							<p>The renowned ceramic artist spent three years perfecting the detail to 24 Savile Row’s facade. With 10,000 intricately hand-crafted tiles, this was ‘making art at its most demanding’.</p>
							<h3>Watch the process unfold ></h3>
						</div>
					</div>

				</div>
				<div class="six pad-left-s right">
					<div class="video-container">
						<img src="/img/videos/malone.jpg" alt="Watch Kate Malone video" class="full-w">
						<video id="malone_video" class="video-js vjs-default-skin" width="100%" height="100%" data-setup='{"example_option":true,"preload":true,"autoplay":false,"controls":true}'>
						 <source src="/video/malone.mp4" type='video/mp4' />
						 <source src="/video/malone.webm" type='video/webm' />
						 <source src="/video/malone.ogv" type='video/ogg' />
						 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						</video>
					</div>

				</div>
				<div class="clear pad-bottom"></div>
			</div>
			<div class="rel">
				<div class="six pad-right-s left">
					<div class="video-container">
						<img src="/img/videos/associati.jpg" alt="Watch Storage Associati video" class="full-w">
						<video id="storage_video" class="video-js vjs-default-skin" width="100%" height="100%" data-setup='{"example_option":true,"preload":true,"autoplay":false,"controls":true}'>
						 <source src="/video/storage.mp4" type='video/mp4' />
						 <source src="/video/storage.webm" type='video/webm' />
						 <source src="/video/storage.ogv" type='video/ogg' />
						 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						</video>
					</div>
				</div>
				<div class="three pad-left full-h a-right">
					<div class="tabled">
						<div class="cell">
							<h2>Storage Associati</h2>
							<p>Asked to imagine the new entrance and reception to 24 Savile Row, this acclaimed Milan-based team began with marble and brass – natural materials that translate what Savile Row means: a true reflection of value.</p>
							<h3>&lt; Watch their story</h3>
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
			<div class="three left pad-left">
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
			<div class="clear"></div>

		</div>
	</section>
</div>

<?php
include 'footer.php';
?>