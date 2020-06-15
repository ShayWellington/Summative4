<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        <?php endif; ?>

        <h3> <?php the_title(); ?> </h3>

        <?php
        the_excerpt(); //cut of some portion of text
        ?>

        <a href="<?php the_permalink(); ?>"> Read more </a>
<?php endwhile;
else :
endif;
?>
