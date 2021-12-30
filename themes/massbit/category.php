<?php

/**
 * The Template for displaying Category Archive pages.
 */

get_header();

?>
<div class="mb-page-category">
	<div class="container">
		<?php
		if (have_posts()) :
		?>
			<div class="page-header">
				<h1 class="page-title mb-5"><?php printf(esc_html__('Category Archives: %s', 'massbit'), single_cat_title('', false)); ?></h1>
				<?php
				$category_description = category_description();
				if (!empty($category_description)) :
					echo apply_filters('category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>');
				endif;
				?>
			</div>
		<?php
			get_template_part('archive', 'loop');
		else :
			// 404.
			get_template_part('content', 'none');
		endif;
		?>
	</div>
</div>
<?php

wp_reset_postdata(); // End of the loop.

get_footer();
