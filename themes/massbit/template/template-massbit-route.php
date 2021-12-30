<?php

/**
 * Template Name: Massbit Route Page
 * Description: .
 *
 */

get_header();
?>
<div class="mb-massbit-route">
    <header class="mb-header-small">
        <div class="container">
            <div class="row align-items-center align-items-xl-center align-items-lg-end">
                <div class="col-xl-5 col-lg-6 mt-lg-0 mb-4 pe-lg-0">
                    <h2 class="mb-banner-sub-heading"><?php echo get_field('header_heading') ?></h2>
                    <div class="mb-banner-description fs-18"><?php echo get_field('header_description') ?></div>
                </div>
                <div class="col-xl-7 col-lg-6 pl-lg-0">
                    <img src="<?php echo get_field('header_image') ?>" class="img-fluid" alt="MassBit Route" />
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="mb-section mb-section-why-massbit pb-0" id="WhyMassBit">
        <div class="container text-center">
            <div data-aos="fade-up" class="mb-section-title d-flex align-content-center justify-content-md-center">
                <span class="pt-2"><?php echo get_field('section_1_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-40 mb-mb-10px">
                    <div class="col-xl-9"><?php echo get_field('section_1_description') ?></div>
                </div>
                <div data-aos="fade-up" class="row justify-content-center mb-40 mb-mb-10px">
                    <div class="col-lg-3 col-6">
                        <div class="mb-why-item">
                            <div class="mb-why-item-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/FullyDecentralizedAPIs.svg'); ?>" />
                            </div>
                            <div class="mb-why-item-title"><?php echo get_field('section_1_item_1_title') ?></div>
                            <div class="mb-why-item-description"><?php echo get_field('section_1_item_1_description') ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="mb-why-item">
                            <div class="mb-why-item-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/MassBitVerificationProtocol.svg'); ?>" />
                            </div>
                            <div class="mb-why-item-title"><?php echo get_field('section_1_item_2_title') ?></div>
                            <div class="mb-why-item-description"><?php echo get_field('section_1_item_2_description') ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="mb-why-item">
                            <div class="mb-why-item-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/Cost-Effective.svg'); ?>" />
                            </div>
                            <div class="mb-why-item-title"><?php echo get_field('section_1_item_3_title') ?></div>
                            <div class="mb-why-item-description"><?php echo get_field('section_1_item_3_description') ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="mb-why-item">
                            <div class="mb-why-item-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/NoPrivacyConcern.svg'); ?>" />
                            </div>
                            <div class="mb-why-item-title"><?php echo get_field('section_1_item_4_title') ?></div>
                            <div class="mb-why-item-description"><?php echo get_field('section_1_item_4_description') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why MassBit -->

    <section class="mb-section mb-section-realtime-data pt-0" id="RealtimeData">
        <div class="container">
            <div data-aos="fade-up" class="mb-section-title d-flex align-content-center justify-content-md-center">
                <span class="pt-2"><?php echo get_field('section_2_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-30 mb-mb-10px">
                    <div class="col-xl-9 text-md-center text-justify"><?php echo get_field('section_2_description') ?></div>
                </div>
                <div data-aos="fade-up" class="row">
                    <div class="col-lg-6">
                        <div class="mb-realtime-card">
                            <div class="mb-realtime-card-header">
                                <div class="mb-realtime-card-title">
                                    <div><?php echo get_field('total_requests_heading') ?></div>
                                    <div style="font-family: 'Airbnb Cereal App Medium';font-size: 14px;line-height: 20px;color: #717591;" id="txtDateRange"></div>
                                </div>
                                <div class="mb-realtime-card-filter">
                                    <select class="form-select" id="reportFilter1">
                                        <option value="3">Last 7 Days</option>
                                        <option value="4">Last 30 Days</option>
                                        <option value="5">This Month</option>
                                        <option value="6">Last Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-realtime-card-value">
                                <b id="txtTotalRequests">0</b>
                                <span>Requests</span>
                            </div>
                            <div class="mb-realtime-card-body">
                                <div class="w-100" id="totalRequestsChart" style="height: 338px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-realtime-card">
                            <div class="mb-realtime-card-header">
                                <div class="mb-realtime-card-title">
                                    <div><?php echo get_field('total_bandwidth_heading') ?></div>
                                    <div style="font-family: 'Airbnb Cereal App Medium';font-size: 14px;line-height: 20px;color: #717591;" id="txtDateRange2"></div>
                                </div>
                                <div class="mb-realtime-card-filter">
                                    <select class="form-select" id="reportFilter2">
                                        <option value="3">Last 7 Days</option>
                                        <option value="4">Last 30 Days</option>
                                        <option value="5">This Month</option>
                                        <option value="6">Last Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-realtime-card-value">
                                <b id="txtTotalBandwidth">0</b>
                                <span id="txtTotalBandwidthUnit">B</span>
                            </div>
                            <div class="mb-realtime-card-body">
                                <div class="w-100" id="totalBandwidthChart" style="height: 338px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="row">
                    <div class="col-md-4">
                        <div class="mb-realtime-card-sm">
                            <div class="mb-realtime-sm-label"><?php echo get_field('total_requests') ?></div>
                            <div class="mb-realtime-sm-value">
                                <b id="txtDapiValue">0</b>
                                <div id="txtDapiPercent" class="up">
                                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor" />
                                    </svg>
                                    <span>0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-realtime-card-sm">
                            <div class="mb-realtime-sm-label"><?php echo get_field('total_number_of_gateway') ?></div>
                            <div class="mb-realtime-sm-value">
                                <b id="txtGatewayValue">0</b>
                                <div id="txtGatewayPercent" class="up">
                                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor" />
                                    </svg>
                                    <span>0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-realtime-card-sm">
                            <div class="mb-realtime-sm-label"><?php echo get_field('total_number_of_nodes') ?></div>
                            <div class="mb-realtime-sm-value">
                                <b id="txtNodeValue">0</b>
                                <div id="txtNodePercent" class="up">
                                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor" />
                                    </svg>
                                    <span>0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Realtime Data -->

    <section class="mb-section mb-section-our-network pt-0" id="OurNetwork">
        <div class="container">
            <div data-aos="fade-up" class="mb-section-title d-flex align-content-center justify-content-md-center">
                <span class="pt-2"><?php echo get_field('section_2_2_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-30 mb-mb-10px">
                    <div class="col-xl-9 text-md-center text-justify"><?php echo get_field('section_2_2_description') ?></div>
                </div>
                <div class="mb-realtime-card-lg">
                    <div class="mb-realtime-card-lg-legend">
                        <div class="mb-realtime-gateway">Gateway</div>
                        <div class="mb-realtime-nodes">Node</div>
                    </div>
                    <div class="w-100" id="worldChart" style="height:calc(100vh - 180px);"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Network -->

    <section class="mb-section mb-section-start-with-massbit" id="BuildingWithMassBit">
        <div class="mb-decor">
            <div class="decor-1"></div>
            <div class="decor-2"></div>
            <div class="decor-3"></div>
            <div class="decor-4"></div>
        </div>
        <style>
            .mb-build-item-style-1::before {
                background-image: url("<?php echo get_field('section_3_item_1_background_image') ?>");
            }

            .mb-build-item-style-2::before {
                background-image: url("<?php echo get_field('section_3_item_2_background_image') ?>");
            }

            .mb-build-item-style-3::before {
                background-image: url("<?php echo get_field('section_3_item_3_background_image') ?>");
            }
        </style>
        <div class="mb-section-start-with-massbit-container container">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_3_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div class="mb-30 text-center mb-mb-10px" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"><?php echo get_field('section_3_description') ?></div>
                <div class="row gx-xl-5 justify-content-center mb-36 mb-mb-10px owl-theme" id="slideMobile">
                    <div class="col-md-4">
                        <div class="mb-build-item mb-build-item-custom mb-build-item-style-1" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <div class="mb-build-item-content">
                                <div class="mb-build-item-icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/dapp.svg'); ?>" alt="<?php echo get_field('section_3_item_1_title') ?>" />
                                </div>
                                <div class="mb-build-item-title"><?php echo get_field('section_3_item_1_title') ?></div>
                                <div class="mb-build-item-description mb-40"><?php echo get_field('section_3_item_1_description') ?></div>
                                <div class="text-start" data-aos="fade-up" data-aos-duration="500">
                                    <a href="<?php echo get_field('section_3_item_1_link_target') ?>" class="btn btn-link-white btn-right-icon">
                                        <span><?php echo get_field('section_3_item_1_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-build-item mb-build-item-custom mb-build-item-style-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <div class="mb-build-item-content">
                                <div class="mb-build-item-icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/GW.svg'); ?>" alt="<?php echo get_field('section_3_item_2_title') ?>" />
                                </div>
                                <div class="mb-build-item-title"><?php echo get_field('section_3_item_2_title') ?></div>
                                <div class="mb-build-item-description mb-40"><?php echo get_field('section_3_item_2_description') ?></div>
                                <div class="text-start" data-aos="fade-up" data-aos-duration="500">
                                    <a href="<?php echo get_field('section_3_item_2_link_target') ?>" class="btn btn-link-white btn-right-icon">
                                        <span><?php echo get_field('section_3_item_2_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-build-item mb-build-item-custom mb-build-item-style-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <div class="mb-build-item-content">
                                <div class="mb-build-item-icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/Nodes.svg'); ?>" alt="<?php echo get_field('section_3_item_3_title') ?>" />
                                </div>
                                <div class="mb-build-item-title"><?php echo get_field('section_3_item_3_title') ?></div>
                                <div class="mb-build-item-description mb-40"><?php echo get_field('section_3_item_3_description') ?></div>
                                <div class="text-start" data-aos="fade-up" data-aos-duration="500">
                                    <a href="<?php echo get_field('section_3_item_3_link_target') ?>" class="btn btn-link-white btn-right-icon">
                                        <span><?php echo get_field('section_3_item_3_link_text') ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start Building with MassBit -->
</div>

<?php
get_footer();
?>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/index.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/xy.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/percent.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/map.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/themes/Animated.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/geodata/continentsLow.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/amcharts_5_0_15/amcharts5/geodata/usaLow.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/total-bandwidth-chart.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/total-requests-chart.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/js/world-chart.js'); ?>"></script>
<script>
    window.onload = () => {
        jQuery.ajax({
            url: "https://dapi.massbit.io/api/v1?action=stat.overview",
            type: 'GET',
            dataType: 'json',
            success: function(res) {
                if (res && res.result) {
                    jQuery('#txtDapiValue').text(numberWithCommas(res.data.dapi.value));
                    jQuery('#txtDapiPercent').attr('class', res.data.dapi.percent > 0 ? 'up' : 'down');
                    jQuery('#txtDapiPercent span').text(numberWithCommas(res.data.dapi.percent) + '%');

                    jQuery('#txtGatewayValue').text(numberWithCommas(res.data.gateway.value));
                    jQuery('#txtGatewayPercent').attr('class', res.data.gateway.percent > 0 ? 'up' : 'down');
                    jQuery('#txtGatewayPercent span').text(numberWithCommas(res.data.gateway.percent) + '%');

                    jQuery('#txtNodeValue').text(numberWithCommas(res.data.node.value));
                    jQuery('#txtNodePercent').attr('class', res.data.node.percent > 0 ? 'up' : 'down');
                    jQuery('#txtNodePercent span').text(numberWithCommas(res.data.node.percent) + '%');
                }
            }
        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    }
</script>
