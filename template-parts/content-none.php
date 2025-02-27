<section class='pt3'>
	<header class="page-header">
		<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'myhub' ); ?></h2>
	</header>
	<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :
			printf(
				'<p>' . wp_kses(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'myhub' ),
					['a' => ['href' => []]]
				) . '</p>', esc_url( admin_url( 'post-new.php' ) )
			);

			elseif ( is_search() ) :
			?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'myhub' ); ?></p>
			<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'myhub' ); ?></p>
			<?php
			endif; ?>
	</div>
</section>
