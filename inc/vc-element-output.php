<?php
//for icon
function icon($icon){
extract(
    shortcode_atts(
        array(
            'astum_icons'   =>  '',
            'astum_icons_heading'   =>  '',
            'astum_icons_des'   =>  '',

        ),$icon
    )

    );
ob_start();
?>
    <!-- Featured Box -->
    <div class="featured-box">
        <div class="circle"><i class="<?php echo esc_attr($astum_icons); ?>"></i><span></span></div>
        <div class="featured-desc">
            <h3><?php echo esc_attr($astum_icons_heading); ?></h3>
            <p><?php echo esc_attr($astum_icons_des); ?></p>
        </div>
    </div>
    <?php
return ob_get_clean();
}

add_shortcode('icons','icon');


//for recent works
function recent_work($recent){
    extract(
        shortcode_atts(
            array(
                'recent_works_p'   =>  '',


            ),$recent
        )

    );
    ob_start();
    ?>

    <?php
        $args = array('post_type' => 'recent_work' , 'posts_per_page' => $recent_works_p);
        $the_query = new WP_Query($args);
    ?>
    <!-- Headline -->
    <div class="sixteen columns">
        <h3 class="headline">Recent Work</h3>
        <span class="line" style="margin-bottom:0;"></span>
    </div>

    <!-- ShowBiz Carousel -->
    <div id="recent-work" class="showbiz-container sixteen columns">

        <!-- Navigation -->
        <div class="showbiz-navigation">
            <div id="showbiz_left_1" class="sb-navigation-left"><i class="icon-angle-left"></i></div>
            <div id="showbiz_right_1" class="sb-navigation-right"><i class="icon-angle-right"></i></div>
        </div>
        <div class="clearfix"></div>

        <!-- Portfolio Entries -->
        <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1">
            <div class="overflowholder">

                <ul>


                <?php while($the_query->have_posts()):$the_query->the_post(); ?>

                    <!-- Item -->
                    <li>
                        <div class="portfolio-item media">
                            <figure>
                                <div class="mediaholder">
                                    <a href="<?php the_permalink(); ?>" class="mfp-gallery" title="Green Leaves">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="hovercover">
                                            <div class="hovericon"><i class="fa fa-link" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <a href="single-project-half.html">
                                    <figcaption class="item-description">
                                        <h5><?php the_title(); ?></h5>
                                        <span><?php the_content(); ?></span>
                                    </figcaption>
                                </a>

                            </figure>
                        </div>
                    </li>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>

                </ul>
                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('recent_works','recent_work');

//for clients

function clients($recent){
    extract(
        shortcode_atts(
            array(
                'clients_p'   =>  '',


            ),$recent
        )

    );
    ob_start();
    ?>

    <?php
    $args = array('post_type' => 'client' , 'posts_per_page' => $clients_p);
    $the_query = new WP_Query($args);
    ?>
    <!-- Headline -->
    <div class="sixteen columns">
        <h3 class="headline">Our Clients</h3>
        <span class="line" style="margin-bottom:0;"></span>
    </div>

    <!-- Navigation / Left -->
    <div class="one carousel column"><div id="showbiz_left_2" class="sb-navigation-left-2"><i class="icon-angle-left"></i></div></div>

    <!-- ShowBiz Carousel -->
    <div id="our-clients" class="showbiz-container fourteen carousel columns" >

        <!-- Portfolio Entries -->
        <div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
            <div class="overflowholder">

                <ul>
                   <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li><?php the_post_thumbnail(); ?></li>
                       <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p><?php _e('sorry this is empty ') ?> </p>
                    <?php endif; ?>
                </ul>
                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <!-- Navigation / Right -->
    <div class="one carousel column"><div id="showbiz_right_2" class="sb-navigation-right-2"><i class="icon-angle-right"></i>
        </div></div>
    <?php
    return ob_get_clean();
}

add_shortcode('client','clients');



//for heading and text


function heading_texts($heading_text){
    extract(
        shortcode_atts(
            array(
                'heading_text_h'   =>  '',
                'heading_text_s'   =>  '',
                'heading_text_p'   =>  '',

            ),$heading_text
        )

    );
    ob_start();
    ?>
    <h3 class="headline"><?php echo esc_attr($heading_text_h); ?></h3><span class="line" style="margin-bottom:30px;"></span><div class="clearfix"></div>
    <p><span class="dropcap"><?php echo esc_attr($heading_text_s); ?></span>  <p><?php echo esc_attr($heading_text_p); ?></p></p>
    <?php
    return ob_get_clean();
}

add_shortcode('heading_text','heading_texts');


// skills


function skill($skill){
    extract(
        shortcode_atts(
            array(
                    'skills_grp'    =>  '',
                    'skills_i'      =>  '',
                    'skills_h'      =>  '',
                    'skills_p'      =>  '',

            ),$skill
        )

    );
    ob_start();
    ?>
    <h3 class="headline">Our Skills</h3><span class="line" style="margin-bottom:35px;"></span><div class="clearfix"></div>

    <div id="skillzz">

        <?php $grp_skill_keys =vc_param_group_parse_atts($skills_grp);
            foreach ($grp_skill_keys as $grp_skill_key){
        ?>
        <div class="skill-bar">
            <span class="skill-title"><i class="<?php echo esc_attr($grp_skill_key['skills_i']) ?>"></i> <?php echo esc_attr($grp_skill_key['skills_h']) ?></span>
            <div class="skill-bar-value" style="width: <?php echo esc_attr($grp_skill_key['skills_p']) ?>%;"></div>
        </div>




    <?php
    }
    return ob_get_clean();
}

add_shortcode('skills','skill');


// our team


    //for clients

function team($recent){
    extract(
        shortcode_atts(
            array(
                'team_p'   =>  '',


            ),$recent
        )

    );
    ob_start();
    ?>

    <?php
    $args = array('post_type' => 'team' , 'posts_per_page' => $team_p);
    $the_query = new WP_Query($args);
    ?>
    <!-- ShowBiz Carousel -->
	<div id="team" class="showbiz-container sixteen columns">

	<!-- Headline -->
	<h3 class="headline">Our Team</h3>
	<span class="line" style="margin-bottom:0;"></span>

	<!-- Navigation -->
	<div class="showbiz-navigation">
		<div id="showbiz_left_4" class="sb-navigation-left"><i class="icon-angle-left"></i></div>
		<div id="showbiz_right_4" class="sb-navigation-right"><i class="icon-angle-right"></i></div>
	</div>
	<div class="clearfix"></div>

	<!-- Entries -->
	<div class="showbiz" data-left="#showbiz_left_4" data-right="#showbiz_right_4">
		<div class="overflowholder">

			<ul>

<?php while ($the_query->have_posts()):$the_query->the_post(); ?>


				<li>
				    <?php the_post_thumbnail('thumbnail',array(
				            'class'         =>      'mediaholder team-img'
				    )) ?>

					<div class="team-name"><h5><?php the_title(); ?></h5> <span>Chief Executive Officer / CEO</span></div>
					<div class="team-about"><p><?php the_content(); ?></p></div>
					<ol class="social-icons">
						<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					</ol>
					<div class="clearfix"></div>
				</li>
    <?php wp_reset_postdata(); ?>
<?php endwhile; ?>





			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>
    <?php
    return ob_get_clean();
}

add_shortcode('team','team');


