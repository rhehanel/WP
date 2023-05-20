<?php 
    if (have_rows('projects')):
        while ( have_rows('projects')): the_row(); ?>
            <div>
                <h3><?php the_sub_field('projects'); ?></h3>
                <?php if( have_rows('project') ): ?>
                    <ul>
                        <?php while( have_rows('project') ): the_row(); ?>
                            <?php echo the_sub_field('name'); ?>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endwhile;
    endif;
?>