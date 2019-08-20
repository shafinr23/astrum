<?php
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

            <div class="twelve alt columns">
                <?php while(have_posts()):the_post(); ?>
                    <!-- Post -->
                    <article class="post" style="margin: 0; border: 0;">

                        <figure class="post-img media">
                            <div class="mediaholder">
                                <a class="mfp-image" title="Touchpad Graphics Tablet" href="images/blog-01a.jpg">
                                    <?php if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    } ?>
                                    <div class="hovercover">
                                        <div class="hovericon"><i class="hoverzoom"></i></div>
                                    </div>
                                </a>
                            </div>
                        </figure>

                        <div class="post-format">
                            <div class="circle"><i class="icon-pencil"></i><span></span></div>
                        </div>

                        <section class="post-content">

                            <header class="meta">
                                <h2><a href="#"><?php the_title(); ?></a></h2>
                                <ul>
                                    <li>By <a href="#"><?php the_author_posts_link(); ?></a> - <?php echo get_the_date(); ?></li>
                                    <li><a href="#"><?php echo get_the_category_list($post_id); ?></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                            </header>

                            <p><?php the_content(); ?></p>
                        </section>
                        <div class="clearfix"></div>

                    </article>
                <?php endwhile; ?>






            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="four columns">

                <!-- Search Form -->
                <fieldset class="search-form" action="#" method="get">
                    <button class="search-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input class="search" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />
                </fieldset>


                <!-- About -->
                <div class="widget">
                    <h3 class="headline">About</h3><span class="line"></span><div class="clearfix"></div>
                    <p>Morbi eros bibendum lorem ipsum dolor pellentesque sed vel consectetur pulvinar pellentesque varius bibendum. </p>
                </div>


                <!-- Categories -->
                <div class="widget">
                    <h3 class="headline">Categories</h3><span class="line"></span><div class="clearfix"></div>
                    <nav class="categories">
                        <ul>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Photography</a></li>
                        </ul>
                    </nav>
                </div>


                <!-- Tabs -->
                <div class="widget" style="margin: 40px 0 0 0;">

                    <!-- Tabs Navigation -->
                    <ul class="tabs-nav blog">
                        <li class="active"><a href="#tab1" title="Recent Posts"><i class="icon-time"></i></a></li>
                        <li><a href="#tab2" title="Popular Posts"><i class="icon-star"></i></a></li>
                        <li><a href="#tab3" title="Recent Comments"><i class="icon-comments-alt"></i></a></li>
                    </ul>

                    <!-- Tabs Content -->
                    <div class="tabs-container">

                        <div class="tab-content" id="tab1">

                            <!-- Recent Posts -->
                            <ul class="widget-tabs">

                                <!-- Post #1 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-01.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">How To Download The Google Fonts Catalog</a></h4>
                                        <span>28 May 2013</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <!-- Post #2 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-02.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">The State of the Digital Music Industry</a></h4>
                                        <span>16 May 2013</span>
                                    </div>
                                    <div class="clearfix"></div>

                                </li>

                                <!-- Post #3 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-03.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">Solving the Puzzles of Mimicry in Nature</a></h4>
                                        <span>10 May 2013</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>

                        </div>

                        <div class="tab-content" id="tab2">

                            <!-- Popular Posts -->
                            <ul class="widget-tabs">

                                <!-- Post #1 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-04.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">New Sugary Drink Rules Complicate Coffee Orders</a></h4>
                                        <span>19 April 2013</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <!-- Post #2 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-01.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">How To Download The Google Fonts Catalog</a></h4>
                                        <span>28 May 2013</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <!-- Post #3 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-05.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <h4><a href="blog-post.html">Mobile Editing Tools For Smartphone Photos</a></h4>
                                        <span>03 May 2013</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="tab3">

                            <!-- Recent Comments -->
                            <ul class="widget-tabs comments">

                                <!-- Comment #1 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="../../../www.gravatar.com/avatar/00000000000000000000000000000000fc0a.png?d=mm&amp;s=100" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <span>John Doe on:</span>
                                        <h4><a href="blog-post.html">Solving the Puzzles of Mimicry in Nature</a></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <!-- Comment #2 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="../../../www.gravatar.com/avatar/00000000000000000000000000000000fc0a.png?d=mm&amp;s=100" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <span>Michael Brown on:</span>
                                        <h4><a href="blog-post.html">Mobile Editing Tools For Smartphone Photos</a></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <!-- Comment #3 -->
                                <li>
                                    <div class="widget-thumb">
                                        <a href="blog-post.html"><img src="images/blog-widget-06.jpg" alt="" /></a>
                                    </div>

                                    <div class="widget-text">
                                        <span>Vasterad on:</span>
                                        <h4><a href="blog-post.html">How To Download The Google Fonts Catalog</a></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                        </div>

                    </div>

                </div>


                <!-- Tags -->
                <div class="widget" style="margin: 13px 0 0 0;">
                    <h3 class="headline">Tags</h3><span class="line"></span><div class="clearfix"></div>

                    <nav class="tags">
                        <a href="#">Nature</a>
                        <a href="#">Entertainment</a>
                        <a href="#">Puzzles</a>
                        <a href="#">Photography</a>
                        <a href="#">Tourism</a>
                        <a href="#">Painting</a>
                        <a href="#">WordPress</a>
                        <a href="#">ThemeForest</a>
                    </nav>
                </div>


                <!-- Archives -->
                <div class="widget">
                    <h3 class="headline">Archives</h3><span class="line"></span><div class="clearfix"></div>
                    <nav class="categories">
                        <ul>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">February 2013</a></li>
                            <li><a href="#">January 2013</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <!-- Container / End -->


    </div>
    <!-- Content Wrapper / End -->


<?php
get_sidebar();
get_footer();
