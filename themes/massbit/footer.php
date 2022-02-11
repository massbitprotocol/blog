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

			<div class="mb-right-box-wrap">
				<div class="mb-right-box">
					<div class="mb-right-box-heading">
						<div>Questions About The Testnet?</div>
					</div>
					<div class="mb-right-box-content">
						If you have any questions about the MassBit Route Testnet, look it up in our guide.
					</div>
					<div class="mb-right-box-link">
						<a rel="noopener" href="https://codelight.breezy.hr/p/211cb662c703-digital-marketing-specialist" target="_blank" class="btn btn-link-white btn-right-icon">
							<span>See guide to test</span>
						</a>
					</div>
					<div class="mb-right-box-more">
						Any feedback? Feel free to reach out to us at
					</div>
					<div class="mb-right-box-socials">
						<a rel="noopener" href="https://discord.gg/5ePzAEFNHZ" target="_blank">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.3865 16.1307H13.8925L13.4385 14.6607C13.5058 14.7193 17.3332 18 17.3332 18V3.65C17.2878 2.758 16.5198 2 15.5678 2L4.38984 2.002C3.4385 2.002 2.6665 2.76133 2.6665 3.65333V14.48C2.6665 15.4207 3.43717 16.1307 4.3865 16.1307V16.1307ZM11.4185 5.78867L11.3965 5.79667L11.4045 5.78867H11.4185ZM6.33117 6.63467C7.55317 5.74533 8.68584 5.788 8.68584 5.788L8.77717 5.878C7.28184 6.23467 6.60384 6.90267 6.60384 6.90267C6.67317 6.888 9.6925 5.146 13.3512 6.94667C13.3512 6.94667 12.6718 6.322 11.2685 5.922L11.3925 5.8C11.5865 5.80067 12.6132 5.83667 13.7118 6.64C13.7118 6.64 14.9412 8.74 14.9412 11.32C14.9005 11.2707 14.1785 12.4307 12.3205 12.4707C12.3205 12.4707 12.0058 12.1147 11.7818 11.804C12.8685 11.492 13.2752 10.868 13.2752 10.868C11.1598 12.2 9.30584 11.992 7.08784 11.092C7.06717 11.092 7.05784 11.0827 7.04717 11.072V11.068C7.0365 11.058 7.02717 11.048 7.0065 11.048H6.9665C6.8305 10.9587 6.73984 10.9147 6.73984 10.9147C6.73984 10.9147 7.14584 11.5387 8.18917 11.8507C7.91517 12.1633 7.64384 12.5187 7.64384 12.5187C5.7865 12.4747 5.10917 11.3147 5.10917 11.3147C5.10917 8.73067 6.33117 6.63467 6.33117 6.63467V6.63467Z" fill="currentColor"/>
								<path d="M11.5382 10.514C12.0122 10.514 12.3982 10.114 12.3982 9.62071C12.3982 9.13071 12.0142 8.73071 11.5382 8.73071V8.73271C11.0662 8.73271 10.6796 9.13138 10.6782 9.62471C10.6782 10.114 11.0642 10.514 11.5382 10.514Z" fill="currentColor"/>
								<path d="M8.45961 10.514C8.93361 10.514 9.31961 10.114 9.31961 9.62071C9.31961 9.13071 8.93627 8.73071 8.46228 8.73071L8.45961 8.73271C7.98561 8.73271 7.59961 9.13138 7.59961 9.62471C7.59961 10.114 7.98561 10.514 8.45961 10.514V10.514Z" fill="currentColor"/>
							</svg>
						</a>
						<a rel="noopener" href="https://discord.gg/5ePzAEFNHZ" target="_blank">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.27827 12.2269L8.0136 16.1357C8.39227 16.1357 8.55628 15.9649 8.75295 15.7598L10.5283 13.9783L14.2071 16.807C14.8818 17.2018 15.3571 16.9939 15.5391 16.1553L17.9538 4.27498L17.9545 4.27428C18.1685 3.22708 17.5938 2.81758 16.9365 3.07448L2.7428 8.78015C1.77411 9.17495 1.78878 9.74195 2.57813 9.99885L6.20689 11.1839L14.6358 5.64627C15.0324 5.37047 15.3931 5.52307 15.0964 5.79887L8.27827 12.2269Z" fill="currentColor"/>
							</svg>
						</a>
					</div>
					<a href="#" class="mb-right-box-close" id="MBRightBoxClose">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/close-icon2.svg'); ?>" width="14" height="14" alt="">
					</a>
				</div>
			</div>
			<a href="#" id="MBRightBoxOpen">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/open-icon2.svg'); ?>" width="14" height="14" alt="">
			</a>
			
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
					jQuery('#MBRightBoxClose').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeOut(300);
						jQuery('.mb-right-box-wrap').removeClass('show');
						jQuery('#MBRightBoxOpen').show();
						jQuery('#MBRightBoxClose').hide();
					})
					jQuery('#MBRightBoxOpen').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeIn(300);
						jQuery('.mb-right-box-wrap').addClass('show');
						jQuery('#MBRightBoxClose').show();
						jQuery('#MBRightBoxOpen').hide();
					})
					jQuery('#btnClosex').on('click', () => {
						jQuery('body').removeClass('testnet');
						jQuery('.mb-banner-testnet').hide(300);
					})
				});
					jQuery('#MBRightBoxClose').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeOut(300);
						jQuery('.mb-right-box-wrap').removeClass('show');
						jQuery('#MBRightBoxOpen').show();
						jQuery('#MBRightBoxClose').hide();
					})
					jQuery('#MBRightBoxOpen').on('click', (e) => {
						e.preventDefault();
						jQuery('.mb-right-box-wrap').fadeIn(300);
						jQuery('.mb-right-box-wrap').addClass('show');
						jQuery('#MBRightBoxClose').show();
						jQuery('#MBRightBoxOpen').hide();
					})

					jQuery('#btnClosex').on('click', () => {
						jQuery('body').removeClass('testnet');
						jQuery('.mb-banner-testnet').hide(300);
					})
			</script>
			</body>

			</html>