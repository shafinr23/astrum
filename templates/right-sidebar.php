<?php
/*
 * Template Name: Left SideBar
 */
get_header();
?>

    <div id="content-wrapper">


        <!-- Titlebar
        ================================================== -->
        <section id="titlebar">
            <!-- Container -->
            <div class="container">

                <div class="eight columns">
                    <h2>Our Blog</h2>
                </div>

                <div class="eight columns">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="#">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- Container / End -->
        </section>


        <!-- Content
        ================================================== -->
        <!-- Container -->
        <div class="container">
            <div class="four columns">


                <?php get_sidebar(); ?>

            </div>
            <div class="twelve alt columns">
                <?php while(have_posts()):the_post(); ?>
                    <?php the_content();  ?>
                <?php endwhile; ?>



                <?php pagination(); ?>


            </div>


            <!-- Sidebar
            ================================================== -->

        </div>
        <!-- Container / End -->


    </div>
    <!-- Content Wrapper / End -->


<?php
get_sidebar();
get_footer();

