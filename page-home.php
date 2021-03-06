<?php get_header(); ?>
  <section>
    <?php if ( ! post_password_required() ) :?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    <?php else: ?>
    <form class="password-protected" action="<?php bloginfo('url'); ?>/wp-login.php?action=postpass" method="post">
      <p>This page is password protected. Please enter your password below:</p>
      <p><input name="post_password" id="" type="password" size="20" /><input type="submit" name="Submit" value="Submit" /></p>
    </form>
    <?php endif; ?>
  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>