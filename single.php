<?php get_header(); ?>
    <div class="full bg-gray2 ">
        <div id="h1-bar" class="wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title() ;?></h1>
        </div><!--h1-bar--> 
    </div><!--end full-class-->
            <div id="main" class="wrapper ">
            <div id="single-contaner">
               <h6><?php the_time('F jS, Y'); ?> by Condimentum Egestas</h6>
               <?php the_post_thumbnail(); ?>
               <?php the_content() ;?>
               <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/share-button.png" class="right zero" /></a>
               <div class="clear"></div> 
               <hr class="l-gray ">
               <h3>Related Posts</h3>
               <div class="col-3">
                   <div class="rp-img">
                       <img src="images/post1.png" /> 
                   </div>
                   <div class="photo-overlay ">
                       <h4><a href="single.php">Related Post #1</a></h4>
                   </div>
               </div><!--end col -->
               <div class="col-3">
                   <div class="rp-img">
                       <img src="images/post2.png" /> 
                   </div>
                   <div class="photo-overlay ">
                       <h4><a href="single.php">Related Post #2</a></h4>
                   </div>
               </div><!--end col -->
               <div class="col-3">
                   <div class="rp-img">
                       <img src="images/post0.png" /> 
                   </div>
                   <div class="photo-overlay ">
                       <h4><a href="single.php">Related Post #3</a></h4>
                   </div>
               </div><!--end col -->
               <div class="clear"></div>
               <?php comments_template(); ?>
<?php endwhile; ?><?php endif; ?>
           </div><!--end single-contaner-->
           <?php get_sidebar('categories'); ?>
        </div><!--end main-contaner-->
    
            
<?php get_footer(); ?>