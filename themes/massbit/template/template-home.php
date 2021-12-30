<?php

/**
 * Template Name: Home Page
 * Description: .
 *
 */

get_header();
?>
<header>
    <div class="container">
        <div class="row align-items-center align-items-xl-center align-items-lg-end">
            <div class="col-xl-5 col-lg-6 mt-lg-0 mb-4">
                <h1 class="mb-banner-heading">
                    <div class="scrollerY-list">
                        <span><?php echo get_field('header_keyword_1'); ?></span>
                        <span><?php echo get_field('header_keyword_2'); ?></span>
                        <span><?php echo get_field('header_keyword_1'); ?></span>
                    </div>
                </h1>
                <h2 class="mb-banner-sub-heading"><?php echo get_field('header_sub_heading'); ?></h2>
                <div class="mb-banner-description"><?php echo get_field('header_description'); ?></div>
                <div class="mt-4">
                    <a href="<?php echo get_field('header_link_target'); ?>" class="btn btn-outline-primary px-5"><?php echo get_field('header_link_text'); ?></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <img src="<?php echo get_field('header_image'); ?>" class="img-fluid" alt="MassBit" />
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<main>
    <section class="mb-section mb-section-why-massbit pb-0" id="WhyMassBit">
        <div class="container text-center">
            <div data-aos="fade-up" class="mb-section-title d-flex align-content-center justify-content-md-center">
                <span class="u-floatX">
                    <img src="<?php echo get_field('section_1_logo'); ?>" alt="MassBit" height="60" class="u-spin me-5" />
                </span>
                <span class="pt-2"><?php echo get_field('section_1_heading'); ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-40 mb-mb-10px">
                    <div class="col-xl-9"><?php echo get_field('section_1_description'); ?></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why MassBit -->


    <section class="mb-section mb-section-massbit-route" id="MassBitRoute">
        <div class="container">
            <div class="mb-section-title d-block d-md-none" data-aos="fade-left" data-aos-duration="500">
                <span><?php echo get_field('section_2_heading'); ?></span>
            </div>
            <div class="row gx-xl-5 align-items-center">
                <div class="col-xl-7 col-lg-6 mb-3 mb-lg-0">
                    <img data-aos="fade-right" data-aos-duration="500" src="<?php echo get_field('section_2_image'); ?>" class="img-fluid" />
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="mb-section-title d-none d-md-block" data-aos="fade-left" data-aos-duration="500">
                        <span><?php echo get_field('section_2_heading'); ?></span>
                    </div>
                    <div class="mb-section-body">
                        <div class="mb-40 mb-mb-20px" data-aos="fade-left" data-aos-duration="500"><?php echo get_field('section_2_content'); ?></div>
                        <div data-aos="fade-up" data-aos-duration="500">
                            <a href="<?php echo get_field('section_2_link_target'); ?>" class="btn btn-fw btn-primary btn-right-icon">
                                <span><?php echo get_field('section_2_link_text'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End MassBit Route -->

    <section class="mb-section mb-section-cross-chain-indexing" id="CrossChainIndexing">
        <div class="container">
            <div class="mb-section-title d-block d-md-none" data-aos="fade-left" data-aos-duration="500">
                <span><?php echo get_field('section_3_heading'); ?></span>
            </div>
            <div class="row gx-xl-5 align-items-center">
                <div class="col-xl-5 col-lg-6 order-lg-1 order-2">
                    <div class="mb-section-title d-none d-md-block" data-aos="fade-right" data-aos-duration="500">
                        <span><?php echo get_field('section_3_heading'); ?></span>
                    </div>
                    <div class="mb-section-body">
                        <div class="mb-40 mb-mb-20px" data-aos="fade-right" data-aos-duration="500"><?php echo get_field('section_3_content'); ?></div>
                        <div data-aos="fade-up" data-aos-duration="500">
                            <a href="<?php echo get_field('section_3_link_target'); ?>" class="btn btn-fw btn-primary btn-right-icon">
                                <span><?php echo get_field('section_3_link_text'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 order-lg-2 order-1 mb-3 mb-lg-0">
                    <img data-aos="fade-left" data-aos-duration="500" src="<?php echo get_field('section_3_image'); ?>" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Cross Chain Indexing -->

    <section class="mb-section mb-section-massbit-insights" id="MassBitInsights">
        <div class="container">
            <div class="mb-section-title d-block d-md-none" data-aos="fade-left" data-aos-duration="500">
                <span><?php echo get_field('section_4_heading'); ?></span>
            </div>
            <div class="row gx-xl-5 align-items-center">
                <div class="col-xl-7 col-lg-6 mb-3 mb-lg-0">
                    <img src="<?php echo get_field('section_4_image'); ?>" class="img-fluid" data-aos="fade-right" data-aos-duration="500" />
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="mb-section-title d-none d-md-block" data-aos="fade-left" data-aos-duration="500">
                        <span><?php echo get_field('section_4_heading'); ?></span>
                    </div>
                    <div class="mb-section-body">
                        <div class="mb-40 mb-mb-20px" data-aos="fade-left" data-aos-duration="500"><?php echo get_field('section_4_content'); ?></div>
                        <div data-aos="fade-up" data-aos-duration="500">
                            <a href="<?php echo get_field('section_4_link_target'); ?>" class="btn btn-fw btn-primary btn-right-icon">
                                <span><?php echo get_field('section_4_link_text'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End MassBit Insights -->

    <section class="mb-section mb-section-compare">
        <div class="mb-decor">
            <div class="decor-1"></div>
            <div class="decor-3"></div>
            <div class="decor-4"></div>
            <div class="decor-5"></div>
            <div class="decor-6"></div>
        </div>
        <div class="container">
            <div class="mb-section-title text-center mb-50 mb-mb-10px" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_5_heading'); ?></span>
            </div>
            <div class="mb-section-body">
                <div class="mb-40 mb-mb-20px text-center" data-aos="fade-up" data-aos-duration="500"><?php echo get_field('section_5_description'); ?></div>
                <div class="mb-compare-block">
                    <div class="mb-compare-list-border">
                        <div class="row h-100">
                            <div class="col-md-3 col-4">

                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-border-compare"></div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-border-compare"></div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-border-compare border-white"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-compare-list">
                        <div class="row">
                            <div class="col-md-3 col-4">

                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-header">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/compare/infura.png'); ?>" alt="Infura" />
                                    <span>Infura</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-header">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/compare/the-graph.png'); ?>" alt="The Graph" />
                                    <span>The Graph</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-header">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/compare/massbit.svg'); ?>" alt="MassBit" />
                                    <span>MassBit</span>
                                </div>
                            </div>
                        </div>
                        <div class="row odd">
                            <div class="col-md-3 col-4">
                                <div class="mb-compare-item text-start">Decentralized APIs</div>
                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-times-circle opacity-50"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-item">
                                    <span class="opacity-50">-</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-check-circle text-white"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <div class="mb-compare-item text-start">No privacy concern of API</div>
                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-times-circle opacity-50"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-item">
                                    <span class="opacity-50">-</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-check-circle text-white"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row odd">
                            <div class="col-md-3 col-4">
                                <div class="mb-compare-item text-start">Cost effective</div>
                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-check-circle text-white"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-item">
                                    <span class="opacity-50">-</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-item">
                                    <span class="text-nowrap">
                                        <i class="far fa-check-circle text-white me-md-2 me-1"></i>
                                        <i class="far fa-check-circle text-white"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <div class="mb-compare-item text-start">Easy to use</div>
                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-check-circle text-white"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-item">
                                    <span class="opacity-50">-</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-item">
                                    <span><i class="far fa-check-circle text-white"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row odd">
                            <div class="col-md-3 col-4">
                                <div class="mb-compare-item text-start">Indexed chains</div>
                            </div>
                            <div class="col-md-3 col-2">
                                <div class="mb-compare-item">
                                    <span class="opacity-50">-</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="mb-compare-item">
                                    <span class="mb-compare-item-text">ETH-based chains</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-3 px-mb-0">
                                <div class="mb-compare-item">
                                    <span class="mb-compare-item-text">ETH-based chains, Substrate-based chains, Solana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Build Without Limits -->

    <section class="mb-section mb-section-our-team-experience pb-0" id="OurTeamExperience">
        <div class="container">
            <div class="mb-section-title text-center mb-50" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_6_heading'); ?></span>
            </div>
            <div class="mb-section-body" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="owl-carousel mb-team-experience-slide">
                    <?php echo get_field('section_6_content'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Experience -->

    <section class="mb-section mb-section-our-partners pb-5" id="OurPartners">
        <div class="container mb-5 pb-lg-5">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_7_heading'); ?></span>
            </div>
            <div class="mb-section-body">
                <div class="owl-carousel mb-partners-slide" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <?php echo get_field('section_7_content'); ?>
                </div>
            </div>
        </div>

        <div class="container pt-lg-3">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_8_heading'); ?></span>
            </div>
            <div class="mb-section-body" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="mb-30 text-center">Coming soon</div>
            </div>
        </div>
    </section>
    <!-- End Our Partners -->

    <section class="mb-section mb-section-start-with-massbit" id="BuildingWithMassBit">
        <div class="mb-decor">
            <div class="decor-1"></div>
            <div class="decor-2"></div>
            <div class="decor-3"></div>
            <div class="decor-4"></div>
        </div>
        <div class="mb-section-start-with-massbit-container container">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_9_heading'); ?></span>
            </div>
            <div class="mb-section-body">
                <div class="mb-30 text-center mb-mb-10px" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <?php echo get_field('section_9_description'); ?>
                </div>
                <div class="row gx-xl-5 justify-content-center mb-36 mb-mb-10px owl-theme" id="slideMobile">
                    <div class="col-lg-3 col-md-4">
                        <div class="mb-build-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <div class="mb-build-item-icon">
                                <img src="<?php echo get_field('section_9_item_1_icon'); ?>" alt="<?php echo get_field('section_9_item_1_title'); ?>" />
                            </div>
                            <div class="mb-build-item-title"><?php echo get_field('section_9_item_1_title'); ?></div>
                            <div class="mb-build-item-description mb-40">
                                <?php echo get_field('section_9_item_1_description'); ?>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="500">
                                <a href="<?php echo get_field('section_9_item_1_link_target'); ?>" class="btn btn-primary btn-right-icon">
                                    <span><?php echo get_field('section_9_item_1_link_text'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="mb-build-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <div class="mb-build-item-icon">
                                <img src="<?php echo get_field('section_9_item_2_icon'); ?>" alt="<?php echo get_field('section_9_item_2_title'); ?>" />
                            </div>
                            <div class="mb-build-item-title"><?php echo get_field('section_9_item_2_title'); ?></div>
                            <div class="mb-build-item-description mb-40">
                                <?php echo get_field('section_9_item_2_description'); ?>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="500">
                                <a href="<?php echo get_field('section_9_item_2_link_target'); ?>" class="btn btn-primary btn-right-icon">
                                    <span><?php echo get_field('section_9_item_2_link_text'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="mb-build-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <div class="mb-build-item-icon">
                                <img src="<?php echo get_field('section_9_item_3_icon'); ?>" alt="<?php echo get_field('section_9_item_3_title'); ?>" />
                            </div>
                            <div class="mb-build-item-title"><?php echo get_field('section_9_item_3_title'); ?></div>
                            <div class="mb-build-item-description mb-40">
                                <?php echo get_field('section_9_item_3_description'); ?>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="500">
                                <a href="<?php echo get_field('section_9_item_3_link_target'); ?>" class="btn btn-primary btn-right-icon">
                                    <span><?php echo get_field('section_9_item_3_link_text'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start Building with MassBit -->
    <?php
    get_footer();
