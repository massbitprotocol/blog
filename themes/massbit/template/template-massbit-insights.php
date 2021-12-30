<?php

/**
 * Template Name: MassBit Insights Page
 * Description: .
 *
 */

get_header();
?>
<div class="mb-massbit-insights">
    <header class="mb-header-small">
        <div class="container">
            <div class="row align-items-center align-items-xl-center align-items-lg-end">
                <div class="col-xl-5 col-lg-6 mt-lg-0 mb-4">
                    <h2 class="mb-banner-sub-heading"><?php echo get_field('header_heading') ?></h2>
                    <div class="mb-banner-description fs-18"><?php echo get_field('header_description') ?></div>
                </div>
                <div class="col-xl-7 col-lg-6 pl-lg-0">
                    <img src="<?php echo get_field('header_image') ?>" class="img-fluid" alt="MassBit Insights" />
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="mb-section mb-section-overview pb-0" id="Overview">
        <div class="container text-center">
            <div data-aos="fade-up" class="mb-section-title d-flex align-content-center justify-content-md-center">
                <span class="pt-2"><?php echo get_field('section_1_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-40 mb-mb-10px">
                    <div class="col-xl-9"><?php echo get_field('section_1_description') ?></div>
                </div>
                <div data-aos="fade-up" class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="mb-overview-item mb-overview-item-style-1">
                            <div class="mb-overview-item-inner">
                                <div class="mb-overview-item-title"><?php echo get_field('section_1_card_1_title') ?></div>
                                <div class="mb-overview-item-content"><?php echo get_field('section_1_card_1_content') ?></div>
                                <div class="mb-overview-item-more"><?php echo get_field('section_1_card_1_more') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-overview-item mb-overview-item-style-2">
                            <div class="mb-overview-item-inner">
                                <div class="mb-overview-item-title"><?php echo get_field('section_1_card_2_title') ?></div>
                                <div class="mb-overview-item-content"><?php echo get_field('section_1_card_2_content') ?></div>
                                <div class="mb-overview-item-more"><?php echo get_field('section_1_card_2_more') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-overview-item mb-overview-item-style-3">
                            <div class="mb-overview-item-inner">
                                <div class="mb-overview-item-title"><?php echo get_field('section_1_card_3_title') ?></div>
                                <div class="mb-overview-item-content"><?php echo get_field('section_1_card_3_content') ?></div>
                                <div class="mb-overview-item-more"><?php echo get_field('section_1_card_3_more') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-overview-item mb-overview-item-style-4">
                            <div class="mb-overview-item-inner">
                                <div class="mb-overview-item-title"><?php echo get_field('section_1_card_4_title') ?></div>
                                <div class="mb-overview-item-content"><?php echo get_field('section_1_card_4_content') ?></div>
                                <div class="mb-overview-item-more"><?php echo get_field('section_1_card_4_more') ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-overview-chart mb-4">
                    <?php echo get_field('section_1_chart'); ?>
                </div>

                <div class="row">
                        <div class="col-md-6">
                            <div class="mb-overview-chart-small">
                                <div class="mb-overview-chart-small-title">
                                    LATEST BLOCKS
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Slot</th>
                                                <th>Time (UTC)</th>
                                                <th>Tx Count</th>
                                                <th>Reward (SOL)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>1,024</td>
                                                <td>0.002575</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-overview-chart-small">
                                <div class="mb-overview-chart-small-title">
                                    LATEST TRANSACTIONS
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Slot</th>
                                                <th>Time (UTC)</th>
                                                <th>Instructions</th>
                                                <th>Fee (SOL)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                            <tr>
                                                <td>#104810031</td>
                                                <td>1 minute ago</td>
                                                <td>Unknown</td>
                                                <td>0.000005</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Why MassBit -->

    <section class="mb-section mb-section-start-with-massbit" id="BuildingWithMassBit">
        <div class="mb-decor">
            <div class="decor-1"></div>
            <div class="decor-2"></div>
            <div class="decor-3"></div>
            <div class="decor-4"></div>
        </div>
        <div class="mb-section-start-with-massbit-container container">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_2_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div class="mb-30 text-center mb-mb-10px" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"><?php echo get_field('section_2_description') ?></div>
                <div class="row gx-xl-5 justify-content-center mb-36 mb-mb-10px owl-theme" id="slideMobile">
                    <div class="col-md-4">
                        <div class="mb-start-with-mi">
                            <div class="mb-start-with-mi-inner">
                                <div class="mb-start-with-mi-icon">
                                    <img src="<?php echo get_field('section_2_item_1_icon') ?>" alt="<?php echo get_field('section_2_item_1_title') ?>" />
                                </div>
                                <div class="mb-start-with-mi-title"><?php echo get_field('section_2_item_1_title') ?></div>
                                <div class="mb-start-with-mi-description"><?php echo get_field('section_2_item_1_description') ?></div>
                                <div class="mb-start-with-mi-action">
                                    <a class="btn btn-link-white btn-right-icon" href="<?php echo get_field('section_2_item_1_link_target') ?>">
                                        <span><?php echo get_field('section_2_item_1_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-start-with-mi">
                            <div class="mb-start-with-mi-inner">
                                <div class="mb-start-with-mi-icon">
                                    <img src="<?php echo get_field('section_2_item_2_icon') ?>" alt="<?php echo get_field('section_2_item_2_title') ?>" />
                                </div>
                                <div class="mb-start-with-mi-title"><?php echo get_field('section_2_item_2_title') ?></div>
                                <div class="mb-start-with-mi-description"><?php echo get_field('section_2_item_2_description') ?></div>
                                <div class="mb-start-with-mi-action">
                                    <a class="btn btn-link-white btn-right-icon" href="<?php echo get_field('section_2_item_2_link_target') ?>">
                                        <span><?php echo get_field('section_2_item_2_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-start-with-mi">
                            <div class="mb-start-with-mi-inner">
                                <div class="mb-start-with-mi-icon">
                                    <img src="<?php echo get_field('section_2_item_3_icon') ?>" alt="<?php echo get_field('section_2_item_3_title') ?>" />
                                </div>
                                <div class="mb-start-with-mi-title"><?php echo get_field('section_2_item_3_title') ?></div>
                                <div class="mb-start-with-mi-description"><?php echo get_field('section_2_item_3_description') ?></div>
                                <div class="mb-start-with-mi-action">
                                    <a class="btn btn-link-white btn-right-icon" href="<?php echo get_field('section_2_item_3_link_target') ?>">
                                        <span><?php echo get_field('section_2_item_3_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start Building with MassBit Insights -->
</div>

<?php
get_footer();
?>
<?php
