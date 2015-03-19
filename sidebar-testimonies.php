<div id="sidebar-test">
    <?php 
    $my_query = new WP_Query('post_type=experience&page-areas=experience-sidebar&showposts=20'); 
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <div class="test-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/open-quote.png" class="left img-mar"/>
            <p><?php (the_field('testimonial')); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/close-quote.png" class="img-push"/><br><br>
                <span>— <?php the_title(); ?></span></p>
        </div>
    <?php endwhile; ?>
</div>