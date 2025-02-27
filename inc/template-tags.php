<?php


if ( ! function_exists( 'myhub_posted_on' ) ) :
	function myhub_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		/*
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		*/

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( '%s', 'post date', 'myhub' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="f7">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'myhub_posted_by' ) ) :
	function myhub_posted_by() {
		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'myhub' ),
			'<span class="author vcard"><a class="url fn n" href="' .
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .
			esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="f6"> ' . $byline . '</span>';
	}
endif;

if ( ! function_exists( 'myhub_entry_footer' ) ) :

	function myhub_entry_footer() {
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ', ', 'myhub' ) );
			if ( $categories_list ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'myhub' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'myhub' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'myhub' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span>';
			comments_popup_link(
				sprintf(
					wp_kses(
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'myhub' ),
						array('span' => array('class' => array()))
					), wp_kses_post(get_the_title()))
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					__( 'Edit <span class="screen-reader-text">%s</span>', 'myhub' ),
					array('span' => array('class' => array()))
				),
				wp_kses_post( get_the_title() )
			),'<span class="edit-link">','</span>');
	}
endif;

if ( ! function_exists( 'myhub_post_thumbnail' ) ) :
	function myhub_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(['echo' => false])
						)
					);
				?>
			</a>

			<?php
		endif;
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
