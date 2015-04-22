<?php 
// Page Setup
$title = 'Location';
$subtitle = 'art';
$logocolour = 'blue';
$PHP_SELF = $_SERVER['PHP_SELF'];
include '../header.php';
?>
<div class="sub-nav-bg"></div>
<div class="container">
	<div class="down" id="hero-down">
		<img src="../img/down.png" alt="Scroll Down">
	</div>
	<section id="hero">
		<div id="hero-carousel" class="owl-carousel owl-theme">
			<img src="../img/hero/home.jpg" alt="Exterior shot of 24 Savile Row">
		</div>
		<div class="text-container">
			<h1 class="orange large uppercase">Art</h1>
		</div>
	</section>


	<section id="intro">
		<div class="intro-text">
			<h2>
			Mayfair is where art meets. Renowned as the home of several of London’s famous galleries and auction houses, it’s the hunting ground of the world’s
			most formidable art dealers. This is a unique environment, where collectors and gallerists meet in the street and catch up over coffee. Proudly championing both emerging and established art, Mayfair is proof that opposites attract.
			</h2>
		</div>
	</section>

	<section id="main">
		<div class="wrapper">
			<div class="rel six centralise">
				<div class="two pad-left full-h left">
					<div class="tabled">
						<div class="cell no-margin-header">
							<h2 class="orange">Read our interview</h2>
							<h2 class="orange">interview with</h2><br/>
							<h2 class="orange">our neighbours ></h2>
						</div>
					</div>
				</div>
				<div class="two pad-right-s right">
					<img src="../img/hauser-and-wirth.jpg" alt="HAUSER &amp; WIRTH" class="full-w">
				</div>
				<div class="clear pad-bottom"></div>
			</div>
			<div class="rel">
				<div class="two left">
					<img src="../img/painting.jpg" alt="Painting" class="full-w">
				</div>
				<div class="three pad-left full-h a-right">
					<div class="tabled">
						<div class="cell purple">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet varius fermentum. Mauris nec mattis ex. Donec dui quam, ornare in quam eu, cursus aliquet justo. Integer in dapibus nisi. In hac habitasse platea dictumst. Donec vestibulum libero eget magna posuere pharetra. Aliquam</p>
							<p>Cras hendrerit eros sed tellus egestas, a ultrices odio porttitor. Vivamus sagittis finibus turpis, at aliquet justo posuere at. Nam cursus nulla eu velit sagittis, id volutpat mauris elementum. Suspendisse in faucibus dolor. Donec maximus ligula a eros tincidunt condimentum.</p>
							<p>Fusce rhoncus nisi turpis, quis finibus elit porta nec. Suspendisse nec ligula at nunc molestie elementum sit amet sed dui. Fusce eu orci a arcu ultrices sollicitudin sit amet at dui. Duis lacinia metus arcu, eget dapibus ipsum porttitor vitae. Morbi porta ante est, vitae congue enim maximus at. In id ipsum rutrum, viverra ligula vitae, tristique non.</p>
						</div>
					</div>

				</div>
				<div class="clear pad-bottom-lg"></div>
			</div>
			<div class="rel">
				<div class="three pad-left left">
					<div class="tabled">
						<div class="cell purple">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet varius fermentum. Mauris nec mattis ex. Donec dui quam, ornare in quam eu, cursus aliquet justo. Integer in dapibus nisi. In hac habitasse platea dictumst. Donec vestibulum libero eget magna posuere pharetra. Aliquam</p>
							<p>Cras hendrerit eros sed tellus egestas, a ultrices odio porttitor. Vivamus sagittis finibus turpis, at aliquet justo posuere at. Nam cursus nulla eu velit sagittis, id volutpat mauris elementum. Suspendisse in faucibus dolor. Donec maximus ligula a eros tincidunt condimentum.</p>
							<p>Fusce rhoncus nisi turpis, quis finibus elit porta nec. Suspendisse nec ligula at nunc molestie elementum sit amet sed dui. Fusce eu orci a arcu ultrices sollicitudin sit amet at dui. Duis lacinia metus arcu, eget dapibus ipsum porttitor vitae. Morbi porta ante est, vitae congue enim maximus at. In id ipsum rutrum, viverra ligula vitae, tristique non.</p>
						</div>
					</div>

				</div>
				<div class="main-carousel-wrap two right">
					<div id="main-carousel" class="owl-carousel owl-theme">
						<div class="item"><img src="../img/gallery.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="../img/gallery.jpg" alt="Exterior shot of 24 Savile Row"></div>
						<div class="item"><img src="../img/gallery.jpg" alt="Exterior shot of 24 Savile Row"></div>
					</div>
				</div>
				<div class="clear pad-bottom"></div>
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
									Fashion
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
include '../footer.php'
?>