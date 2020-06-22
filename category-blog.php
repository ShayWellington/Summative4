<?php get_header(); ?>

<div class="container blog">
  <div class="row">

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4 my-3">
      <h1> Blog </h1>
      <?php get_template_part('includes/section','archive'); ?>

      <?php previous_posts_link();  ?>
      <?php next_posts_link();  ?>
    </div>

     <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3  mb-4">
      <?php get_sidebar( 'blog-sidebar' ); ?>

      <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'blog-sidebar' ); ?>
      <?php else : ?>
      <?php endif; ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
