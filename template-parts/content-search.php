<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( 'post' === get_post_type() ) : ?>
<div class='cf'>
<div class='fl w-100 w-30-l'>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php myhub_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>
</div>
<div class='fl w-100 w-40-l'>
	<div class="f6 pt3"><?php the_excerpt(); ?></div>
</div>
<div class='fl w-100 w-30-l'>
	<?php myhub_post_thumbnail(); ?>
</div>
</div>
<?php else: ?>
<div class='fx-col'>
	<?php the_title( sprintf( '<h2 class="ma0 mt3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<div class="f6"><?php the_excerpt(); ?></div>
</div>
<?php endif; ?>
</article><!-- <?php the_ID(); ?> -->
