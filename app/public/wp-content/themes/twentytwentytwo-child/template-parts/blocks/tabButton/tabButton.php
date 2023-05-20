<?php 
    if (have_rows('button_text')) :
        while ( have_rows('button_text')): the_row(); ?>
            <div>
                <h6><?php echo the_row('button_text'); ?></h6>
            </div>
        <?php endwhile;
    endif;
?>