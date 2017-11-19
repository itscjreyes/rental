<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="innerBanner">
	<div class="devWrapper">
		<h1>Contact Us</h1>
	</div>
</div>

<div class="contactSection">
	<div class="devWrapper">
		<div class="contactForm">
			<h2>Get in Touch</h2>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end the loop?>
		</div>
		<div class="contactImgs">
			<div style="background-image:url('http://rentofficespacetoronto.com//wp-content/uploads/2017/11/contact3.jpg');"></div>
			<div style="background-image:url('http://rentofficespacetoronto.com//wp-content/uploads/2017/11/contact2.jpg');"></div>
			<div style="background-image:url('http://rentofficespacetoronto.com//wp-content/uploads/2017/11/contact1.jpg');"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>