<?php $cta = get_field('call_to_action', 'options') ; $bg = $cta['image'] ? $cta['image']['url'] : get_theme_file_uri('/assets/images/cta.png');?>

<section class="cta">
    <div class="responsiveGrid align-center" grid-col="2, 2, 2, 1, 1">
        <div class="container">
            <div class="classic-editor">

                <?php if ( $cta['title'] ) {
                    printf( '<h2>%s</h2>', $cta['title'] );
                } ?>

                <?php if ( $cta['description'] ) {
                    printf( $cta['description'] );
                } ?>

                <?php if ( $cta['button'] ) {
                printf( '<a href="%s" target="%s" class="rejuve-btn btn-large">%s</a>', esc_url( $cta['button']['url'] ), esc_attr( $cta['button']['target'] ), esc_html( $cta['button']['title'] ) );
            } ?>
            </div>
        </div>

        <div class="container-fluid">
            <div class="media">
                <img
                    src="<?php echo esc_url($bg);?>"
                    class="radius"
                    alt=""
                />
            </div>
        </div>
    </div>
</section>

        <footer class="footer">
            <div class="container-fluid">
                <div class="footer-top">
                    <div class="footer-intro">
                        <a href="#" class="d-block">
                            <img src="./assets/images/rejuve-logo.svg" alt="" />
                        </a>
                    </div>

                    <div
                        class="responsiveGrid footer-menus"
                        grid-col="3, 3, 3, 3, 1"
                    >
                        <div class="footer-menu">
                            <h6>Treatments</h6>
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-menu">
                            <h6>Treatments</h6>
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-menu">
                            <h6><?php _e('Social', 'rejuve'); ?></h6>
                            <div class="social-media">
                                <a href="#"
                                    ><img
                                        src="./assets/images/icons/Facebook.svg"
                                        alt=""
                                    />
                                    <span>Facebook</span>
                                </a>

                                <a href="#"
                                    ><img
                                        src="./assets/images/icons/instagram.svg"
                                        alt=""
                                    />
                                    <span>Instagram</span>
                                </a>

                                <a href="#"
                                    ><img
                                        src="./assets/images/icons/twitter.svg"
                                        alt=""
                                    />
                                    <span>Twitter</span>
                                </a>

                                <a href="#"
                                    ><img
                                        src="./assets/images/icons/youtube.svg"
                                        alt=""
                                    />
                                    <span>YouTube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div
                        class="responsiveGrid d-flex space-between"
                        grid-col="2, 2, 2, 1, 1"
                    >
                        <span>© 2023 Rejuve. All rights reserved.</span>

                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>

</body>
</html>