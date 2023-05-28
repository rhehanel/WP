<div style="background-color:#bfd9d9; padding: 5px 20px; margin-bottom:200px;">
    <div sytle="padding-bottom: 20px;">
        <?php if(have_rows('link')) {
            while ( have_rows('link')): the_row(); ?>
                <div>
                    <i>링크: <?php echo the_sub_field('text'); ?></i>
                </div>
            <?php endwhile;
        } ?>
        <?php if(get_field('time')) {
            echo '<div><i>일시: ' . get_field('time') . '</i></div>';
        } ?>
        <?php if(get_field('location')) {
            echo '<div><i>장소: ' . get_field('location') . '</i></div>';
        } ?>
    </div>
    <div style="background: #fff;">
        <InnerBlocks/>
    </div>
</div>