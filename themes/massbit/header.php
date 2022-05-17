<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() .  '/assets/css/custom.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() .  '/assets/plugins/OwlCarousel2/assets/owl.carousel.min.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() .  '/assets/plugins/OwlCarousel2/assets/owl.theme.default.min.css'); ?>"/>
</head>
<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-light'); // Get custom meta-value.
$navbar_position = get_theme_mod('navbar_position', 'static'); // Get custom meta-value.
$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>
<!-- <?php body_class('testnet'); ?> -->
<body>
	<?php wp_body_open(); ?>
	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'massbit'); ?></a>
	<div id="wrapper">
		<nav id="header" class="navbar navbar-expand-lg navbar-light mb-navbar flex-wrap <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' fixed-top';
																				elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' fixed-bottom';
																				endif;
																				if (is_home() || is_front_page()) : echo ' home';
																				endif; ?>">
			<div class="mb-banner-testnet w-100" style="display: none;">
				<div class="container">
					<div class="mb-banner-testnet-inner">
						<div>Come join our MassBit Route <span>Testnet</span> Phase II 🎉</div>
						<a target="_blank" href="https://docs.massbit.io/massbit-route/testnet-phase-ii-opening" class="btn btn-link-white btn-right-icon">
							<span>Learn more</span>
						</a>
						<button class="btn-closex" type="button" onclick="hideBanner()"><i class="fas fa-times"></i></button>
					</div>
				</div>
			</div>
			<div class="container">
				<a class="navbar-brand" href="https://massbit.io/" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
					<?php
					$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

					if (!empty($header_logo)) :
					?>
						<img class="logo-default" src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
						<img class="logo-white" src="<?php echo esc_url(get_template_directory_uri() .  '/assets/images/logo-white.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
					<?php
					else :
						echo esc_attr(get_bloginfo('name', 'display'));
					endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'massbit'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
					// Loading WordPress Custom Menu (theme_location).
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container'      => '',
							'menu_class'     => 'navbar-nav ms-auto my-3 my-lg-0 align-items-center align-items-lg-start',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
						)
					);

					if ('1' === $search_enabled) :
					?>
						<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
							<div class="input-group">
								<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e('Search', 'massbit'); ?>" title="<?php esc_attr_e('Search', 'massbit'); ?>" />
								<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e('Search', 'massbit'); ?></button>
							</div>
						</form>
					<?php
					endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->

		<main id="mb-main" class="pt-5" style="min-height:400px">
			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_archive()) :
			?>
				<div class="container">
					<div class="row gx-xl-5">
						<div class="col-xl-9 col-md-8 col-sm-12">
						<?php
					endif;
						?>