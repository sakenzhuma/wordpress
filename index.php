<?php get_header(); ?>
<div class='container pa3'>
	<div class='cf'>
		<div class='fl w-100 w-70-l pr3-l'>
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
				<header><h1><?php single_post_title(); ?></h1></header>
				<?php
			endif;

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
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
