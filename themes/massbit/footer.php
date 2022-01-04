			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_archive()) :
			?>
				</div><!-- /.col -->

				<?php
				get_sidebar();
				?>

				</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
			endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="row">
								<div class="col-md-4 d-none d-md-block" data-aos="fade-right" data-aos-duration="500">
									<div class="mb-20 mt-1">
										<img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/logo-white.svg'); ?>" height="42" alt="MassBit" />
									</div>
									<div class="mb-copyright">
										<?php printf(esc_html__('&copy; Copyright %1$s %2$s.', 'massbit'), date_i18n('Y'), get_bloginfo('name', 'display')); ?><br />All rights reserved.
									</div>
								</div>
								<div class="col-md-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">
									<h3>PRODUCTS</h3>
									<?php
									if (has_nav_menu('product-menu')) :
										wp_nav_menu(
											array(
												'theme_location'  => 'product-menu',
												'container'       => '',
												'container_class' => 'nav-container',
												'fallback_cb'     => '',
												'items_wrap'      => '<ul class="">%3$s</ul>',
											)
										);
									endif;
									?>
								</div>
								<div class="col-md-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">
									<h3>ABOUT</h3>
									<?php
									if (has_nav_menu('footer-menu')) :
										wp_nav_menu(
											array(
												'theme_location'  => 'footer-menu',
												'container'       => '',
												'container_class' => 'nav-container',
												'fallback_cb'     => '',
												'items_wrap'      => '<ul class="">%3$s</ul>',
											)
										);
									endif;
									?>
								</div>
							</div>
						</div>
						<div class="col-lg-5" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<h3>GET OUR EXCLUSIVE NEWS IN YOUR INBOX <span class="text-danger">*</span></h3>
									<div class="mb-30">
										<!-- Begin Sendinblue Form -->
										<!-- START - We recommend to place the below code in head tag of your website html  -->

										<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
										<style>
											.entry__label {
												font-family: 'Airbnb Cereal App Book';
											}

											.sib-form .entry__field {
												margin: 0 !important;
											}

											.sib-form,
											.sib-form-container,
											#sib-container,
											.sib-form-block {
												padding: 0 !important;
												margin: 0 !important;
											}
										</style>
										<!--  END - We recommend to place the above code in head tag of your website html -->
										<!-- START - We recommend to place the below code where you want the form in your website html  -->
										<div class="sib-form" style="background-color: transparent;">
											<div id="sib-form-container" class="sib-form-container">
												<div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:transparent; max-width:540px; border-width:0px; border-color:#C0CCD9; border-style:solid;">
													<form id="sib-form" method="POST" action="https://a5f651f1.sibforms.com/serve/MUIEAK8orXdmPYsPcPyMh1o6AZapz2jJWTVp2uZtUp38kr5gNy-B8EREL2fOU9tC7lx1fzy3lneVWPOY0bMqw3pUsBT92YBSJtSqxSXIpEW7yTc0wRZAhjnDCj5K6sMPM4DUPu4_0lm21DDKifncX8X-jXJvYa1ZhpbU7usbhjmx5cDjTjzTKBjroMJ2uY6YY25Lf78qGgFYHoHi" data-type="subscription">
														<div class="sib-input sib-form-block">
															<div class="form__entry entry_block">
																<div class="form__label-row ">
																	<div class="entry__field text-dark">
																		<input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="Your email address" data-required="true" required />
																	</div>
																</div>
																<label class="entry__error entry__error--primary" style="font-size:14px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;"></label>
															</div>
														</div>
														<div class="sib-form-block" style="text-align: left;margin-top: 8px !important;">
															<button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; color:#FFFFFF; background-color:#2c3acf; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
																<svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
																	<path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
																</svg>
																SUBSCRIBE
															</button>
														</div>
														<input type="text" name="email_address_check" value="" class="input--hidden">
														<input type="hidden" name="locale" value="en">
													</form>
												</div>
												<div id="error-message" class="sib-form-message-panel mt-2" style="font-size:14px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
													<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
														<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
															<path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
														</svg>
														<span class="sib-form-message-panel__inner-text">Your subscription could not be saved. Please try again.</span>
													</div>
												</div>
												<div id="success-message" class="sib-form-message-panel mt-2" style="font-size:16px; text-align:left; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">
													<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
														<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
															<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
														</svg>
														<span class="sib-form-message-panel__inner-text">Your subscription has been successful.</span>
													</div>
												</div>

											</div>
										</div>
										<!-- END - We recommend to place the below code where you want the form in your website html  -->

										<!-- START - We recommend to place the below code in footer or bottom of your website html  -->
										<script>
											window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
											window.LOCALE = 'en';
											window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
											window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";
											window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
											window.translation = {
												common: {
													selectedList: '{quantity} list selected',
													selectedLists: '{quantity} lists selected'
												}
											};
											var AUTOHIDE = Boolean(0);
										</script>
										<script src="https://sibforms.com/forms/end-form/build/main.js"></script>
										<!-- END - We recommend to place the above code in footer or bottom of your website html  -->
										<!-- End Sendinblue Form -->
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<?php
									if (is_active_sidebar('footer_social_widget_area')) :
									?>
										<div>
											<?php
											dynamic_sidebar('footer_social_widget_area');
											?>
										</div>
									<?php
									endif;
									?>
								</div>
							</div>
						</div>
					</div><!-- /.row -->

					<div class="d-block d-md-none mt-4 pt-3" style="border-top: 1px rgba(255,255,255,.4) solid;">
						<div class="mb-20">
							<img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/logo-white.svg'); ?>" height="40" alt="MassBit" />
						</div>
						<div class="mb-copyright">
							© Copyright 2021 MassBit. All rights reserved.
						</div>
					</div>
				</div><!-- /.container -->
			</footer><!-- /#footer -->
			</div><!-- /#wrapper -->
			<?php
			wp_footer();
			?>

			<a href="#" id="to_top">
				<span><i class="fas fa-arrow-up"></i></span>
			</a>

			<div class="mb-right-box-wrap" style="display:none !important;opacity:0;z-index:-1">
				<div class="mb-right-box">
					<div class="mb-right-box-logo">
						<img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/decor.svg'); ?>" height="24" width="22" alt="MassBit logo">
					</div>
					<div class="mb-right-box-heading">
						<div>MassBit is hiring. Come join an industry-leading team.</div>
					</div>
					<a rel="noopener" href="https://codelight.breezy.hr/p/211cb662c703-digital-marketing-specialist" target="_blank" class="btn btn-outline-primary btn-sm w-100">See current openings</a>

					<a href="#" class="mb-right-box-close">
						<img src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/close-icon.svg'); ?>" width="10" height="10" alt="">
					</a>
				</div>
			</div>
			
			<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
			<script src="<?php echo esc_url(get_template_directory_uri() .  '/assets/plugins/OwlCarousel2/owl.carousel.min.js'); ?>"></script>
			<script>
				window.addEventListener('load', function() {
					const config = {
						loop: true,
						margin: 30,
						responsiveClass: true,
						autoplay: true,
						autoplayTimeout: 3000,
						autoplayHoverPause: true,
						responsive: {
							0: {
								items: 2,
								margin: 10,
								stagePadding: 40
							},
							600: {
								items: 3
							},
							1000: {
								items: 6
							}
						}
					}
					jQuery(".mb-team-experience-slide").owlCarousel(config);
					jQuery(".mb-partners-slide").owlCarousel(config);
					setSlide();

					jQuery(window).on('resize', () => {
						setSlide();
					})


					function setSlide() {
						if (jQuery(window).width() < 768) {
							jQuery('#slideMobile').addClass('owl-carousel');
							jQuery("#slideMobile").owlCarousel({
								loop: true,
								// autoplay: true,
								dots: true,
								margin: 30,
								center: true,
								items: 1,
								autoplayTimeout: 3000
							});
						} else {
							if (typeof jQuery('#slideMobile').data('owl.carousel') != 'undefined') {
								jQuery('#slideMobile').data('owl.carousel').destroy();
								jQuery('#slideMobile').removeClass('owl-carousel');
							}
						}
					}
					jQuery('.mb-right-box-close').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeOut(300);
						jQuery('.mb-right-box-wrap').removeClass('show');
					})
				});
					jQuery('.mb-right-box-close').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeOut(300);
						jQuery('.mb-right-box-wrap').removeClass('show');
					})
			</script>
			</body>

			</html>