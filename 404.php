<?php get_header(); ?>
<div class='container pa3'>
	<div class='cf'>
		<div class='fl w-100 w-70-l pr3-l pt4-l'>
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'myhub' ); ?></h1>
			</header>
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'myhub' ); ?></p>
			</div>
		</div>
		<div class='fl w-100 w-30-l pl3-l'>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
