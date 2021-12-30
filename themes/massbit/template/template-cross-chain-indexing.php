<?php

/**
 * Template Name: Cross-chain Indexing Page
 * Description: .
 *
 */

get_header();
?>
<div class="mb-cross-chain-indexing">
    <header class="mb-header-small">
        <div class="container">
            <div class="row align-items-center align-items-xl-center align-items-lg-end">
                <div class="col-xl-5 col-lg-6 mt-lg-0 mb-4 pe-lg-0">
                    <h2 class="mb-banner-sub-heading"><?php echo get_field('header_heading') ?></h2>
                    <div class="mb-banner-description fs-18"><?php echo get_field('header_description') ?></div>
                    <div class="mb-banner-action">
                        <a href="<?php echo get_field('header_link_target') ?>" class="btn btn-primary me-3"><?php echo get_field('header_link_text') ?></a>
                        <a href="<?php echo get_field('header_link_2_target') ?>" class="btn-outline-light"><?php echo get_field('header_link_2_text') ?></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 pl-lg-0">
                    <img src="<?php echo get_field('header_image') ?>" class="img-fluid" alt="Cross-chain Indexing" />
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="mb-section mb-section-start-with-massbit" id="WhyCrossChainIndexing">
        <div class="mb-section-start-with-massbit-container container">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span class="pt-2"><?php echo get_field('section_1_heading') ?></span>
            </div>
            <div class="mb-section-body" style="min-height: 440px;">
                <div data-aos="fade-up" class="row justify-content-center mb-60 mb-mb-10px">
                    <div class="col-xl-9 text-md-center">
                        <?php echo get_field('section_1_description') ?>
                    </div>
                </div>
                <div class="row gx-xl-5 justify-content-center">
                    <div class="col-md-6">
                        <div class="mb-iafe-accordion accordion mt-xl-5" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo get_field('section_2_tab_1_title') ?>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo get_field('section_2_tab_1_description') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php echo get_field('section_2_tab_2_title') ?>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo get_field('section_2_tab_2_description') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <?php echo get_field('section_2_tab_3_title') ?>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo get_field('section_2_tab_3_description') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="img-tab-1" src="<?php echo get_field('section_2_tab_1_image') ?>" alt="<?php echo get_field('section_2_tab_1_title') ?>" class="mb-iafe-accordion-image img-fluid" />
                        <img id="img-tab-2" src="<?php echo get_field('section_2_tab_2_image') ?>" alt="<?php echo get_field('section_2_tab_2_title') ?>" class="mb-iafe-accordion-image img-fluid" />
                        <img id="img-tab-3" src="<?php echo get_field('section_2_tab_3_image') ?>" alt="<?php echo get_field('section_2_tab_3_title') ?>" class="mb-iafe-accordion-image img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Cross-chain Indexing -->

    <section class="mb-section pb-4 mb-cci-section-realtime" id="RealtimeData">
            <div class="container">
                <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                    <span class="pt-2"><?php echo get_field("section_2_heading") ?></span>
                </div>
                <div class="mb-section-body">
                    <div data-aos="fade-up" class="row justify-content-center mb-40 mb-mb-10px">
                        <div class="col-xl-9 text-md-center"><?php echo get_field("section_2_description") ?></div>
                    </div>

                    <div data-aos="fade-up" class="mb-realtime-card">
                        <div class="mb-realtime-card-header">
                            <div class="mb-realtime-card-title">
                                <div style="font-size: 16px;line-height: 22px;color: #434C88;"><?php echo get_field("section_2_chart_title") ?></div>
                                <div style="font-family: 'Airbnb Cereal App Medium';font-size: 14px;line-height: 20px;color: #717591;" id="txtDateRange">Nov 22 -Dec 22</div>
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
                            <b id="txtTotalIndexedTransactions">0</b>
                            <span><?php echo get_field("section_2_chart_unit") ?></span>
                        </div>
                        <div class="mb-realtime-card-body">
                            <div class="w-100" id="totalIndexedTransactionsChart" style="height: 338px;"></div>
                        </div>
                    </div>

                    <div data-aos="fade-up" class="row mb-30 mb-mb-10px">
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-realtime-card-sm">
                                <div class="mb-realtime-sm-label"><?php echo get_field("section_2_card_1") ?></div>
                                <div class="mb-realtime-sm-value">
                                    <b id="txtNumberOfIndexersValue">0</b>
                                    <div id="txtNumberOfIndexersPercent" class="up">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor"/>
                                        </svg>
                                        <span>0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-realtime-card-sm">
                                <div class="mb-realtime-sm-label"><?php echo get_field("section_2_card_2") ?></div>
                                <div class="mb-realtime-sm-value">
                                    <b id="txtNumberOfIndexedBlocksValue">0</b>
                                    <div id="txtNumberOfIndexedBlocksPercent" class="up">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor"/>
                                        </svg>
                                        <span>0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-realtime-card-sm">
                                <div class="mb-realtime-sm-label"><?php echo get_field("section_2_card_3") ?></div>
                                <div class="mb-realtime-sm-value">
                                    <b id="txtAvarageBlockTimeValue">0</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mb-realtime-card-sm">
                                <div class="mb-realtime-sm-label"><?php echo get_field("section_2_card_4") ?></div>
                                <div class="mb-realtime-sm-value">
                                    <b id="txtNumberOfUsersValue">0</b>
                                    <div id="txtNumberOfUsersPercent" class="up">
                                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5 0.833333C15.5079 0.775267 15.5079 0.7164 15.5 0.658333C15.4927 0.609407 15.4787 0.561728 15.4583 0.516667C15.4363 0.475939 15.4112 0.436939 15.3833 0.4C15.3516 0.347294 15.3123 0.299558 15.2667 0.258333L15.1667 0.2C15.1186 0.16413 15.0651 0.136012 15.0083 0.116667H14.8417C14.7909 0.0674958 14.7316 0.0279646 14.6667 0H10.5C10.279 0 10.067 0.0877975 9.91075 0.244078C9.75447 0.400358 9.66667 0.61232 9.66667 0.833333C9.66667 1.05435 9.75447 1.26631 9.91075 1.42259C10.067 1.57887 10.279 1.66667 10.5 1.66667H12.8583L9.525 5.59167L5.925 3.45C5.75449 3.34858 5.55338 3.31133 5.35786 3.34493C5.16233 3.37854 4.9852 3.4808 4.85834 3.63333L0.691669 8.63333C0.6215 8.71754 0.568634 8.81476 0.536097 8.91943C0.50356 9.0241 0.491991 9.13416 0.502055 9.24331C0.512118 9.35246 0.543615 9.45854 0.594742 9.5555C0.645868 9.65246 0.71562 9.73838 0.800002 9.80833C0.949929 9.93257 1.13863 10.0004 1.33334 10C1.45576 10.0002 1.57673 9.97342 1.68763 9.92157C1.79853 9.86972 1.89665 9.79407 1.975 9.7L5.68334 5.25L9.24167 7.38333C9.41045 7.48344 9.60913 7.52077 9.80274 7.48876C9.99634 7.45675 10.1724 7.35744 10.3 7.20833L13.8333 3.08333V5C13.8333 5.22101 13.9211 5.43297 14.0774 5.58925C14.2337 5.74554 14.4457 5.83333 14.6667 5.83333C14.8877 5.83333 15.0996 5.74554 15.2559 5.58925C15.4122 5.43297 15.5 5.22101 15.5 5V0.833333Z" fill="currentColor"/>
                                        </svg>
                                        <span>0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Realtime Data -->

    <section class="mb-section mb-section-start-with-massbit mb-section-discover-cci-massbit" id="DiscoverCrossChainIndexingOnMassBit">
        <div class="mb-decor">
            <div class="decor-1"></div>
            <div class="decor-2"></div>
            <div class="decor-3"></div>
            <div class="decor-4"></div>
        </div>
        <div class="mb-section-start-with-massbit-container container">
            <div class="mb-section-title text-center" data-aos="fade-up" data-aos-duration="500">
                <span><?php echo get_field('section_3_heading') ?></span>
            </div>
            <div class="mb-section-body">
                <div data-aos="fade-up" class="row justify-content-center mb-30 mb-mb-10px">
                    <div class="col-xl-9 text-xl-center text-justify"><?php echo get_field('section_3_description') ?></div>
                </div>
                 <div class="row justify-content-center owl-theme" id="slideMobile">
                    <div class="col-md-5">
                        <div class="mb-discover-item mb-discover-item-style-1 pe-xl-5 selected">
                            <div class="mb-discover-item-inner pe-xl-5">
                                <div class="mb-discover-item-image">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="31" stroke="currentColor" stroke-width="2"/>
                                            <path d="M32 52C43.598 52 53 42.8218 53 31.5C53 20.1782 43.598 11 32 11C20.402 11 11 20.1782 11 31.5C11 42.8218 20.402 52 32 52Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 4"/>
                                            <path d="M34.4694 8H29.5957C29.0434 8 28.5957 8.44772 28.5957 9V13.8736C28.5957 14.4259 29.0434 14.8736 29.5957 14.8736H34.4694C35.0216 14.8736 35.4694 14.4259 35.4694 13.8736V9C35.4694 8.44772 35.0216 8 34.4694 8Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M34.4694 49H29.5957C29.0434 49 28.5957 49.4477 28.5957 50V54.8736C28.5957 55.4259 29.0434 55.8736 29.5957 55.8736H34.4694C35.0216 55.8736 35.4694 55.4259 35.4694 54.8736V50C35.4694 49.4477 35.0216 49 34.4694 49Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.8736 20.1215H10C9.44772 20.1215 9 20.5692 9 21.1215V25.9951C9 26.5474 9.44772 26.9951 10 26.9951H14.8736C15.4259 26.9951 15.8736 26.5474 15.8736 25.9951V21.1215C15.8736 20.5692 15.4259 20.1215 14.8736 20.1215Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M53.8736 20.1215H49C48.4477 20.1215 48 20.5692 48 21.1215V25.9951C48 26.5474 48.4477 26.9951 49 26.9951H53.8736C54.4259 26.9951 54.8736 26.5474 54.8736 25.9951V21.1215C54.8736 20.5692 54.4259 20.1215 53.8736 20.1215Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M52.1224 39H47C46.4477 39 46 39.4477 46 40V45.1224C46 45.6747 46.4477 46.1224 47 46.1224H52.1224C52.6747 46.1224 53.1224 45.6747 53.1224 45.1224V40C53.1224 39.4477 52.6747 39 52.1224 39Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.1224 39H11C10.4477 39 10 39.4477 10 40V45.1224C10 45.6747 10.4477 46.1224 11 46.1224H16.1224C16.6747 46.1224 17.1224 45.6747 17.1224 45.1224V40C17.1224 39.4477 16.6747 39 16.1224 39Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M23.3252 30.0547C23.3252 34.001 26.5332 37.209 30.4795 37.209C31.9473 37.209 33.292 36.7607 34.417 35.9961L38.46 40.0391C38.7061 40.2939 39.0488 40.4082 39.3916 40.4082C40.1387 40.4082 40.6748 39.8457 40.6748 39.1162C40.6748 38.7646 40.5518 38.4395 40.3145 38.1934L36.2979 34.168C37.1328 33.0166 37.6338 31.5928 37.6338 30.0547C37.6338 26.1084 34.4258 22.9004 30.4795 22.9004C26.5332 22.9004 23.3252 26.1084 23.3252 30.0547ZM25.1885 30.0547C25.1885 27.1367 27.5527 24.7637 30.4795 24.7637C33.3975 24.7637 35.7705 27.1367 35.7705 30.0547C35.7705 32.9727 33.3975 35.3457 30.4795 35.3457C27.5527 35.3457 25.1885 32.9727 25.1885 30.0547Z" fill="currentColor"/>
                                            </svg>
                                    </div>
                                <div class="mb-discover-item-title"><?php echo get_field('section_3_item_1_title') ?></div>
                                <div class="mb-discover-item-description"><?php echo get_field('section_3_item_1_description') ?></div>
                                <div class="mb-discover-item-action">
                                    <a class="btn btn-link-white btn-right-icon" href="<?php echo get_field('section_3_item_1_link_target') ?>">
										<span><?php echo get_field('section_3_item_1_link_text') ?></span>	
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                         <div class="mb-discover-item mb-discover-item-style-2 pe-xl-5">
                            <div class="mb-discover-item-inner pe-xl-5">
                                <div class="mb-discover-item-image">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="31" stroke="currentColor" stroke-width="2"/>
                                            <path d="M32 52C43.598 52 53 42.8218 53 31.5C53 20.1782 43.598 11 32 11C20.402 11 11 20.1782 11 31.5C11 42.8218 20.402 52 32 52Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 4"/>
                                            <path d="M34.4694 8H29.5957C29.0434 8 28.5957 8.44772 28.5957 9V13.8736C28.5957 14.4259 29.0434 14.8736 29.5957 14.8736H34.4694C35.0216 14.8736 35.4694 14.4259 35.4694 13.8736V9C35.4694 8.44772 35.0216 8 34.4694 8Z" fill="currentColor"/>
                                            <path d="M34.4694 49H29.5957C29.0434 49 28.5957 49.4477 28.5957 50V54.8736C28.5957 55.4259 29.0434 55.8736 29.5957 55.8736H34.4694C35.0216 55.8736 35.4694 55.4259 35.4694 54.8736V50C35.4694 49.4477 35.0216 49 34.4694 49Z" fill="currentColor"/>
                                            <path d="M14.8736 20.1215H10C9.44772 20.1215 9 20.5692 9 21.1215V25.9951C9 26.5474 9.44772 26.9951 10 26.9951H14.8736C15.4259 26.9951 15.8736 26.5474 15.8736 25.9951V21.1215C15.8736 20.5692 15.4259 20.1215 14.8736 20.1215Z" fill="currentColor"/>
                                            <path d="M53.8736 20.1215H49C48.4477 20.1215 48 20.5692 48 21.1215V25.9951C48 26.5474 48.4477 26.9951 49 26.9951H53.8736C54.4259 26.9951 54.8736 26.5474 54.8736 25.9951V21.1215C54.8736 20.5692 54.4259 20.1215 53.8736 20.1215Z" fill="currentColor"/>
                                            <path d="M52.1224 39H47C46.4477 39 46 39.4477 46 40V45.1224C46 45.6747 46.4477 46.1224 47 46.1224H52.1224C52.6747 46.1224 53.1224 45.6747 53.1224 45.1224V40C53.1224 39.4477 52.6747 39 52.1224 39Z" fill="currentColor"/>
                                            <path d="M16.1224 39H11C10.4477 39 10 39.4477 10 40V45.1224C10 45.6747 10.4477 46.1224 11 46.1224H16.1224C16.6747 46.1224 17.1224 45.6747 17.1224 45.1224V40C17.1224 39.4477 16.6747 39 16.1224 39Z" fill="currentColor"/>
                                            <path d="M31.5103 30.5249C33.7251 30.5249 35.5708 28.5664 35.5708 26.0234C35.5708 23.5625 33.7148 21.645 31.5103 21.645C29.3159 21.645 27.4497 23.583 27.46 26.0337C27.46 28.5664 29.2954 30.5249 31.5103 30.5249ZM24.5479 39.9175H38.4521C39.457 39.9175 40.0825 39.4253 40.0825 38.6255C40.0825 35.9902 36.791 32.3604 31.5 32.3604C26.209 32.3604 22.9175 35.9902 22.9175 38.6255C22.9175 39.4253 23.543 39.9175 24.5479 39.9175Z" fill="currentColor"/>
                                            </svg>
                                    </div>
                                <div class="mb-discover-item-title"><?php echo get_field('section_3_item_2_title') ?></div>
                                <div class="mb-discover-item-description"><?php echo get_field('section_3_item_2_description') ?></div>
                                <div class="mb-discover-item-action">
                                    <a class="btn btn-link-white btn-right-icon" href="<?php echo get_field('section_3_item_2_link_target') ?>">
										<span><?php echo get_field('section_3_item_2_link_text') ?></span>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work with Cross-chain Indexing -->
</div>

<?php
get_footer();
?>
<script>
    window.onload = () => {
        jQuery('#img-tab-1').show();
        jQuery('#headingOne').on('click', () => {
            jQuery('.mb-iafe-accordion-image').hide(300);
            jQuery('#img-tab-1').show(300);
        })
        jQuery('#headingTwo').on('click', () => {
            jQuery('.mb-iafe-accordion-image').hide(300);
            jQuery('#img-tab-2').show(300);
        })
        jQuery('#headingThree').on('click', () => {
            jQuery('.mb-iafe-accordion-image').hide(300);
            jQuery('#img-tab-3').show(300);
        })
    }
</script>
<?php
