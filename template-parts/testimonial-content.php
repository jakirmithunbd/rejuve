
<?php $testimonials = get_field('testimonials', 'options'); ;?>
<section class="testimonials section-spacing">
    <div class="container">
        <div class="section-title text-center">
            <h2>Most recent customer <strong>reviews</strong></h2>
            <p>
                Check out what our clients have to say about us and see
                why we are the most trusted Med Spa in all of Los
                Angeles.
            </p>
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