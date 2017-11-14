<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="innerBanner">
	<div class="devWrapper">
		<h1>Blog</h1>
	</div>
</div>

<div class="blogListing">
	<div class="devWrapper">
		<div class="listingWrapper">
    		<?php get_template_part( 'loop', 'index' );	?>
		</div>

    	<?php numeric_posts_nav(); ?>
	</div>
</div>

<?php get_footer(); ?>