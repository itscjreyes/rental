<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1>404</h1>
		<section class="entry-content">
			<p>Oops! Sorry there's nothing here.</p>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
	<a class="blogPost" href="<?php the_permalink(); ?> ">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <span class="postImg" style="background-image: url('<?php echo $image[0]; ?>')">
				<span>Read Post</span>
		  </span>
		<?php endif; ?>
		<p class="postDate"><?php the_time('d F Y'); ?> &middot; <span class="postComments"><?php comments_number( 'No comments', '1 comment', '% comments' ); ?></span></p>
		<h3><?php the_title(); ?></h3>
	</a>
<?php endwhile; // End the loop. Whew. ?>