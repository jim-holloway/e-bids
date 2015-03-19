<?php
    /*
     * Setting up your parameters for your menu
     * which you will use in your header
     */
    $mainMenu = array(
        "theme_location" => "main_menu",
        'menu_class' => 'navlist',
        "container" => "nav",
        "container_id" => "main-nav",
        "depth" =>1);

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title><?php bloginfo("name") . wp_title("|"); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--[if lt IE 10]><style>
    
    </style><![endif]-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
    <script type="text/javascript">
    $("html").addClass("js");
    $.fn.accordion.defaults.container = false;
    $(function()
    {
        $("#acc3").accordion(
        {
            initShow : "#current"
        });
        $("#acc1").accordion(
        {
            el : ".h",
            head : "h4, h5",
            next : "div",
            initShow : "div.outer:eq(1)"
        });
        $("#acc2").accordion(
        {
            obj : "div",
            wrapper : "div",
            el : ".h",
            head : "h4, h5",
            next : "div",
            showMethod : "slideFadeDown",
            hideMethod : "slideFadeUp",
            initShow : "div.shown",
            elToWrap : "sup, img"
        });
        $("html").removeClass("js");
    });
    </script>
    <script type="text/javascript">
    $(function()
    {
//  Fuild layout, centering the items
        $('#foo5').carouFredSel(
        {
            auto : false,
            width : '100%',
            prev : '#prev2',
            next : '#next2',
            items : 5,
            scroll : 1,
        });
    }); 
    </script>     
    <script type="text/javascript">
//STICKY NAV
    $(document).ready(function()
    {
        var top = $('#demo-bar').offset().top - parseFloat($('#demo-bar').css('marginTop').replace(/auto/, 100));
        $(window).scroll(function(event)
        {
            // what the y position of the scroll is
            var y = $(this).scrollTop();
    
            // whether that's below the form
            if (y >= top)
            {
                // if so, ad the fixed class
                $('#demo-bar').addClass('fixed');
            }
            else
            {
                // otherwise remove it
                $('#demo-bar').removeClass('fixed');
            }
        });
    }); 
    </script>                    
</head>
<body>
    <div class="full bg-black">
        <div id="socialh" class="wrapper">           
            <div class="iconh">
                <a href="https://facebook.com/eBidSystems?rf=139049232809203" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/circle-icon-facebook.png" /></a>
                <a href="https://twitter.com/ebidsystems" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/circle-icon-twitter.png" /></a>
                <a href="https://plus.google.com/101646839974508918905/posts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/circle-icon-googleplus.png" /></a>
                <a href="http://linkedin.com/company/ebid-systems" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/circle-icon-linkedin.png" /></a>                
            </div>
        </div>
    </div><!--end full-class-->
    <div class="full shadow-bottom ">
        <div id="header" class="wrapper"> 
           <h4 id="phone-icn"><a href="tel:+1 888.291.8430" class="orange" >+1 888.291.8430</a> </h4>    
            <div id="logo">
                <a href="<?php bloginfo('url'); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="eBid Systems" id="eBids-logo" title="eBidsystems"/></h1></a>                
            </div><!--end logo-->          
            <?php wp_nav_menu($mainMenu); ?>
            <div class="clear"></div>
        </div><!--end header-->
    </div><!--end full-class-->