<?php

/**
 * Sidebar Template.
 */

if (is_active_sidebar('primary_widget_area') || is_archive() || is_single()) :
?>
	<div id="sidebar" class="col-xl-3 col-md-4 col-sm-12">
		<div class="mb-sb-block mb-search-form position-relative">
			<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
				<input placeholder="Search posts..." type="text" name="s" id="search" class="form-control mb-search-input" value="<?php the_search_query(); ?>" />
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute" style="right:18px;top:50%;transform:translateY(-50%)">
					<path d="M1.59998 6.39967C1.59998 3.75261 3.75276 1.59992 6.39994 1.59992C9.04711 1.59992 11.1999 3.75261 11.1999 6.39967C11.1999 9.04673 9.04711 11.1994 6.39994 11.1994C3.75276 11.1994 1.59998 9.04673 1.59998 6.39967ZM15.7654 14.6336L11.4495 10.3171C12.3245 9.19875 12.7999 7.81964 12.7999 6.39967C12.7999 2.87105 9.9287 0 6.39994 0C2.87117 0 0 2.87105 0 6.39967C0 9.92829 2.87117 12.7993 6.39994 12.7993C7.81988 12.7989 9.19889 12.3236 10.3175 11.449L14.6343 15.7648C14.7084 15.8393 14.7965 15.8985 14.8936 15.9389C14.9906 15.9792 15.0947 16 15.1998 16C15.305 16 15.4091 15.9792 15.5061 15.9389C15.6032 15.8985 15.6913 15.8393 15.7654 15.7648C15.8398 15.6906 15.8988 15.6024 15.939 15.5054C15.9793 15.4083 16 15.3043 16 15.1992C16 15.0942 15.9793 14.9901 15.939 14.8931C15.8988 14.796 15.8398 14.7079 15.7654 14.6336Z" fill="#050C72" />
				</svg>
			</form>
		</div>

		<div class="mb-sb-block">
			<div class="mb-sb-block-title">Newsletter</div>
			<div class="mb-sb-block-content">
				<div class="mb-sb-block-description">Subscribe to our newsletter for the latest news, enterprise solutions, developer resources, and more.</div>
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

					.mb-sb-block .sib-form .entry__field {
						border: 0 !important;
						border-radius: 8px !important;
					}

					.mb-sb-block .sib-form .input {
						background: #FFFFFF !important;
						border: 1px solid #E9EBFA !important;
						border-radius: 8px !important;
						padding: 9px 12px !important;
						height: auto !important;
					}

					.mb-sb-block .sib-form .input::placeholder {
						font-family: "Airbnb Cereal App Book";
						font-size: 14px;
						line-height: 20px;
						color: #717591;

					}

					.mb-sb-block .sib-form-block__button-with-loader {
						height: 44px;
						background: #2C3ACF;
						border-radius: 8px !important;
						display: flex !important;
						width: 100%;
						align-items: center;
						justify-content: center;
						text-align: center !important;
						font-size: 14px !important;
						line-height: 20px !important;
						color: #FFFFFF;
						font-weight: normal !important;
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
										Subscribe
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
		<div class="mb-sb-block">
			<div class="mb-sb-block-title">Categories</div>
			<div class="mb-sb-block-content">
				<?php
				$categories = get_categories([
					'taxonomy' => 'category',
					'orderby'  => 'count',
					'order'    => 'DESC'
				]);

				foreach ($categories as $cd) {
					if ($cd->cat_name != 'Exclusive Content') {
				?>
						<div class="mb-sb-category">
							<a href="<?php echo get_category_link($cd); ?>"><?php echo $cd->name ?></a>
						</div>
				<?php
					}
				}

				?>
			</div>
		</div>
		<div class="mb-sb-block d-none">
			<div class="mb-sb-block-title">Exclusive Content</div>
			<div class="mb-sb-block-content">
				<?php
				$top_posts = get_posts([
					'numberposts'  => 4,
					'category'     => 5,
					'post_status'  => 'publish',
					'orderby'      => 'publish_date',
					'order'        => 'DESC',
				]);
				foreach ($top_posts as $tpost) { ?>
					<div class="mb-sb-post-item">
						<div class="mb-sb-post-item-meta">
							<span class="mb-sb-post-item-by">by&nbsp;</span>
							<span class="mb-sb-post-item-author">
								<?php echo get_the_author_meta('display_name', $tpost->post_author); ?>
							</span>
							<span class="mb-sb-post-item-separator">&nbsp;-&nbsp;</span>
							<span class="mb-sb-post-item-date"><?php echo get_the_date(get_option('date_format')); ?></span>
						</div>
						<a href="<?php echo get_post_permalink($tpost); ?>">
							<div class="mb-sb-post-item-title">
								<?php echo  $tpost->post_title; ?>
							</div>
						</a>
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="mb-sb-block">
			<div class="mb-sb-block-title">Popular Tags</div>
			<div class="mb-sb-block-content">
				<div class="mb-tags">
					<?php
					$tags = get_tags(array(
						'taxonomy' 		=> 'post_tag',
						'number' 		=> 10,
						'orderby'       => 'count',
						'order'         => 'DESC',
						'hide_empty' 	=> true
					));
					if ($tags) {
						foreach ($tags as $tag) {
					?>
							<a class="tag-cloud-link" href="<?php echo get_term_link($tag); ?>"><?php echo $tag->name; ?></a>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>

		<?php
		if (is_active_sidebar('primary_widget_area')) :
		?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php
				dynamic_sidebar('primary_widget_area');

				if (current_user_can('manage_options')) :
				?>
					<span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'massbit'); ?></a></span><!-- Show Edit Widget link -->
				<?php
				endif;
				?>
			</div><!-- /.widget-area -->
		<?php
		endif;
		?>
	</div><!-- /#sidebar -->
<?php
endif;
?>