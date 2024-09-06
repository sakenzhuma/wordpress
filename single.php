<?php get_header(); ?>

<div class='container pa3'>
	<div class='cf'>
	<div class='fl w-100 w-70-l pr3-l'>
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'myhub' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'myhub' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
	</div>
		<div class='fl w-100 w-30-l pl3-l'>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
