         <footer class="page-footer">
        <div class="footer-bg-icon hidden-xs-down"><img src="../wp-content/themes/metroflooringcontractors/assets/img/footer-logo-icon.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xxs-12 col-sm-6 col-md-4">
                    <div class="contact-link">
                        <h3>Get in touch</h3>
                        <ul>
                            <li>
                                <i class="icon-map-pin"></i>
                                <p>Metro Flooring Contractors<br>805 Barkwood Ct<br>Suite G<br>Linthicum, MD 21090</p>
                                <a href="#" class="btn btn-tertiary">Get Directions</a>
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <a href="#"> (301) 684-5800 </a>
                            </li>
                            <li>
                                <i class="icon-email"></i>
                                <a href="#">info@metroflooringcontractors.com  </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxs-12 col-sm-6 col-md-4">
                    <div class="timming-hours">
                        <h3>Showroom hours</h3>
                        <p>Mon-Fri 9am-9pm<br>Sat 9am-6pm<br>Sun 9am-6pm</p>
                    </div>
                    <div class="shoping-hours">
                        <h3>In-Home Shopping Hours</h3>
                        <p>Sun-Mon 9am-9pm</p>
                    </div>
                    <div class="header-schedule-btn hidden-md-down">
                        <a href="#"> Schedule a <span> FREE</span> In-home Estimate </a>
                    </div>
                </div>
                <div class="col-xxs-12 col-md-4">
                    <div class="quick-link-item visible-lg">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Employment</a></li>
                            <li><a href="#">Referral</a></li>
                            <li><a href="#">Service Areas</a></li>
                        </ul>
                    </div>
                    <div class="accept-list">
                        <h3>WE ACCEPT:</h3>
                        <ul>
                            <li><a href="#"><i class="icon-visa"></i></a></li>
                            <li><a href="#"><i class="icon-mastercard"></i></a></li>
                            <li><a href="#"><i class="icon-payment"></i></a></li>
                            <li><a href="#"><i class="icon-credit-card"></i></a></li>
                            <li><a href="#"><i class="icon-discover"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-social-icon">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="footer-secondary-menu">
                    <ul>
                        <li><a href="#">Site Credits</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p>Copyright © 2022. All Rights Reserved.</p>
                    <div class="back-top-btn">
                        <a href="#"><i class="icon-double-arrow-up"></i> Back to top</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>

        <!--
        <footer id="page-footer" class="page-footer">

            <div class="footer-contact-info">
                <?php
                    // gets contact information set in Theme Settings
                    $address    = fx_get_client_address();
                    $email      = fx_get_client_email( true );
                    $phone      = fx_get_client_phone_number();
                    $phone_link = fx_get_client_phone_number( true );
                ?>

                <h5 class="footer__headline">Contact Us</h5>

                <?php if( !empty( $address ) ): ?>
                    <address class="footer-contact__address">
                        <?php echo $address; ?>
                    </address>
                <?php endif; ?>

                <?php if( !empty( $email ) ): ?>
                    <div class="footer-contact__email">
                        Email: <a href="<?php echo esc_url( sprintf( 'mailto:%s', $email ) ); ?>"><?php echo $email; ?></a>
                    </div>
                <?php endif; ?>

                <?php if( !empty( $phone ) ): ?>
                    <div class="footer-contact__phone">
                        Call: <a href="<?php echo esc_url( sprintf( 'tel:%s', $phone_link ) ); ?>"><?php echo $phone; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php
                // Output the footer navigation
                wp_nav_menu(
                    [
                        'container'         => 'nav',
                        'container_class'   => 'footer-navigation',
                        'depth'             => 1,
                        'theme_location'    => 'footer_menu',
                    ]
                );
            ?>
        </footer>
        -->
		
        <!-- Back To Top Icon area
        <button class="back-to-top js-back-to-top" type="button">
            <span class="back-to-top__label">Back to top</span>
            <i class="icon-arrow-up"></i>
        </button>
        -->

        <?php wp_footer(); ?>
    </body>
</html>
