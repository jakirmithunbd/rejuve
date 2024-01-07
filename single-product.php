<?php get_header() ;?>
<section class="page-banner" style="background-color: #d0f4f7">
    <div class="container">
        <div class="responsiveGrid align-center" grid-col="2, 2, 2, 1">
            <div class="page-banner-img">
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail("large", "rejuve");
                    };
                ?>
            </div>
            <div class="page-banner-content">
                <div class="classic-editor">
                    <h1><?php the_title() ;?></h1>
                    <?php echo get_the_excerpt() ;?>
                </div>
                <div class="service-type d-flex">
                    <div
                        class="service-item in-clinic d-flex flex-col active"
                    >
                        <h4 class="price"><?php echo wc_price(get_post_meta(get_the_ID(), '_price', true)); ?></h4>
                        <button class="service-item-btn rejuve-btn">
                            <?php echo __('Book in Clinic', "rejuve"); ?>
                        </button>
                        <span><?php echo __('*At our locations', 'rejuve'); ?></span>
                    </div>
                    <div class="service-item in-home d-flex flex-col">
                        <h4 class="price"><?php echo wc_price(get_post_meta(get_the_ID(), '_price', true)); ?></h4>
                        <button class="service-item-btn rejuve-btn">
                           <?php echo __(' Book House Call', 'rejuve'); ?>
                        </button>
                        <span> <?php echo __('*We come to you', 'rejuve'); ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $convenience_section_title = get_field('convenience_section_title');
    if($convenience_section_title):
?>
    <section class="section-spacing">
        <div class="container">
            <div class="section-title text-center">
                <h2>
                    <?php
                    if($convenience_section_title) {echo $convenience_section_title;}
                    ?>
                </h2>
            </div>

            <div
                class="rejuve-iconbox-wrapper responsiveGrid"
                grid-col="3, 3, 3, 1"
            >

            <?php 
            $convenience_list = get_field('convenience_list');
            if($convenience_list):
            foreach($convenience_list as $conveniences):
            ?>
                <div class="icon-box">
                    <div class="icon">
                    <img src="<?php echo $conveniences['convenience_icon']['url']; ?>" alt="<?php echo $conveniences['convenience_icon']['alt']; ?>" />
                    </div>

                    <div class="icon-box-content">
                        <h5><?php echo $conveniences['convenience_title']; ?></h5>
                        <?php echo $conveniences['convenience_dscription']; ?>
                    </div>
                </div>

            <?php 
                endforeach;
            endif;
            ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<section class="appointment-section section-spacing">
    <div class="container">
        <div class="classic-editor single-classic-editor text-center">
            <?php
                $booking_section_title = get_field('booking_section_title');
                if($booking_section_title){echo $booking_section_title['content']; }
            ?>
        </div>

        <div class="data-box">
            <h4>Fill out your details</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="first-name">
                    <label for="first-name"
                        >First name<span>*</span></label
                    >
                    <input
                        type="text"
                        id="first-name"
                        name="first-name"
                        placeholder="Johnathan"
                        required
                    />
                </div>
                <div class="last-name">
                    <label for="last-name"
                        >Last name<span>*</span></label
                    >
                    <input
                        type="text"
                        id="last-name"
                        name="last-name"
                        placeholder="Smith"
                        required
                    />
                </div>
                <div class="email-address">
                    <label for="email-address"
                        >Email address<span>*</span></label
                    >
                    <input
                        type="email"
                        id="email-address"
                        name="email-address"
                        placeholder="jonathan.s@gmail.com"
                        required
                    />
                </div>
                <div class="phone-number">
                    <label for="phone-number"
                        >Phone number<span>*</span></label
                    >
                    <input
                        type="number"
                        id="phone-number"
                        name="phone-number"
                        placeholder="(123) 456-7890"
                        required
                    />
                </div>
                <div class="birth-date">
                    <label for="birth-date"
                        >Date of Birth<span>*</span></label
                    >
                    <input
                        type="date"
                        id="birth-date"
                        name="birth-date"
                        placeholder=""
                        required
                    />
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="data-box">
            <h4>Choose Location</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="rejuve-clinic">
                    <div class="redio-button">
                        <span class="radio-check checked"></span>Rejuve
                        Clinics
                        <span class="redio-after"
                            >At our locations</span
                        >
                    </div>
                </div>
                <div class="house-call">
                    <div class="redio-button">
                        <span class="radio-check"></span>House call
                        <span class="redio-after">We come to you</span>
                    </div>
                </div>
                <div class="clinic-address">
                    <label for="clinic-address"
                        >Clinic's Address<span>*</span></label
                    >
                    <input
                        type="email"
                        id="clinic-address"
                        name="clinic-address"
                        placeholder="Rejuve Clinics Sherman Oaks, Address Lorem Ipsum jfvd ihb "
                        required
                    />
                </div>
                <div class="your-address">
                    <div class="your-address-field">
                        <label for="your-address-field"
                            >Your Address<span>*</span></label
                        >
                        <input
                            type="email"
                            id="your-address-field"
                            name="your-address-field"
                            placeholder="California, Los Angeles County 8412 La Tuna Canyon Road 91352"
                            required
                        />
                    </div>
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="accordion-box">
            <h4>Choose Treatment</h4>
            <div class="accordion-wrapper">

                <div class="accordion-item open">
                    <div class="accordion-header">
                        <button class="open-or-close">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/accordion-arrow.svg') ;?>" alt="Icon" />
                        </button>
                        <span class="accordion-title"
                            >Choose IV Treatment</span
                        >
                        <span class="selected-item">Hangover Fix</span
                        ><span class="selected-item">Hangover Fix</span>
                    </div>

                    <div class="accordion-body">
                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>
                    </div>
                </div>
                <!-- Accordion-item  -->

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="open-or-close">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/accordion-arrow.svg') ;?>" alt="Icon" />
                        </button>
                        <span class="accordion-title"
                            >Choose IV Treatment</span
                        >
                        <span class="selected-item">Hangover Fix</span
                        ><span class="selected-item">Hangover Fix</span>
                    </div>

                    <div class="accordion-body">
                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>
                    </div>
                </div>
                <!-- Accordion-item  -->

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="open-or-close">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/accordion-arrow.svg') ;?>" alt="Icon" />
                        </button>
                        <span class="accordion-title"
                            >Choose IV Treatment</span
                        >
                        <span class="selected-item">Hangover Fix</span
                        ><span class="selected-item">Hangover Fix</span>
                    </div>

                    <div class="accordion-body">
                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>
                    </div>
                </div>
                <!-- Accordion-item  -->

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="open-or-close">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/accordion-arrow.svg') ;?>" alt="Icon" />
                        </button>
                        <span class="accordion-title"
                            >Choose IV Treatment</span
                        >
                        <span class="selected-item">Hangover Fix</span
                        ><span class="selected-item">Hangover Fix</span>
                    </div>

                    <div class="accordion-body">
                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item selected">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>

                        <div class="treatment-item">
                            <span class="t-item-name">Anti-Acne</span>
                            <span class="t-item-price">$250</span>
                        </div>
                    </div>
                </div>
                <!-- Accordion-item  -->
            </div>
            <!-- Accordion Wrapper  -->
        </div>
        <!-- Accordion Box  -->

        <div class="add-person-btn add-of-single">
            <button class="rejuve-btn"><img src="<?php echo get_theme_file_uri('/assets/images/icons/add-person.svg'); ?>" alt="" />
                Add another person</button>
        </div>

        <div class="data-box">
            <h4>Choose Provider</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="any-nurse">
                    <div class="redio-button">
                        <span class="radio-check checked"></span>Any
                    </div>
                </div>
                <div class="Christina-nurse">
                    <div class="redio-button">
                        <span class="radio-check"></span>Christina, NP
                        (Nurse Practitioner)
                    </div>
                </div>
                <div class="Dianne-nurse">
                    <div class="redio-button">
                        <span class="radio-check"></span>Dianne, RN
                        (Registered Nurse)
                    </div>
                </div>
                <div class="Katie-nurse">
                    <div class="redio-button">
                        <span class="radio-check"></span>Katie, LME
                        (Licensed Master Esthetician)
                    </div>
                </div>
                <div class="Kristina-nurse">
                    <div class="redio-button">
                        <span class="radio-check"></span>Kristina, RN (
                        Registered Nurse)
                    </div>
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="data-box">
            <h4>Booking Date and Time Preference</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="date">
                    <label for="date">Date<span>*</span></label>
                    <input
                        type="date"
                        id="date"
                        name="date"
                        placeholder=""
                        required
                    />
                </div>

                <div class="time">
                    <label for="time">Time<span>*</span></label>
                    <input
                        type="time"
                        id="time"
                        name="time"
                        placeholder=""
                        required
                    />
                    <span
                        >* All times are in Los Angeles (PT) time</span
                    >
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="data-box">
            <h4>Almost Done</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="promo-code">
                    <h5>Do you have a Promo code?</h5>
                    <div class="check-mark">
                        <span class="square checked"></span>Gift Card
                    </div>
                    <div
                        class="discount d-flex align-center space-between"
                    >
                        <input
                            type="text"
                            id="discount"
                            name="discount"
                            placeholder="Enter Discount Code"
                        />
                        <button
                            id=""
                            class="rejuve-btn small-btn discount-btn"
                        >
                            Apply Discount
                        </button>
                    </div>
                </div>

                <div class="tip-side">
                    <h5>Tip</h5>
                    <div class="tip d-flex">
                        <div class="defult-tip">
                            <div class="five-per">
                                <div class="redio-button">
                                    <span
                                        class="radio-check checked"
                                    ></span
                                    >5%
                                </div>
                            </div>
                            <div class="ten-per">
                                <div class="redio-button">
                                    <span class="radio-check"></span>10%
                                </div>
                            </div>
                            <div class="fifteen-per">
                                <div class="redio-button">
                                    <span class="radio-check"></span>15%
                                </div>
                            </div>
                            <div class="twinty-per">
                                <div class="redio-button">
                                    <span class="radio-check"></span>20%
                                </div>
                            </div>
                        </div>
                        <div class="custom-tip d-flex flex-col">
                            <div class="check-mark">
                                <span class="circle"></span>Other
                            </div>
                            <input
                                type="text"
                                id="custom-tip-field"
                                name="custom-tip-field"
                                placeholder="Enter tip %"
                            />
                            <h5 class="total-tip">
                                Tip total: <span>$0</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="calculator-box-wrap">
            <h4>Order Summary</h4>
            <div class="calculator-box">
                <div class="person">
                    <h5>Sarah Johnson</h5>
                    <ul class="product-wrapper unstyle d-flex flex-col">
                        <li class="product-item d-flex space-between">
                            <span class="rpoduct-name"
                                >Glucathione (200mg)</span
                            >
                            <span class="product-price">$185.00</span>
                        </li>
                        <li class="product-item d-flex space-between">
                            <span class="rpoduct-name"
                                >Vitamin B12 (1mg))</span
                            >
                            <span class="product-price">$30.00</span>
                        </li>
                        <li class="product-item d-flex space-between">
                            <span class="rpoduct-name"
                                >Glucathione (200mg)</span
                            >
                            <span class="product-price">$50.00</span>
                        </li>
                    </ul>
                </div>

                <div class="person">
                    <h5>Lorenna Johnson</h5>
                    <ul class="product-wrapper unstyle d-flex flex-col">
                        <li class="product-item d-flex space-between">
                            <span class="rpoduct-name"
                                >Hangover Fix</span
                            >
                            <span class="product-price">$185.00</span>
                        </li>
                        <li class="product-item d-flex space-between">
                            <span class="rpoduct-name"
                                >Vitamin B12 (1mg)</span
                            >
                            <span class="product-price">$30.00</span>
                        </li>
                    </ul>
                </div>
                <div class="summary d-flex">
                    <ul class="unstyle d-flex">
                        <li class="subtotal d-flex space-between">
                            <span>Subtotal</span>
                            <span class="subtotal-price sum-pricy"
                                >$480.00</span
                            >
                        </li>
                        <li class="total-tip d-flex space-between">
                            <span>Tip (5%)</span>
                            <span class="total-tip-price sum-pricy"
                                >$24.00</span
                            >
                        </li>
                        <li class="total d-flex space-between">
                            <span>Total</span>
                            <span class="total-price sum-pricy"
                                >$552.00</span
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <!-- calculator-box  -->
        </div>

        <div class="data-box">
            <h4>Choose your desired payment method:</h4>
            <div
                class="data-input-wrapper responsiveGrid radius"
                grid-col="2, 2, 2, 1"
            >
                <div class="payment-card">
                    <div class="redio-button">
                        <span class="radio-check checked"></span>Credit
                        or Debit Card
                    </div>
                </div>
                <div class="payment-location">
                    <div class="redio-button">
                        <span class="radio-check"></span>Pay at Location
                    </div>
                </div>

                <div
                    class="card-details d-flex flex-wrap space-between"
                >
                    <div class="card-number">
                        <label for="card-number"
                            >Card number<span>*</span></label
                        >
                        <input
                            type="number"
                            id="card-number"
                            name="card-number"
                            placeholder="1234 - 4567 - 8901 - 2345"
                            required
                        />
                    </div>
                    <div class="expiration">
                        <label for="expiration"
                            >Expiration<span>*</span></label
                        >
                        <input
                            type="text"
                            id="expiration"
                            name="expiration"
                            placeholder="MM / YY"
                            required
                        />
                    </div>
                    <div class="cvc">
                        <label for="cvc">CVV<span>*</span></label>
                        <input
                            type="number"
                            id="cvc"
                            name="cvc"
                            placeholder="CVV"
                            required
                        />
                    </div>
                    <div class="special-instructions">
                        <label for="special-instructions"
                            >Special instructions:</label
                        >
                        <textarea
                            name="special-instructions"
                            id="special-instructions"
                            cols="30"
                            rows="10"
                            placeholder="Anything Else We Should Know? (i.e. parking, entry, time flexibility, pets)"
                        ></textarea>
                    </div>
                </div>
            </div>
            <!-- Data Input Wrapper  -->
        </div>
        <!-- Data Box  -->

        <div class="check-mark">
            <span class="square"></span
            ><span class="cm-content"
                >I agree to the <a href="#">ToS</a>,
                <a href="#">Privacy Policy</a>,
                <a href="#">Consent To Treat</a>, and
                <a href="#">Cancellation Policy*</a></span
            >
        </div>
        <div class="check-mark">
            <span class="square checked"></span
            ><span class="cm-content"
                >Sign-up to receiving exclusive offers and service
                updates! <span class="recom">(recommended)</span></span
            >
        </div>
        <div class="check-mark">
            <span class="square checked"></span
            ><span class="cm-content"
                >Create an account for me and send me secure login
                details to my e-mail.
                <span class="recom">(recommended)</span></span
            >
        </div>

        <a href="#" class="rejuve-btn"
            ><img src="<?php echo get_theme_file_uri('/assets/images/icons/lock.svg'); ?>" alt="" /> Book and
            Pay</a
        >
    </div>
    <!-- Container  -->
</section>


<?php
    $benefits_product = get_field('benefits_of_product_content');
    if($benefits_product):
?>
    <section class="section-spacing" style="background: #f8f8f8">
        <div class="large-container">
            <div class="split-layout single-split">
                <div class="responsiveGrid" grid-col="2, 2, 2, 1">


                    <div class="left-content">
                        <?php
                            if($benefits_product){echo $benefits_product['title']; }
                        ?>
                    </div>

                    <div class="right-content">
                        <div class="classic-editor">
                            <?php
                                if($benefits_product){echo $benefits_product['content'];}
                            ?>
                        </div>
                    </div>
                </div>
                <div class="split-image">
                    <img
                        src="<?php if($benefits_product){echo $benefits_product['add_benefits_product_image']['url'];} ?>"
                        alt="<?php if($benefits_product){echo $benefits_product['add_benefits_product_image']['alt'];} ?>"
                    />
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
    $ingredients_section_title = get_field('ingredients_section_title');
    if($ingredients_section_title):
?>
    <section class="product-description section-spacing">
        <div class="large-container">
            <div class="responsiveGrid" grid-col="2, 2, 1, 1">
                <div class="left-content">
                    <?php
                        if($ingredients_section_title){echo $ingredients_section_title;}
                    ?>
                </div>

                <div class="vertical-scroll-wrap">

                    <?php
                        $ingredients_list = get_field('ingredients_list');
                        if($ingredients_list):
                    ?>            
                        <div class="vertical-scroll">

                            <?php
                                foreach($ingredients_list as $ingredients):
                            ?>
                                <div
                                    class="description-item"
                                    style="background: <?php echo $ingredients['select_ingredients_i']; ?>"
                                >
                                    <h3 style="color: <?php echo $ingredients['select_title_color_of_ingredients_item']; ?>">
                                        <?php echo $ingredients['ingredients_title']; ?>
                                    </h3>
                                    <?php echo $ingredients['ingredients_content']; ?>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Description  -->
<?php endif; ?>

<?php get_template_part('template-parts/faq', 'content'); ?>

<?php get_footer() ;?>