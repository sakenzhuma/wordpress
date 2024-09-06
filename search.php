<?php get_header(); ?>
<div class='container pa3 pb5-l'>
	<div class='cf pv3'>
		<div class='fl w-100 w-70-l pr3-l'>
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<p class="f6 b">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'myhub' ), '<span class="normal">' . get_search_query() . '</span>' );
					?>
				</p>
			</header>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
		<div class='fl w-100 w-30-l pl3-l'>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
