<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo bloginfo(); ?></title>
    <?php if ( get_field( 'favicon', 'options' ) ): ?>
        <link rel="icon" href="<?php the_field( 'favicon', 'options' ); ?>" sizes="32x32" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="rejuve-header">
        <div class="container-fluid">
            <div class="header-menu-wrap d-flex space-between align-center">
                <div class="logo-wrapper">
                    <a href="./index.html" class="logo d-flex align-center"
                        ><img
                            class="transition"
                            src="./assets/images/rejuve-logo.svg"
                            alt=""
                    /></a>
                    <div class="bars d-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <ul class="main-header-menu d-flex">
                    <li class="has-children">
                        <a href="./IV_Therapy_category.html" class="menu-link"
                            >IV Therapy</a
                        >
                        <ul class="sub-menu">
                            <li>
                                <a href="./IV_therapy_single_product.html">IV_therapy_single_product</a>
                            </li>
                            <li>
                                <a href="./NAD+_therapy_single_product.html">NAD+_therapy_single_product</a>
                            </li>
                            <li>
                                <a href="./Ozone_therapy_single_product.html">Ozone_therapy_single_product</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#" class="menu-link"
                            >Advanced Therapies</a
                        >
                        <ul class="sub-menu">
                            <li>
                                <a href="./beauty_treatment_Neurotoxins.html">beauty_treatment_Neurotoxins</a>
                            </li>
                            <li>
                                <a href="./beauty_treatment_Peptides.html">beauty_treatment_Peptides</a>
                            </li>
                            <li>
                                <a href="./beauty_treatment_STEM_CELLS.html">beauty_treatment_STEM_CELLS</a>
                            </li>
                            <li>
                                <a href="./book_botox_treatment.html">book_botox_treatment</a>
                            </li>
                            <li>
                                <a href="./book_dysport_treatment.html">book_dysport_treatment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Shipped to you</a>
                    </li>
                    <li>
                        <a href="./membership.html" class="menu-link"
                            >Membership & Packages</a
                        >
                    </li>

                    <li>
                        <a href="./About_Us.html" class="menu-link"
                            >About Us</a
                        >
                    </li>

                    <li class="has-children">
                        <a href="#" class="menu-link"
                            >Others Pages</a
                        >
                        <ul class="sub-menu">
                            <li>
                                <a href="./index.html">Home</a>
                            </li>
                            <li>
                                <a href="./account_activity_desktop.html">account_activity_desktop</a>
                            </li>
                            <li>
                                <a href="./account_appointments_desktop.html">account_appointments_desktop</a>
                            </li>
                            <li>
                                <a href="./my_account _mobile.html">my_account(check on mobile)</a>
                            </li>
                            <li>
                                <a href="./labs.html">Labs</a>
                            </li>
                            <li>
                                <a href="./Privacy_policy.html">Privacy_policy</a>
                            </li>
                            <li>
                                <a href="./"></a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>

                <ul
                    class="main-header-menu header-right-menu d-flex align-center"
                >
                    <li>
                        <a href="./service-menu.html" class="menu-link"
                            >Service Menu</a
                        >
                    </li>

                    <li class="book-now">
                        <a
                            href="./book_an_appointment.html"
                            class="menu-link"
                            >Book Now</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="header_gutter"></div>