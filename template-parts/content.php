<?php
/**
 *
 */
?>
<article <?php post_class('content');?> id="post-<?php the_ID();?>">
    <?php if ( !is_singular() ) {
	the_title(sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink())), '</a></h1>');
    }

    if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
	    the_excerpt();
    } else {
	    the_content( __( 'Continue reading', 'supervegeta' ) );
    }
    ?>
</article>
