<section class="rejuve-faq section-spacing bg-shadow">
    <div class="container">
        <div class="section-title text-center">
            <?php
                $faq_section_title = get_field('faq_section_title', 'option');
                if($faq_section_title) {echo $faq_section_title;}
            ?>
        </div>

        <div class="faq">

            <?php
                $faq_list = get_field('faq_list', 'option');
                if($faq_list):
                    foreach($faq_list as $faq):
            ?>

                <div class="faq-item">
                    <h6><?php echo $faq['question']; ?></h6>
                    <p><?php echo $faq['answer']; ?></p>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- F A Q Section  -->