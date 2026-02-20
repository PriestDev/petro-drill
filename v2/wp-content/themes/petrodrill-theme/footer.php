<?php
?></div><!-- #content -->

<!-- Modern Footer -->
<footer id="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-columns">
            <div id="sp-bottom1">
                <h2><?php bloginfo( 'name' ); ?></h2>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>

            <div id="sp-bottom2">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                </ul>
            </div>

            <div id="sp-bottom3">
                <h2>Resources</h2>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>

            <div id="sp-bottom4">
                <h2>Follow Us</h2>
                <ul class="social-icons" style="flex-wrap: wrap;">
                    <li><a target="_blank" href="https://www.facebook.com/petrodrillglobal" rel="noopener noreferrer">Facebook</a></li>
                    <li><a target="_blank" href="https://twitter.com/petrodrillglobal" rel="noopener noreferrer">Twitter</a></li>
                    <li><a target="_blank" href="#" rel="noopener noreferrer">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</div><!-- .body-innerwrapper -->
</body>
</html>
