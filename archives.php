<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title() ;?></h2>
                    <p>this is the archive.php</p>
                <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>