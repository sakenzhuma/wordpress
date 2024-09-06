<?php
	$post_type = is_singular() ? 'singular' : 'list';
	get_template_part('template-parts/content', $post_type);



