<?php
/**
 * 
 * Template name: Privacy policy
 * 
 * **/ 
get_header(); ?>

<?php
    $privacy_policy_contents = get_field('privacy_policy_contents');
    if($privacy_policy_contents):
?>
    <section class="privacy-policy">
        <div class="container">
            <div class="classic-editor">

                <?php
                    echo $privacy_policy_contents;
                ?>

            </div>
        </div> <!-- Container  -->
    </section> <!-- Privacy Policy  -->

<?php
    endif;
?>

<?php get_footer(); ?>

