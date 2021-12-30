<?php

/**
 * The template for displaying "not found" content in the Blog Archives.
 */

$search_enabled = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>
<div class="mb-page-none">
	<div class="container">
		<article id="post-0" class="post no-results not-found">
			<div class="entry-header">
				<h1 class="entry-title"><?php esc_html_e('Nothing Found', 'massbit'); ?></h1>
			</div><!-- /.entry-header -->
			<div class="entry-content">
				<p><?php esc_html_e('Apologies, but no results were found for the requested archive.', 'massbit'); ?></p>
				<?php
				if ('1' === $search_enabled) :
					get_search_form();
				endif;
				?>
			</div><!-- /.entry-content -->
		</article><!-- /#post-0 -->
	</div>
</div>