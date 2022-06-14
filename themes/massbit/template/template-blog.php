<?php

/**
 * Template Name: Blog Page
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option('page_for_posts');
?>
<header class="mb-header-small" style="background-position: bottom center;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 col-lg-8 text-center">
				<h2 class="mb-banner-sub-heading">MassBit Blog</h2>
				<div class="mb-banner-description fs-18">
					Stay updated with the latest news, deep insights and blockchain tutorials by MassBit, the first fully decentralized solution for DeFi & Web3 apps.
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container py-5 mt-5">
	<div class="row gx-xl-5">
		<div class="col-xl-9 col-md-8 col-sm-12">
			<div id="ajax-posts" class="row mb-blog-items">
				<?php
				$postsPerPage = 12;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => $postsPerPage,
				);

				$loop = new WP_Query($args);

				while ($loop->have_posts()) : $loop->the_post();
				?>
					<div class="col-md-4">
						<div class="mb-blog-item">
							<div class="mb-blog-item-image">
								<div class="mb-blog-item-cats">
									<?php
									$category_detail = get_the_category(get_the_ID());
									foreach ($category_detail as $cd) {
										if ($cd->cat_name != 'Exclusive Content') { ?>
											<a href="<?php echo get_category_link($cd); ?>" class="mb-blog-item-cat"><?php echo $cd->cat_name; ?></a>
									<?php
										}
									}
									?>
								</div>

								<?php
								if (has_post_thumbnail()) :
									$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
									$images_alt = get_post_meta($thumbnail_url, '_wp_attachment_image_alt', true);
								?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_html($images_alt); ?>" />
									</a>
								<?php endif; ?>
							</div>
							<div class="mb-blog-item-time">
								<span class="mb-blog-item-author"><?php echo get_avatar( get_the_author_meta( 'ID' )) ?></span>
								<span>by</span>
								<b><?php echo get_the_author_meta('display_name', get_the_author_ID()); ?> - <?php echo get_the_date(); ?></b>
							</div>
							<div class="mb-blog-item-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="mb-blog-item-excerpt">
								<?php echo get_the_excerpt(); ?>
							</div>
							<div class="mb-blog-item-readmore">
								<a href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<button class="btn btn-primary px-5 btn-load-more mx-auto" type="button" id="more_posts">
				<span>Load More</span>
				<svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.542 0.487035C11.1791 1.86211 7.36835 4.59244 4.6633 8.28136C1.95825 11.9703 0.499853 16.4256 0.5 21C0.5 32.874 10.126 42.5 22 42.5C31.847 42.5 40.364 35.825 42.809 26.428C42.9092 26.0429 42.8524 25.6338 42.651 25.2906C42.4496 24.9474 42.1201 24.6983 41.735 24.598C41.3499 24.4978 40.9408 24.5546 40.5976 24.756C40.2544 24.9574 40.0052 25.2869 39.905 25.672C37.803 33.755 30.473 39.5 22 39.5C11.783 39.5 3.5 31.217 3.5 21C3.5 12.863 8.8 5.75303 16.442 3.35003C16.8217 3.23069 17.1384 2.96541 17.3224 2.61256C17.5065 2.25971 17.5428 1.84819 17.4235 1.46853C17.3042 1.08888 17.0389 0.77218 16.686 0.588113C16.3332 0.404046 15.9217 0.367687 15.542 0.487035Z" fill="#2C3ACF" />
				</svg>
			</button>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
