
<?php 
$testimonials = get_field('testimonials', 'options') ;
$testimonial_title = get_field('testimonial_title', 'options') ;

?>
<section class="testimonials section-spacing">
    <div class="container">
        <div class="section-title text-center">
            <?php printf('<h2>%s</h2>', $testimonial_title['title']) ;?>
            <?php printf($testimonial_title['description']) ;?>
        </div>

        <div class="slick-slider-wrapper">
            <div class="slick-slider-init">

                <?php
                    $testimonials = get_field('testimonial', 'options');

                    if (is_array($testimonials) && count($testimonials) > 0) :
                        foreach ($testimonials as $testimonial) :
                            ?>
                            <div class="slick-slider">
                                <div class="slider-content">
                                    <p><?php echo esc_html($testimonial['quote']); ?></p>

                                    <div class="client-info">
                                        <img src="<?php echo esc_url($testimonial['image']['url']); ?>" alt="<?php echo esc_attr($testimonial['image']['alt']); ?>" />
                                        <span><?php echo esc_html($testimonial['name']); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;
                ?>


            </div>

            <div class="next-previous d-flex space-between">
                <img
                    class="prev"
                    src="<?php echo get_theme_file_uri('/assets/images/icons/slider-arrow-left.svg') ;?>"
                    alt=""
                />

                <img
                    class="next"
                    src="<?php echo get_theme_file_uri('/assets/images/icons/slider-arrow-right.svg') ;?>"
                    alt=""
                />
                
            </div>
        </div>
    </div>
</section>