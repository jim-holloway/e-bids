<div id="sidebar-cat">
    <div id="grants-searchbar">
                <?php include('searchform.php'); ?>
            </div>
                <h3 class="gray">Categories</h3>
                    <ul>
                         <?php wp_list_categories('exclude=&title_li='); ?>
                    </ul>
                    <h3 class="gray">Archives</h3>
                    <div>
                    <ul id="acc3" class="accordion"> 
                        <?php
                        /**/
                        $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
                        FROM $wpdb->posts WHERE post_status = 'publish'
                        AND post_type = 'post' ORDER BY post_date DESC");
                        foreach($years as $year) :
                        ?>
                            <li class="arc"><a href="JavaScript:void()"><?php echo $year; ?></a>
                                <ul class="archive-sub-menu">
                                    <?    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
                                    FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'
                                    AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
                                    foreach($months as $month) :
                                    ?>
                                    <li><a href="<?php echo get_month_link($year, $month); ?>">
                                        <?php echo date( 'F', mktime(0, 0, 0, $month) );?></a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>        
                    </div>  
                    <div id="t-cloud">
                        <?php wp_tag_cloud() ;?>   
                    </div>   
            </div>