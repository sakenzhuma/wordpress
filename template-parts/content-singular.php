<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class='cf'>
		<div class='fl w-100 w-30-l'>
				<header class="entry-header pr3 pt4-l">
				<?php
					the_title( '<h2 class="ma0">', '</h2>' );
					if ( 'post' === get_post_type() ) myhub_posted_on();
				?>
			</header>
		</div>
		<div class='fl w-100 w-70-l'>
			<?php myhub_post_thumbnail(); ?>
		</div>
	<div>

	<div class="entry-content pv3 cl">
		<?php
		the_content(
			sprintf(
				wp_kses(
					__( '<span class="screen-reader-text"> "%s"</span>', 'myhub' ),
					['span' => ['class' => []]]
				),
				wp_kses_post( get_the_title() )
			)
		);
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myhub' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<footer class="f6 pv2"><?php myhub_entry_footer(); ?></footer>
</article>
