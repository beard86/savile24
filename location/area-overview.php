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
					<h1 class="orange large ">Area Overview</h1>
				</div>
			</div>
		</div>
	</section>


	<section id="intro">
		<div class="intro-text">
			<h2 class="purple">
				Quamet et od eos acerio. Picaect otatis et estemo comnis dolorrum aut elictisimpor minctia et ut esed expedit vidundestem fugiasi tatur? Us quisquo expedi nem que quis sequidel ipis rereste et ea consequunti cum facestrum quo eum quam, ut apitibus re poreptaquate magnim velectem aut ent.
			</h2>
		</div>
	</section>

	<section id="main" class="local-map">
		<div class="wrapper">
			<div class="rel">
				<div class="content three full-h left" id="hotspot-list">
					<h3 data-type="occupiers" class="hilight">
						<span class="orange">Local Occupiers</span>
					</h3>
					<div style="display:none;" class="occupiers">
						<ul>
							<li data-override="1">01. AXA Private Equity</li>
							<li data-override="2">02. The Grosvenor Estate</li>
							<li data-override="3">03. Evans Randall</li>
							<li data-override="4">04. Condé Nast</li>
							<li data-override="5">05. Perella Weinberg</li> 
							<li data-override="6">06. Arcelor Mittal</li>
							<li data-override="6">06. BTG Pactual</li>
							<li data-override="7">07. Audley Capital Partners</li>
							<li data-override="8">08. Rathbone Brothers</li>
							<li data-override="8">08. Kedge Capital</li>
							<li data-override="8">08. PetroSaudi International</li>
							<li data-override="9">09. Heritage Oil</li>
							<li data-override="9">09. Helical Bar</li>
							<li data-override="10">10. Tudor Capital</li>
							<li data-override="10">10. Ares</li>
							<li data-override="11">11. Castlelake</li>
							<li data-override="11">11. Antin Infrastructure</li>
							<li data-override="11">11. Gulfstream</li>
							<li data-override="12">12. GoldenTree</li>
							<li data-override="13">13. Angelo, Gordon</li>
							<li data-override="13">13. Viking Global Investors</li>
							<li data-override="13">13. York Capital Management</li>
							<li data-override="13">13. Eton Park Capital</li>
							<li data-override="13">13. General Atlantic Partners</li>
						</ul>
					</div>

					<h3 data-type="culture">
						<span class="orange">Culture &amp; Dining</span>
					</h3>
					<div style="display:none;" class="culture">		
						<ul>
							<li data-override="1">01. Pollen Street Social</li>
							<li data-override="2">02. Sketch</li>
							<li data-override="3">03. Sartoria</li>
							<li data-override="4">04. Hakkasan Mayfair</li>
							<li data-override="5">05. Nobu</li>
							<li data-override="6">06. Alyn Williams at The Westbury</li>
							<li data-override="7">07. The Square</li>
							<li data-override="8">08. Wild Honey</li>
							<li data-override="9">09. Brasserie Chavot</li>
							<li data-override="10">10. Hibiscus</li>
							<li data-override="11">11. Benares</li>
							<li data-override="12">12. Hélène Darroze at the Connaught </li>
							<li data-override="13">13. Halcyon Gallery</li>
							<li data-override="14">14. Gagosian</li>
							<li data-override="15">15. Royal Academy of Arts</li>
							<li data-override="16">16. Annabel's</li>
						</ul>
					</div>
				</div>
				<div class="image six pad-left right" id="hotspot-map">
					<div class="orange-hotspot">
						<img class="logo-orange" src="/img/logo-orange.png" />
					</div>		
					<div class="occupiers-hotspots">
						
						<span style="top:71%; left:43%;">01</span>
						<span style="top:27%; left:32%;">02</span>
						<span style="top:63%; left:56.4%;">03</span>
						<span style="top:23%; left:54%;">04</span>
						<span style="top:67%; left:45%;">05</span>
						<span style="top:60%; left:39.5%;">06</span>
						<span style="top:86%; left:1%;">07</span>
						<span style="top:70%; left:24%;">08</span>
						<span style="top:14%; left:56.5%;">09</span>
						<span style="top:50%; left:62%;">10</span>
						<span style="top:72%; left:69%;">11</span>
						<span style="top:27%; left:24%;">12</span>
						<span style="top:44%; left:56%;">13</span>	
					</div>
					
					<div class="culture-hotspots">
						
						<span style="top:24%; left:53%;">01</span>
						<span style="top:34%; left:58%;">02</span>
						<span style="top:51%; left:58%;">03</span>
						<span style="top:57%; left:39%;">04</span>
						<span style="top:70%; left:42%;">05</span>
						<span style="top:51%; left:46%;">06</span>
						<span style="top:54.5%; left:42%;">07</span>
						<span style="top:34%; left:45%;">08</span>
						<span style="top:49%; left:48%;">09</span>
						<span style="top:32%; left:53.4%;">10</span>
						<span style="top:62%; left:39.9%;">11</span>
						<span style="top:45%; left:23%;">12</span>
						<span style="top:44.5%; left:39%;">13</span>	
						<span style="top:33.4%; left:24%;">14</span>
						<span style="top:72%; left:57%;">15</span>
						<span style="top:62.5%; left:27%;">16</span>
					</div>

						<img src="/img/hotspot-map.png" alt="map" class="full-w desktop">
						<img src="/img/mobile-map.jpg" alt="map" class="full-w hidden">
					</div>
				<div class="clear pad-bottom-xlg"></div>
				</div>
					<div class="rel">
						<div class="two left">
							<img src="/img/area-overview-1.jpg" alt="Area overview" class="full-w">
						</div>
						<div class="three pad-right right">
							<div class="tabled purple">
								<h2 class="orange underline">
								Transport
								</h2>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
								<div class="tbl-row">
										<div class="cell">Xxxxx Xxxxx</div>
										<div class="cell">00 minutes</div>
								</div>
							</div>

						</div>
				<div class="clear pad-bottom-xlg"></div>
			</div>
			<div class="rel">
				<div class="two right full-h a-right">
					<div class="tabled">
						<div class="cell purple">
							<img src="/img/area-overview-2.jpg" alt="Area overview" class="full-w">
						</div>
					</div>
				</div>
				<div class="three pad-left left">
					<div class="tabled">
						<div class="cell purple">
							<h2 class="orange underline">
							Lorem Ipsum
							</h2>
							<p>Itaquo int eos eveliae volectistiam suntotatius suntibusam hitempo ristiam, ut in nemo bea sit alia dolendenes qui dolo beatem explaccabo. Itatur anihilit aliquid qui ant am, volores sumquidis eumquia dis cum est quas et lab iur? Atur as eost omnihic imaximus quos quam et magnihi libusae. Ut omnihitae nos qui quatem ut dolo tecessi tatur?</p>
							<p>At rerita nestias pictisc imusapis est ut aut ut et pre quibus et a net optaeptas aspernatet, quam quas exped minulpa pelit harum hit volupta tquiber eptatec ullaborepe cus, cuptat res pos ducitatusam quam aut exceratem. Mo od milit remperat. Aquo enis am adi volumquae ex et moluptae rerum que latem adit facit aliquatur?umquam, conest faccum ima volupta ssequia ni omnienis derciistore quam, nos dolendae. Itat venderatia quodiam reicita dolorectum qui blabor sanis nusamus. At rerita nestias pictisc imusapis est ut aut ut et.</p>
							<p>Nunc sollicitudin nunc sit amet augue posuere, quis porta nisl dignissim. Curabitur neque erat, faucibus rutrum mattis eget, pretium eget tortor. Etiam tincidunt tincidunt sem a posuere. Vivamus consectetur dui augue, sagittis vehicula justo ultricies porta. Maecenas eu porttitor velit. Aenean dictum feugiat consectetur. Nullam vestibulum viverra enim.</p>
						</div>
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
										Bellamy's
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
										Mr. Fogg's
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