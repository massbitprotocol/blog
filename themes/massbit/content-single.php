<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mb-entry-breadcrumb">
		<div class="container">
			<a href="<?php echo esc_url(home_url()); ?>" class="mb-entry-breadcrumb-home">MassBit Blog /&nbsp;</a>
			<span>The Fully Decentralized Solution</span>
		</div>
	</div>
	<div class="container">
		

		<div class="row gx-xl-5 justify-content-center">
			<div class="col-xl-9 col-md-8 col-sm-12">
				<div class="entry-header">
			<div class="mb-entry-cats">
				<?php
				$category_detail = get_the_category(get_the_ID());
				foreach ($category_detail as $cd) { ?>
					<a href="<?php echo get_category_link($cd); ?>" class="mb-blog-item-cat"><?php echo $cd->cat_name; ?></a>
				<?php
				}
				?>
			</div>
			<h1 class="mb-entry-title entry-title"><?php the_title(); ?></h1>
			<?php
			if ('post' === get_post_type()) :
			?>
				<div class="mb-entry-meta">
					<?php echo get_the_date(); ?>
				</div><!-- /.entry-meta -->
				<div class="mb-entry-share">
					<a href="https://twitter.com/intent/tweet?text=<?php echo esc_url(get_permalink()); ?>" target="_blank" title="Share on Twitter">
						<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 1.65552C17.3253 1.94197 16.6108 2.1298 15.8796 2.21289C16.6471 1.77472 17.2242 1.07986 17.5032 0.258148C16.776 0.669684 15.9829 0.959549 15.1569 1.11565C14.8091 0.761452 14.3907 0.479862 13.9273 0.288054C13.4638 0.0962466 12.9651 -0.00175643 12.4614 2.38256e-05C10.422 2.38256e-05 8.7687 1.58377 8.7687 3.53501C8.7687 3.81151 8.8011 4.08189 8.8641 4.34001C7.40122 4.27237 5.9689 3.909 4.65855 3.27307C3.3482 2.63715 2.18858 1.74265 1.2537 0.646647C0.925943 1.18425 0.753673 1.79795 0.7551 2.42289C0.7551 3.65051 1.4067 4.73289 2.3967 5.36551C1.81124 5.34713 1.23842 5.19517 0.7245 4.92189V4.96564C0.7245 6.67888 1.998 8.10775 3.6855 8.43325C3.36835 8.51506 3.04162 8.55653 2.7135 8.55663C2.475 8.55663 2.2437 8.53475 2.0178 8.491C2.25908 9.19793 2.7208 9.81427 3.33884 10.2544C3.95688 10.6946 4.70056 10.9367 5.4666 10.9471C4.15266 11.9311 2.53964 12.4627 0.8811 12.4582C0.5823 12.4582 0.2889 12.4407 0 12.4092C1.69313 13.4511 3.65633 14.0029 5.6601 14C12.4524 14 16.1658 8.61263 16.1658 3.94101L16.1532 3.48339C16.8776 2.98785 17.5033 2.36851 18 1.65552Z" fill="#434C88" />
						</svg>
					</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank" title="Share to Facebook">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.51347 5.09835V7.30127H6V9.99479H7.51347V18H10.6201V9.99559H12.7054C12.7054 9.99559 12.9008 8.70414 12.9955 7.29165H10.6328V5.44947C10.6328 5.17451 10.971 4.80415 11.3062 4.80415H13V2H10.6975C7.43607 2 7.51347 4.69593 7.51347 5.09835Z" fill="#434C88" />
						</svg>
					</a>
					<a href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Share via Email" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" style="height: 20px;width: 20px;">
						<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#434C88" stroke="none">
							<path d="M969 4259 c-134 -20 -282 -99 -375 -202 -29 -33 -54 -63 -54 -66 0 -3 455 -272 1010 -598 l1011 -592 1007 591 c554 324 1009 592 1011 594 2 2 -34 41 -80 87 -63 63 -103 93 -159 121 -156 77 -4 70 -1750 72 -861 1 -1590 -2 -1621 -7z"></path>
							<path d="M430 2478 c0 -1197 -3 -1137 70 -1278 97 -185 267 -306 480 -340 89 -14 3071 -14 3160 0 154 25 292 98 390 208 58 65 133 209 149 290 8 36 11 393 11 1122 0 589 -2 1070 -4 1070 -2 0 -439 -255 -972 -567 -607 -355 -991 -573 -1027 -585 -76 -23 -195 -23 -262 0 -27 10 -486 273 -1018 585 -533 312 -970 567 -973 567 -2 0 -4 -483 -4 -1072z"></path>
						</g>
					</svg>
					</a>
				</div><!-- /.entry-meta -->
			<?php
			endif;
			?>
		</div><!-- /.entry-header -->
				<div class="mb-entry-content">
					<?php
					if (has_post_thumbnail()) :
						echo '<div class="mb-post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
					endif;

					the_content();

					?>
				</div><!-- /.entry-content -->
				<div class="mb-entry-tags">
					<?php
					$post_tags = get_the_tags();

					if ($post_tags) {
						foreach ($post_tags as $tag) {
					?>
							<a href="<?php echo esc_attr(get_tag_link($tag->term_id)) ?>"><?php echo $tag->name; ?></a>
					<?php
						}
					}
					?>
				</div>
				<div class="mb-entry-footer">
					If you have any questions or would like to stay updated on our progress, please join our <a href="https://discord.gg/jbaUzJYT" target="_blank">discord</a> and or sign up to our <a href="https://t.me/massbit" target="_blank">newsletter</a>
				</div>
				<?php
				edit_post_link(__('Edit', 'massbit'), '<span class="edit-link">', '</span>');
				?>
			</div>
			
		</div>
	</div>
	<div class="mb-entry-related-posts">
		<div class="container">
			<h3>Related Posts</h3>



			<div class="row mb-blog-items">

				<?php
				$orig_post = $post;
				global $post;
				$tags = wp_get_post_tags($post->ID);

				if ($tags) {
					$tag_ids = array();
					foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					$args = array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page' => 4, // Number of related posts to display.
						'caller_get_posts' => 1
					);

					$my_query = new wp_query($args);

					while ($my_query->have_posts()) {
						$my_query->the_post();
				?>
						<div class="col-md-3">
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
									<?php echo get_the_date(); ?>
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
				<?php }
				}
				$post = $orig_post;
				wp_reset_query();
				?>

			</div>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->