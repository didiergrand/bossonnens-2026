<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
                 					

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('thumbnail'); ?>
		<?php } else { ?>
				<img src="http://www.bossonnens.ch/wp-content/themes/twentysixteen-child/images/bossonnens_placeholder.png">
        <?php } ?><?php the_title( '<label>', '</label>' ); ?>
</a><!-- #post-## -->