<div>
  <?php get_header(); ?>
</div>

<div class="row">

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <h3 class="mt-5">Whoops, this page does not exist!</h3>
    <h4>Try searching for a keyword instead?</h4>
    <?php get_search_form(); ?>
  </div>

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">

    <div class="sidebar boarder border-secondary">
      <?php if(is_active_sidebar('page-sidebar')): ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
  </div>

</div>


<div>
  <?php get_footer(); ?>
</div>
