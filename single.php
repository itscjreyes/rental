<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  
    <div class="innerBanner blogBanner">
  
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="devWrapper" style="background-image: url('<?php echo $image[0]; ?>')">
      <?php endif; ?>
      <span><?php the_date('d F, Y'); ?></span>
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="singlePost">
    <div class="devWrapper">

      <div class="postContent">
        <?php the_content(); ?>
      </div><!-- .postContent -->

    </div> <!-- /.container -->
  </div> <!-- /.singlePost -->
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>