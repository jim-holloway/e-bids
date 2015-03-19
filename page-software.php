<?php
/*
Template Name: Software
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="full bg-gray2 ">
        <div id="h1-bar" class="wrapper">
            <h1><?php the_title() ;?></h1>
        </div><!--h1-bar--> 
    </div><!--end full-class--> 
        <div id="exp-demo" class="wrapper">
           <p><?php (the_field('hero_primary_text')); ?></p> 
           <ul>
               <?php if(get_field('hero_software_links')): while(has_sub_field('hero_software_links')): ?>
               <li><a href="#<?php the_sub_field('page_link'); ?>"><span>&#9658;</span> <?php the_sub_field('software_link_title'); ?></a></li>
               <?php endwhile;endif; ?>
           </ul>
           <a href="contact-demo.php"><span class="button">Schedule a Demo</span></a>
           <div class="img-right">
               <img src="<?php (the_field('hero_image')); ?>" />
           </div>
        </div>   
        <div id="process" class="wrapper">
            <h2 class="text-center"><?php (the_field('process_title')); ?></h2>
            <ul>
                <?php (the_field('process_list')); ?>
            </ul>
        </div>
        <?php endwhile; ?><?php endif; ?>
    <div class="full exp-gray">
        <?php 
            $my_query = new WP_Query('post_type=experience&page-areas=e-procurement-software&showposts=1'); 
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <div id="experiences" class="wrapper">
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/open-quote.png" /> <?php (the_field('testimonial')); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/close-quote.png" class="img-push2"/><br><br>
                <span>— <?php the_title(); ?></span></p>
                <a href="<?php bloginfo('url'); ?>/experience"><span class="button">View More Experiences</span></a>
                <?php endwhile; ?>
        </div><!--end experiences-->
    </div><!--end full-class-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(get_field('software-module')): while(has_sub_field('software-module')): ?>
        <div id="<?php the_sub_field('module_id'); ?>" class="wrapper bid-manage soft-module">
            <div class="soft-single">
                <img src="<?php the_sub_field('module_image'); ?>" class="imgflt"/>
                <div class="soft-single-info">
                    <h2><?php the_sub_field('module_title'); ?></h2>
                    <p><?php the_sub_field('module_description'); ?></p>
                </div>
                <div class="col-2">
                    <ul>
                        <?php the_sub_field('features_list_left'); ?>
                    </ul>
                </div>
                <div class="col-2">
                    <ul>
                        <?php the_sub_field('features_list_right'); ?>
                    </ul>
                </div>
                <div class="clear"></div>
                <a href="<?php the_sub_field('module_link'); ?>"><span class="button">Learn More</span></a>
            </div>
        </div><!--end sup-manage-->
<?php endwhile;endif; ?> 

        <?php endwhile; ?><?php endif; ?> 
<?php get_footer(); ?>       