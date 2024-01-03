<?php 

$hero = get_field( 'hero',  get_queried_object_id()); $bg = $hero['image'] ? $hero['image']['url'] : get_theme_file_uri('/assets/images/Hero.png');
$bgMobile = $hero['mobile_image'] ? $hero['mobile_image']['url'] : get_theme_file_uri('/assets/images/Hero-mobile.jpg');
?>

<section class="rejuve-hero p-relative" style="background-image: url(<?php echo $bg; ?>)" >
    <div class="container">
        <div class="hero-content">
            <?php if ( $hero['title'] ) {
                printf( '<h1>%s</h1>', esc_html( $hero['title'] ) );
            } ?>

            <?php if ( $hero['description'] ) {
                printf( '<p>%s</p>', esc_html( $hero['description'] ) );
            } 
            ?>

             <?php if ( $hero['button'] ) {
                printf( '<a href="%s" target="%s" class="rejuve-btn %s">%s</a>', esc_url( $hero['button']['url'] ), esc_attr( $hero['button']['target'] ), esc_attr($hero['button_size'] === 'large' ? 'btn-large' : ''), esc_html( $hero['button']['title'] ) );
            } ?>

            
        </div>
    </div>
    <div class="mobile-image d-none p-relative">
        <img src="<?php echo esc_url($bgMobile); ?>" alt="Mobile Image" />
    </div>
</section>