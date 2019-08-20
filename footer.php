<div id="footer">

    <!-- Container -->
    <div class="container">

        <div class="four columns">
            <h3>About</h3>
            <p style="margin:0;">Donec consectetur diam ac nibh auctor ultricies. Integer mauris lacus, consequat in luctus id, semper sed felis. Cum sociis natoque penatibus et magnis.</p>
        </div>

        <div class="four columns">
            <h3>Twitter</h3>

            <ul id="twitter"></ul>
            <script type="text/javascript">
                jQuery(document).ready(function($){
                    $.getJSON('twitterc461.html?url='+encodeURIComponent('statuses/user_timeline.json?screen_name=Vasterad&count=1'), function(tweets){
                        $("#twitter").html(tz_format_twitter(tweets));
                    }); });
            </script>
            <div class="clearfix"></div>

            <a href="https://twitter.com/Vasterad" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @Vasterad</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        </div>

        <div class="four columns">
            <h3>Get In Touch</h3>
            <ul class="get-in-touch">
                <li ><i class="icon-map-marker"></i> <p><strong>Address:</strong> 120 Seward Street, <br />Oklahoma City, USA</p></li>
                <li><i class="icon-user"></i> <p><strong>Phone:</strong> +48 880 440 140</p></li>
                <li><i class="icon-envelope-alt"></i> <p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="3f525e56537f5a475e524f535a115c5052">[email&#160;protected]</span></a></p></li>
            </ul>
        </div>

        <div class="four columns">
            <h3>Newsletter</h3>
            <p>Join our mailing list to stay up to date and get notices about our new releases!</p>

            <form action="#" method="get">
                <button class="newsletter-btn" type="submit">Join</button>
                <input class="newsletter" type="text" onblur="if(this.value=='')this.value='mail@example.com';" onfocus="if(this.value=='mail@example.com')this.value='';" value="mail@example.com" />
            </form>
        </div>

    </div>
    <!-- Container / End -->

</div>
<!-- Footer / End -->

<!-- Footer Bottom / Start -->
<div id="footer-bottom">

    <!-- Container -->
    <div class="container">

        <div class="eight columns">© Copyright 2014 by <a href="#">Astrum</a>. All Rights Reserved.</div>
        <div class="eight columns">
            <ul class="social-icons-footer">
                <li><a href="#" class="tooltip top" title="Twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="#" class="tooltip top" title="Facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="#" class="tooltip top" title="Dribbble"><i class="icon-dribbble"></i></a></li>
                <li><a href="#" class="tooltip top" title="LinkedIn"><i class="icon-linkedin-rect"></i></a></li>
                <li><a href="#" class="tooltip top" title="RSS"><i class="icon-rss"></i></a></li>
            </ul>
        </div>

    </div>
    <!-- Container / End -->

</div>
<!-- Footer Bottom / Start -->


<!-- Style Switcher
================================================== -->
<!-- Style Switcher / End -->


</body>
<?php wp_footer(); ?>
<!-- Mirrored from www.vasterad.com/themes/astrum/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 07:46:41 GMT -->
</html>