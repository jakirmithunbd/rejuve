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

    <?php $logo = get_field('logo', 'options') ; $logoImg = $logo['main_logo'] ? $logo['main_logo']['url'] : get_theme_file_uri('/assets/images/rejuve-logo.svg') ;
    $social_media = get_field('social_media', 'options');
    $footer1st_menu = get_field('footer_first_menu', 'options');
    $footer2nd_menu = get_field('footer_second_menu', 'options');
    ?>


        <footer class="footer">
            <div class="container-fluid">
                <div class="footer-top">
                    <div class="footer-intro">

                        <a href="<?php echo site_url(); ?>" class="d-block"
                        ><img class="transition"
                                src="<?php echo esc_url( $logoImg ); ?>"
                                alt="Footer Logo"
                        /></a>
                    </div>

                    <div
                        class="responsiveGrid footer-menus"
                        grid-col="3, 3, 3, 3, 1"
                    >
                        <div class="footer-menu">
                            <?php if($footer1st_menu['title']) {
                                printf('<h6>%s</h6>', esc_html($footer1st_menu['title']));
                            } ; ?>
                            <ul>
                                <?php $footer1st_menus = $footer1st_menu['page_link'];
                                
                                    if($footer1st_menus) {
                                        foreach($footer1st_menus as $fo1st_menu) {
                                            $id = $fo1st_menu->ID;
                                            printf('<li><a href="%s">%s</a></li>', get_the_permalink($id), get_the_title($id));
                                        } 
                                    } 
                                ?>
                            </ul>
                        </div>

                        <div class="footer-menu">
                            <?php if($footer2nd_menu['title']) {
                                printf('<h6>%s</h6>', esc_html($footer2nd_menu['title']));
                            } ; ?>
                            <ul>
                                <?php $footer2nd_menu = $footer2nd_menu['page_link'];
                                
                                    if($footer2nd_menu) {
                                        foreach($footer2nd_menu as $fo2nd_menu) {
                                            $id = $fo2nd_menu->ID;
                                            printf('<li><a href="%s">%s</a></li>', get_the_permalink($id), get_the_title($id));
                                        } 
                                    } 
                                ?>
                            </ul>
                        </div>

                        <div class="footer-menu">
                            <h6><?php _e('Social', 'rejuve'); ?></h6>
                            <div class="social-media">
                                <?php
                                    if (is_array($social_media) && count($social_media) > 0) {
                                        foreach ($social_media as $item) {
                                            if (isset($item['link']['url'], $item['social_icon']['url'], $item['link']['title'])) {
                                                printf(
                                                    '<a target="_blank" href="%s"><img src="%s" alt="%s"/><span>%s</span></a>',
                                                    esc_url($item['link']['url']),
                                                    esc_url($item['social_icon']['url']),
                                                    esc_attr($item['link']['title']),
                                                    esc_html($item['link']['title'])
                                                );
                                            }
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $copyright_area = get_field('copyright_area', 'options') ;?>

                <div class="footer-bottom">
                    <div
                        class="responsiveGrid d-flex space-between"
                        grid-col="2, 2, 2, 1, 1"
                    >
                        <span><?php echo $copyright_area['text']; ?></span>

                        <div class="footer-menu">
                            <ul>
                                <?php
                                    $copyright_area_pages = $copyright_area['page_link'];

                                    if (!empty($copyright_area_pages)) {
                                        foreach ($copyright_area_pages as $copyright_area_page) {
                                            $id = $copyright_area_page->ID;
                                            printf('<li><a href="%s">%s</a></li>', esc_url(get_the_permalink($id)), esc_html(get_the_title($id)));
                                        }
                                    }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>

</body>
</html>