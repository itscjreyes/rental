<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="banner">
	<div class="devWrapper">
		<h1>Rent Office Space in Toronto</h1>
		<form action=http://offices.rentofficespacetoronto.com/index.php method=get>
			<div class="select">
				<select id="area" class="form-control" name="area">
					<option value="">Area</option>
					<option value="">All of Toronto</option>
					<option value="Downtown">Downtown Core</option>
					<option value="East_York">East York</option>
					<option value="Etobicoke">Etobicoke</option>
					<option value="Junction">The Junction</option>
					<option value="King_East">King East</option>
					<option value="King_West">King West</option>
					<option value="Liberty_Village">Liberty Village</option>
					<option value="Midtown">Midtown</option>
					<option value="Toronto North">Toronto North</option>
					<option value="Parkdale">Parkdale</option>
					<option value="Queen_West">Queen West</option>
					<option value="Yonge_and_Dundas">Yonge and Dundas</option>
					<option value="Yorkville">Yorkville</option>
				</select>
			</div>

			<div class="select">
				<select class="form-control" name="ListPrice_min">
					<option selected="selected" value="">Monthly Price Min.</option>
					<option value="">No Minimum</option>
					<OPTION VALUE="5000">$5,000</OPTION>
					<OPTION VALUE="10000">$10,000</OPTION>
					<OPTION VALUE="20000">$20,000</OPTION>
					<OPTION VALUE="30000">$30,000</OPTION>
					<OPTION VALUE="40000">$40,000</OPTION>
					<OPTION VALUE="45000">$45,000</OPTION>
					<OPTION VALUE="50000">$50,000</OPTION>
				</select>
			</div>

			<div class="select">
				<select class="form-control" name="ListPrice_max">
					<option selected="selected" value="">Monthly Price Max.</option>
					<option value="">Unlimited</option>     
					<OPTION VALUE="10000">$10,000</OPTION>
					<OPTION VALUE="20000">$20,000</OPTION>
					<OPTION VALUE="30000">$30,000</OPTION>
					<OPTION VALUE="40000">$40,000</OPTION>
					<OPTION VALUE="45000">$45,000</OPTION>
					<OPTION VALUE="50000">$50,000</OPTION>
				</select>
			</div>

			<div class="select">
				<select id="SqFtHeated_min" class="form-control" name="SqFtHeated_min">
					<option selected="selected" value="">Square Footage Min.</option>
					<option value="">No Minimum</option>   
					<option value="1000">1,000</option>
					<option value="2000">2,000</option>
					<option value="3000">3,000</option>
					<option value="4000">4,000</option>
					<option value="5000">5,000</option>
					<option value="10000">10,000</option>
				</select>
			</div>

			<div class="select">
				<select id="SqFtHeated_max" class="form-control" name="SqFtHeated_max">
					<option selected="selected" value="">Square Footage Max.</option>
					<option value="">Unlimited</option>
					<option value="1000">1,000</option>
					<option value="2000">2,000</option>
					<option value="3000">3,000</option>
					<option value="4000">4,000</option>
					<option value="5000">5,000</option>
					<option value="10000">10,000</option>
					<option value="50000">50,000</option>
				</select>
			</div>

			<button type="submit" name="Submit" value="Go">Find Your Space</button>				
			<input name="limit_start" type="hidden" value="0" />
			<input name="limit_step" type="hidden" value="25" />
			<input name="query_id" type="hidden" value="sixspace" />
			<input name="unique_frame_link" type="hidden" value="sixspace" />
			<input type=hidden name=action value=select>
			<input type=hidden name=displayNavigationBanner value=no>
			<input type=hidden name=displaySortBy value=no>
			<input type=hidden name=displayDisclaimer value=no>

		</form>
	</div> <!-- .devWrapper -->
</div> <!-- .banner -->

<div class="homeNeighbourhoods">
	<div class="devWrapper">
		<h2>Toronto Neighbourhoods</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dignissimos sapiente inventore, sit corrupti molestias earum? Corrupti deserunt, nulla eligendi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque maxime qui ad.</p>
		<div class="neighbourhoodsGroup">
			<!-- Downtown Core -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Downtown">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/downtown-core-office-space.jpg" alt="Downtown Core" title="Downtown Core">
					</figure>
					<h3>Downtown Core</h3>
				</a>
			</div>

			<!-- East York -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=East_York">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/east-york-office-space.jpg" alt="East York" title="East York">
					</figure>
					<h3>East York</h3>
				</a>
			</div>

			<!-- Etobicoke -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Etobicoke">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/etobicoke-office-space.jpg" alt="Etobicoke" title="Etobicoke">
					</figure>
					<h3>Etobicoke</h3>
				</a>
			</div>

			<!-- The Junction -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Junction">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/the-junction-office-space.jpg" alt="The Junction" title="The Junction">
					</figure>
					<h3>The Junction</h3>
				</a>
			</div>

			<!-- King West -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=King_West">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/king-west-office-space.jpg" alt="King West" title="King West">
					</figure>
					<h3>King West</h3>
				</a>
			</div>

			<!-- King East -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=King_East">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/king-east-office-space.jpg" alt="King East" title="King East">
					</figure>
					<h3>King East</h3>
				</a>
			</div>

			<!-- Leslieville -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Leslieville">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/leslieville-office-space.jpg" alt="Leslieville" title="Leslieville">
					</figure>
					<h3>Leslieville</h3>
				</a>
			</div>

			<!-- Liberty Village -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Liberty_Village">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/liberty-village-office-space.jpg" alt="Liberty Village" title="Liberty Village">
					</figure>
					<h3>Liberty Village</h3>
				</a>
			</div>

			<!-- Midtown -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Midtown">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/midtown-office-space.jpg" alt="Midtown" title="Midtown">
					</figure>
					<h3>Midtown</h3>
				</a>
			</div>

			<!-- Toronto North -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Toronto_North">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/toronto-north-office-space.jpg" alt="Toronto North" title="Toronto North">
					</figure>
					<h3>Toronto North</h3>
				</a>
			</div>

			<!-- Parkdale -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Parkdale">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/parkdale-office-space.jpg" alt="Parkdale" title="Parkdale">
					</figure>
					<h3>Parkdale</h3>
				</a>
			</div>

			<!-- Queen West -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Queen_West">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/queen-west-office-space.jpg" alt="Queen West" title="Queen West">
					</figure>
					<h3>Queen West</h3>
				</a>
			</div>

			<!-- Yonge and Dundas -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Yonge_and_Dundas">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/yonge-dundas-office-space.jpg" alt="Yonge and Dundas" title="Yonge and Dundas">
					</figure>
					<h3>Yonge and Dundas</h3>
				</a>
			</div>

			<!-- Yorkville -->
			<div class="neighbourhoodSingle">
				<a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Yorkville">
					<figure>
						<img src="http://rentofficespacetoronto.com/wp-content/uploads/2017/11/yorkville-office-space.jpg" alt="Yorkville" title="Yorkville">
					</figure>
					<h3>Yorkville</h3>
				</a>
			</div>

		</div> <!-- .neighbourhoodsGroup -->
	</div>
</div> <!-- .homeNeighbourhoods -->

<div class="homeContact">
	<div class="devWrapper">
		<h2>Toronto Commercial Office Space For Lease</h2>
		<h3>Need office space in Toronto? We help organizations of any kind find the perfect office space in Toronto.</h3>
		<a class="fullButton" href="http://rentofficespacetoronto.com/contact-us/">Get in Touch</a>
	</div>
</div>

<div class="homeSocial">
	<div class="devWrapper">
		<div class="mediaGrid"></div>
		<div class="homeSocialDetails">
			<h2>Stay Updated <br>Follow Us</h2>
			<a href="https://facebook.com/RentSpaceToronto" target="_blank"><i class="fa fa-facebook-official"></i> /RentSpaceToronto</a>
			<a href="https://www.instagram.com/rentofficetoronto/" target="_blank"><i class="fa fa-instagram"></i> @rentofficetoronto</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>