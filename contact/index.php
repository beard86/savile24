<?php 
// Page Setup
$title = 'Contact';
$subtitle = 'contact';
$logocolour = 'cream';
$PHP_SELF = $_SERVER['PHP_SELF'];
include '../header.php';
?>
<div class="container">
	<div class="down" id="hero-down">
		<img src="/img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<img src="/img/hero/home.jpg" alt="Exterior shot of 24 Savile Row">
		<div class="text-container">
			<h1 class="large orange">Contacts</h1>
			<div class="row pad-bottom">
				<h2 class="">CUSHMAN &amp; WAKEFIELD</h2>
			</div>
			<div class="row">
				<div class="left two">
					 <p class="bold title">Andy Tyler</p>
					<a href="tel:02071525250">020 7152 5250</a>
					<a href="mailto:andy.tyler@eur.cushwake.com">andy.tyler@eur.cushwake.com</a>
				</div>
				<div class="right two">
					<p class="bold title">James Taylor</p>
					<a href="tel:02071525166">020 7152 5166</a>
					<a href="mailto:andy.tyler@eur.cushwake.com">james.taylor@eur.cushwake.com</a>
				</div>
				<div class="clear pad-bottom"></div>
			</div>
			<div class="row pad-bottom">
				<h2>CBRE</h2>
			</div>
			<div class="row">
				<div class="left two">
					<p class="bold title">Matt Chicken</p>
					<a href="tel:02071822023">020 7182 2023</a>
					<a href="mailto:andy.tyler@eur.cushwake.com">matt.chicken@cbre.com</a>
				</div>
				<div class="right two">
					<p class="bold title">Lana Johnson</p>
					<a href="tel:02071822152">020 7182 2152 </a>
					<a href="mailto:lana.johnson@cbre.com">lana.johnson@cbre.com</a>
				</div>
				<div class="clear pad-bottom"></div>
			</div>
		</div>
	</section>
	<section id="intro">
		<div class="wrapper">
			<div class="two centralise">
				<h1 class="orange centralise large">Downloads</h1>
				<div class="three left pad-left">
					<div class="square">
						<div class="bgimage" style="background-image: url('/img/squares/test3.jpg');"></div>
						<div class="abs-full">
							<div class="tabled">
								<div class="cell">
								</div>
							</div>
						</div>
					</div>
					<h3>
						Plans
					</h3>
				</div>
				<div class="three left pad-middle">
					<div class="square">
						<div class="bgimage" style="background-image: url('/img/squares/test2.jpg');"></div>
						<div class="abs-full">
							<div class="tabled">
								<div class="cell">
								</div>
							</div>
						</div>
					</div>
					<h3>
						Space Plans
					</h3>
				</div>
				<div class="three left pad-right">
					<div class="square">
						<div class="bgimage" style="background-image: url('/img/squares/test3.jpg');"></div>
						<div class="abs-full">
							<div class="tabled">
								<div class="cell">
								</div>
							</div>
						</div>
					</div>
				</div>
				<h3>
					Full specification
				</h3>
				<div class="clear"></div>
			</div>
		</div>
	</section>
</div>

<?php
include '../footer.php'
?>