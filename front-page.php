<?php get_header(); ?>
        <?php 
        $my_query = new WP_Query('pagename=home'); 
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <div class="full bg-gray ">
        <div id="hero" class="wrapper">
            <h1><?php (the_field('hero_primary_text')); ?></h1>
            <div id="hero-img">
                <img src="<?php (the_field('hero_image')); ?>" alt="eBid Systems" title="eBidsystems"/> 
            </div> 
            <h3 class="bold"><?php (the_field('hero_demo_button_text')); ?></h3>   
            <a href="contact-demo.php"><span class="button">Schedule a Demo</span></a>     
        </div><!--end hero--> 
    </div><!--end full-class--> 
        <div id="roll-over" class="wrapper">
            <h2><?php (the_field('module_primary_text')); ?></h2>
            <div class="col-3">
                <a href="<?php (the_field('module_1_image_link')); ?>"><span id="r1"><img src="<?php (the_field('module_1_image')); ?>" onmouseover="this.src='<?php (the_field('module_1_image_roll_over')); ?>'" onmouseout="this.src='<?php (the_field('module_1_image')); ?>'"  alt="Supplier Management" title="Supplier Management"/></span></a>
                <h3><?php (the_field('module_1_title')); ?></h3>
                <p><?php (the_field('module_1_description')); ?></p>
            </div>
            <div class="col-3">
                <a href="<?php (the_field('module_2_image_link')); ?>"><span id="r2"><img src="<?php (the_field('module_2_image')); ?>" onmouseover="this.src='<?php (the_field('module_2_image_roll_over')); ?>'" onmouseout="this.src='<?php (the_field('module_2_image')); ?>'"  alt="Sourcing and Bid Management" title="Sourcing and Bid Management"/></span></a>
                <h3><?php (the_field('module_2_title')); ?></h3>
                <p><?php (the_field('module_2_description')); ?></p>
            </div>
            <div class="col-3">
                <a href="<?php (the_field('module_3_image_link')); ?>"><span id="r3"><img src="<?php (the_field('module_3_image')); ?>" onmouseover="this.src='<?php (the_field('module_3_image_roll_over')); ?>'" onmouseout="this.src='<?php (the_field('module_3_image')); ?>'"  alt="Contract Management" title="Contract Management"/></span></a>
                <h3><?php (the_field('module_3_title')); ?></h3>
                <p><?php (the_field('module_3_description')); ?></p>
            </div>
            <div class="clear"></div>
            <h2>You’ll be in good company</h2>
        </div><!--end roll-over-->
    <div class="full alfa-gray">
        <div id="slider" class="wrapper">
            <div class="list_carousel responsive" >
            <ul id="foo5">
                <li style="width: 150px;"><img src="images/home-client-logo-1.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-2.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-3.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-4.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-5.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-6.png" /></li>
                <li style="width: 150px;"><img src="images/home-client-logo-7.png" /></li>
            </ul>
            <div class="clearfix"></div>
                <a id="prev2" class="prev" href="#">&lt;</a>
                <a id="next2" class="next" href="#">&gt;</a>
                <div id="pager2" class="pager"></div>
           </div>
        </div>
    </div><!--end full-class-->
        <div id="features" class="wrapper">
            <h2><?php (the_field('public_co_title')); ?></h2>
            <img src="<?php (the_field('public_co_image')); ?>" alt="eBid Systems" title="eBidsystems"/>
            <h4 class="d-gray bold">GovSourcing Edition</h4>
            <a href="<?php bloginfo('url'); ?>/public-sector-procurement"><span class="button">Learn More</span></a>            
            <p><?php (the_field('public_co_description')); ?></p>
            <div id="features-list">
                <?php (the_field('public_co_description_list')); ?>
            </div>
        </div><!--end features-->
        <?php endwhile; ?>
    <div class="full exp-gray">
        <div id="experiences" class="wrapper">
            <?php 
            $my_query = new WP_Query('post_type=experience&page-areas=front-page&showposts=1'); 
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/open-quote.png" /> <?php (the_field('testimonial')); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/close-quote.png" class="img-push2"/><br><br>
                    <span>— <?php the_title(); ?></span></p>
                <a href="<?php bloginfo('url'); ?>/experience"><span class="button">View More Experiences</span></a>
            <?php endwhile; ?>
        </div><!--end experiences-->
    </div><!--end full-class-->
    <div class="full exp-gray">
        <div id="home-demo" class="wrapper">
            <?php 
            $my_query = new WP_Query('pagename=home'); 
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <p><?php (the_field('footer_demo_text')); ?></p>
            <a href="contact-demo.php"><span class="button">Schedule a Demo</span></a>
        </div><!--end home-demo-->
    </div><!--end full-class-->
 <?php endwhile; ?>
<?php get_footer(); ?>