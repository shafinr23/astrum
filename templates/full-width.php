<?php
/*
 * Template Name: Full Width
 */
get_header();
?>

    <div id="content-wrapper">





        <!-- Content
        ================================================== -->
        <!-- Container -->
        <div class="container">

            <div class="sixteen columns">
                <?php while(have_posts()):the_post();
                    the_content();
                endwhile; ?>






            </div>




        </div>
        <!-- Container / End -->


    </div>
    <!-- Content Wrapper / End -->


<?php

get_footer();
