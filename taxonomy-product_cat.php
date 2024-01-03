<?php
/**
 * The template for displaying product category archives.
 *
 * @link https://woocommerce.com/
 * @package WooCommerce/Templates
 */

get_header();
?>

<?php
if (woocommerce_product_loop()) {
    while (have_posts()) : the_post();
        // Display your product content here
        // You can use functions like woocommerce_template_loop_product(), the_title(), the_content(), etc.
    endwhile;
} else {
    echo 'No products found.';
}
?>

<?php
get_footer();
?>
