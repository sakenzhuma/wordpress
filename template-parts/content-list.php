<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class='flex flex-column pv2-l'>
	<div class='cf'>
		<div class='fl w-100 w-30-l'>
			<header class="entry-header pr3">
				<?php
				the_title( '<h2 class="mb0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				if ( 'post' === get_post_type() ){
					myhub_posted_on();
				}
				?>
			</header>
		</div>
		<div class='fl w-100 w-40-l pt3 f6'>
			<?php the_excerpt(); ?>
		</div>
		<div class='fl w-100 w-30-l'><?php myhub_post_thumbnail(); ?></div>
	<div>
</div>
</article>

