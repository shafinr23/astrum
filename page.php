<?php
get_header();
?>

    <div id="content-wrapper">





        <!-- Content
        ================================================== -->
        <!-- Container -->
        <div class="container">

            <div class="twelve alt columns">
                <?php while(have_posts()):the_post();
                    the_content();
                 endwhile; ?>






            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="four columns">


                <?php get_sidebar(); ?>

            </div>
        </div>
        <!-- Container / End -->


    </div>
    <!-- Content Wrapper / End -->


<?php
get_sidebar();
get_footer();
