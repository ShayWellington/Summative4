<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
?>
        <p>Author: <?php the_author(); ?> </p>
<?php
    endwhile;
else :
endif;
?>
