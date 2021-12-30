<?php

/**
 * The Template for displaying Search Results pages.
 */

get_header();

?>
<div class="mb-search-page">
	<div class="container">
		<?php if (have_posts()) :
		?>
			<div class="page-header">
				<h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'massbit'), get_search_query()); ?></h1>
			</div>
		<?php
			get_template_part('archive', 'loop');
		else :
		?>
			<article id="post-0" class="post no-results not-found">
				<div class="entry-header">
					<h1 class="entry-title"><?php esc_html_e('Nothing Found', 'massbit'); ?></h1>
				</div><!-- /.entry-header -->
				<p><?php esc_html_e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'massbit'); ?></p>
				<?php
				get_search_form();
				?>
			</article><!-- /#post-0 -->
		<?php
		endif;
		?>
	</div>
</div>
<?php
wp_reset_postdata();

get_footer();
