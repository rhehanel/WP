<div>
    <p style="margin-bottom: 10px;">
        <i></i> | Tab Buttons:
        <?php if( have_rows('buttons') ): ?>
            <ul>
                <?php while( have_rows('buttons') ): the_row(); ?>
                    <?php echo the_sub_field('button_name'); ?><span>, </span>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </p>
</div>