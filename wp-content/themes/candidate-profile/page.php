<?php get_header(); ?>

<div class="intro">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

</div>


<?php get_footer(); ?>
