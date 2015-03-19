<?php get_header(); ?>
    <div class="full bg-gray2 ">
        <div id="h1-bar" class="wrapper">
            <h1>Results for <?php echo get_search_query(); ?></h1>
        </div><!--h1-bar--> 
    </div><!--end full-class-->
    
            <div id="main" class="wrapper ">
            <div id="blog-contaner">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <div class="blog-roll">
                       <img src="<?php the_field('thumb_photo'); ?>" />
                       <hgroup>
                           <h2><a href="<?php the_permalink(); ?> "><?php the_title() ;?></a></h2>
                           <h6><?php the_time('F jS, Y'); ?> by Condimentum Egestas</h6>
                       </hgroup>
                       <?php my_excerpt(35); ?>
                       <p class="text-right"><a href="<?php the_permalink(); ?>" class="l-blue">Read More >></a></p>
                       <hr class="l-gray">
                   </div> 
               <?php endwhile; ?><?php endif; ?>              
               
               <?php if(function_exists('wp_paginate')) {
                wp_paginate();
               } ?>

           </div><!--end blog-contaner-->
           <?php get_sidebar('categories'); ?>
        </div>               
<?php get_footer(); ?>