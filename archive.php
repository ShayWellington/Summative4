<?php get_header(); ?>

<div class="container">

<div class="row">

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
    <h2 class="myHeadings"> <?php echo single_cat_title(); ?> </h2>

    <?php get_template_part('includes/section','archive'); ?>

    <?php previous_posts_link();  ?>
    <?php next_posts_link();  ?>
  </div>

  <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3 mb-4">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'blog-sidebar' ); ?>
      <?php else : ?>
      <?php endif; ?>
  </div>

</div>

</div>
<?php get_footer(); ?>
