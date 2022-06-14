<?php

/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
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
</article><!-- /#post-<?php the_ID(); ?> -->