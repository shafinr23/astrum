<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes();   ?> > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/astrum/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 07:44:26 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Astrum</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- Header
================================================== -->
<header id="header">

    <!-- Container -->
    <div class="container">

        <!-- Logo / Mobile Menu -->
        <div class="three columns">

            <div id="mobile-navigation">
                <form method="GET" id="menu-search" action="#">
                    <input type="text" placeholder="Start Typing..." />
                </form>
                <a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>
                <span class="search-trigger"><i class="icon-search"></i></span>
            </div>

            <div id="logo">
                <h1><a href="index-2.html"><img src="images/logo.png" alt="Astrum" /></a></h1>
            </div>
        </div>


        <!-- Navigation
        ================================================== -->
        <div class="thirteen columns">




            <?php

                wp_nav_menu(array(
                        'theme_location'        =>  'mainmenu',
                        'menu_id'               =>   'responsive',
                        'container'             =>  'nav',
                        'container_class'       =>  'menu',
                        'container_id'          =>  'navigation',
                        'walker'                => new WP_Bootstrap_Navwalker(),

                ));
            ?>
        </div>

    </div>
    <!-- Container / End -->

</header>
<!-- Header / End -->

