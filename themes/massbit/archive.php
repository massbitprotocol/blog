<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<div class="page-header">
	<h1 class="page-title mb-5">
		<?php
			if ( is_day() ) :
				printf( esc_html__( 'Daily Archives: %s', 'massbit' ), get_the_date() );
			elseif ( is_month() ) :
				printf( esc_html__( 'Monthly Archives: %s', 'massbit' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'massbit' ) ) );
			elseif ( is_year() ) :
				printf( esc_html__( 'Yearly Archives: %s', 'massbit' ), get_the_date( _x( 'Y', 'yearly archives date format', 'massbit' ) ) );
			else :
				esc_html_e( 'Blog Archives', 'massbit' );
			endif;
		?>
	</h1>
</div>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.

get_footer();
