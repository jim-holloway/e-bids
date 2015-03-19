<?php get_header(); ?>
    <div class="full bg-gray2 ">
        <div id="h1-bar" class="wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title() ;?></h1>
        </div><!--h1-bar--> 
    </div><!--end full-class-->

            <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>