<?php if ( post_password_required() ) return; ?>

<div>
	<?php
	if ( have_comments() ) :
		?>
		<p class="f6 cf pv2">
			<?php
			$myhub_comment_count = get_comments_number();
			if ( '1' === $myhub_comment_count ) {
				printf(
					esc_html__( '--- One thought on &ldquo;%1$s&rdquo; ---', 'myhub' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $myhub_comment_count, 'comments title', 'myhub' ) ),
					number_format_i18n( $myhub_comment_count ),
					'<span class="f7">' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</p>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php
		the_comments_navigation();
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'myhub' ); ?></p>
			<?php
		endif;

	endif;
	comment_form();
	?>
</div>
