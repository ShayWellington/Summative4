<?php get_header(); ?>
<div class="container">
  <section class="row pt-5">
    <div class=" page-div col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 ml-lg-4">
      <h1 class="mb-5"> <?php the_title(); ?>   </h1>
      <?php if(has_post_thumbnail()): ?>
          <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
          </div>
      <?php endif; ?>

    <div>
      <?php get_template_part('includes/section','content'); ?>
    </div>

    </div>

    <div class="sidebar-col col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3">

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
</section>
</div>

<?php get_footer(); ?>
