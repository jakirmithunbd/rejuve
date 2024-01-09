<?php
/**
 * 
 * Template name: Homepage
 * 
 * **/ 
get_header(); ?>
<?php get_template_part('template-parts/hero', 'content'); ?>

<?php if( have_rows('homepage_content') ): ?>
    <?php while( have_rows('homepage_content') ): the_row(); ?>

        <?php if( get_row_layout() == 'features' ): ?>

            <section class="services section-spacing">
                <div class="container">
                    <div class="section-title text-center">
                        <?php
                        $features_title = get_sub_field('features_title');
                        if ($features_title['title']) : ?>
                            <?php printf('<h2>%s</h2>', $features_title['title']); ?>
                        <?php endif; ?>

                        <?php if ($features_title['description']) : ?>
                            <?php echo wp_kses_post($features_title['description']); ?>
                        <?php endif; ?>

                    </div>

                    <div class="rejuve-image-box-wrapper">
                        <?php 
                        $features = get_sub_field('features'); 
                        if (is_array($features) && count($features) > 0) :
                            foreach ($features as $feature) : 
                                $imageAlignment = $feature['image_alignment'] === 'left' ? 'image-left small-image-box' : '';
                                $img = $feature['image'] ? $feature['image']['url'] : get_theme_file_uri('/assets/images/IV-Therapy.jpg');
                                ?>
                                <div class="image-box <?php echo $imageAlignment; ?>">
                                    <div class="image">
                                        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($feature['image']['title']); ?>" />
                                    </div>

                                    <div class="image-box-content" style="background-color: <?php echo $feature['background_color']; ?>">
                                        <?php if (!empty($feature['sub_title'])) : ?>
                                            <h6><?php echo esc_html($feature['sub_title']); ?></h6>
                                        <?php endif; ?>

                                        <?php if (!empty($feature['title'])) : ?>
                                            <h3><?php echo esc_html($feature['title']); ?></h3>
                                        <?php endif; ?>

                                        <?php if (!empty($feature['description'])) : ?>
                                            <?php echo wp_kses_post($feature['description']); ?>
                                        <?php endif; ?>

                                        <?php if ( $feature['button'] ) { 
                                            printf( '<a href="%s" target="%s" class="read-more">%s <img src="%s" alt="%s" /></a>',
                                                esc_url( $feature['button']['url'] ),
                                                esc_attr( $feature['button']['target'] ),
                                                esc_html( $feature['button']['title'] ),
                                                esc_url(get_theme_file_uri('/assets/images/icons/arrow-right.svg')),
                                                esc_html( $feature['button']['title'] )
                                            );
                                        } ?>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </div>
                </div>
            </section>

        
        <?php elseif( get_row_layout() == 'booking_area' ): 
            $section_title = get_sub_field('section_title'); 
            $books = get_sub_field('book'); 
            
            ?>
            <section class="booking-area section-spacing">
                <div class="container">
                    <div class="section-title text-center">

                        <?php if ($section_title['title']) : ?>
                            <?php printf('<h2>%s</h2>', $section_title['title']); ?>
                        <?php endif; ?>

                        <?php if ($section_title['description']) : ?>
                            <?php echo wp_kses_post($section_title['description']); ?>
                        <?php endif; ?>

                        <?php if ( $section_title['button'] ) { 
                            printf( '<a href="%s" target="%s" class="read-more">%s <img src="%s" alt="%s" /></a>',
                                esc_url( $section_title['button']['url'] ),
                                esc_attr( $section_title['button']['target'] ),
                                esc_html( $section_title['button']['title'] ),
                                esc_url(get_theme_file_uri('/assets/images/icons/arrow-right.svg')),
                                esc_html( $section_title['button']['title'] )
                            );
                        } ?>
                    </div>

                    <div class="rejuve-image-box-wrapper responsiveGrid" grid-col="2, 2, 2, 1, 1">

                        <?php  if (is_array($books) && count($books) > 0) :
                            foreach ($books as $book) :
                            $bookimg = $book['image'] ? $book['image']['url'] : get_theme_file_uri('/assets/images/IV-Therapy.jpg');
                            $imageAlignment = $book['image_alignment'] === 'bottom' ? 'image-bottoom' : '';
                            ?>
                            <div class="image-box <?php echo $imageAlignment; ?>">
                                <div class="image">
                                    <img src="<?php echo esc_url($bookimg); ?>" alt="<?php echo esc_attr($book['image']['title']); ?>" />
                                </div>

                                <div class="image-box-content" style="background-color: <?php echo $book['background_color']; ?>">

                                    <?php if (!empty($book['title'])) : ?>
                                        <h3><?php echo esc_html($book['title']); ?></h3>
                                    <?php endif; ?>

                                    <?php if (!empty($book['description'])) : ?>
                                        <?php echo wp_kses_post($book['description']); ?>
                                    <?php endif; ?>

                                    <?php if ( $book['button'] ) { 
                                        printf( '<a href="%s" target="%s" class="read-more">%s <img src="%s" alt="%s" /></a>',
                                            esc_url( $book['button']['url'] ),
                                            esc_attr( $book['button']['target'] ),
                                            esc_html( $book['button']['title'] ),
                                            esc_url(get_theme_file_uri('/assets/images/icons/arrow-right.svg')),
                                            esc_html( $book['button']['title'] )
                                        );
                                    } ?>
                                </div>
                            </div>

                            <?php
                                endforeach;
                            endif;
                        ?>
                        
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'products' ): 
            $section_title = get_sub_field('section_title'); 
            $books = get_sub_field('book');  ?>
            <section class="products-in-home section-spacing">
                <div class="container">
                    <div class="section-title text-center">

                        <?php if ($section_title['title']) : ?>
                            <?php printf('<h2>%s</h2>', $section_title['title']); ?>
                        <?php endif; ?>

                        <?php if ($section_title['description']) : ?>
                            <?php echo wp_kses_post($section_title['description']); ?>
                        <?php endif; ?>

                        <?php if ( $section_title['button'] ) { 
                            printf( '<a href="%s" target="%s" class="read-more">%s <img src="%s" alt="%s" /></a>',
                                esc_url( $section_title['button']['url'] ),
                                esc_attr( $section_title['button']['target'] ),
                                esc_html( $section_title['button']['title'] ),
                                esc_url(get_theme_file_uri('/assets/images/icons/arrow-right.svg')),
                                esc_html( $section_title['button']['title'] )
                            );
                        } ?>
                    </div>

                    <div class="products-wrapper">
                        <div class="responsiveGrid align-center products" grid-col="4, 4, 3, 2, 2">

                            <?php
                                $select_category_from_product = get_sub_field('select_category_from_product');

                                if ($select_category_from_product) {
                                    $args = array(
                                        'post_type'      => 'product',
                                        'post_status'    => 'publish',
                                        'posts_per_page' => -1,
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field'    => 'slug',
                                                'terms'    => $select_category_from_product->slug,
                                                'operator' => 'IN',
                                            ),
                                        ),
                                    );

                                    $query = new WP_Query($args);

                                    if ($query->have_posts()) :
                                        while ($query->have_posts()) :
                                            $query->the_post();
                                            ?>
                                            <div class="product text-center">
                                                <a href="<?php the_permalink(); ?>" class="product-image">
                                                    <?php the_post_thumbnail('thumbnail'); ?>
                                                </a>

                                                <div class="product-content">
                                                    <div class="product-top flex-center">
                                                        <a href="<?php the_permalink(); ?>" class="product-title"><?php the_title(); ?></a>
                                                        <div class="price"><?php echo wc_price(get_post_meta(get_the_ID(), '_price', true)); ?></div>
                                                    </div>

                                                    <p><?php the_excerpt(); ?></p>

                                                    <a class="rejuve-btn small-btn" href="<?php the_permalink(); ?>">Book Now</a>
                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo 'No products found in the specified category';
                                    endif;
                                } else {
                                    echo 'No category selected.';
                                }
                                ?>


                        </div>
                    </div>
                </div>
            </section>

            <?php elseif( get_row_layout() == 'split_layout' ): 
            $content = get_sub_field('content'); ?>

            <section class="about-us section-spacing">
                <div class="container">
                    <div class="split-layout">
                        <div class="responsiveGrid" grid-col="2, 2, 2, 1, 1">
                            <div class="left-content">
                                
                            <?php if ($content['title']) : ?>
                                <?php printf('<h6>%s</h6>', $content['sub_title']); ?>
                                <?php printf('<h2>%s</h2>', $content['title']); ?>
                                <?php endif; ?>
                            </div>

                            <div class="right-content">
                                <?php if ($content['editor']) {
                                    printf('<div class="classic-editor">%s</div>', $content['editor']);
                                }?>
                                
                            </div>
                        </div>

                        <?php if ($content['image']) {
                            printf('<div class="split-image"><img src="%s" alt="%s" /></div>', $content['image']['url'], $content['image']['title']);
                        }?>
                    </div>
                </div>
            </section> 

            <?php elseif( get_row_layout() == 'content_with_media' ):  
                $bg_color = get_sub_field('background_color');
                $image = get_sub_field('image');
            ?>

            <section class="content-with-media section-spacing" style="background-color: <?php echo $bg_color ? $bg_color : '#ffffff'; ?>">
                <div class="container">
                    <div class="responsiveGrid align-center" grid-col="2, 2, 2, 1, 1">
                        <div class="classic-editor">
                            <?php the_sub_field('editor'); ;?>
                            <a href="#" class="rejuve-btn">Request a Free Consultation</a>
                        </div>

                        <?php $img = $image ? $image['url'] : get_theme_file_uri('/assets/images/group-doctors-with-heart-symbol.jpg') ;?>

                        <div class="media">
                            <img src="<?php echo esc_url($img); ?>" class="radius" alt="<?php echo esc_attr($image['title']); ?>" />
                        </div>
                    </div>
                </div>
            </section>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_template_part('template-parts/testimonial', 'content'); ?>
<?php get_footer(); ?>

