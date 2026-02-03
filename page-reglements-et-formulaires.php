<?php
/*
 * Template Name: Reglements et formulaires Template
 * Description: Reglements et formulaires template
 */
get_header();?>
</div>
</div>

<div class="site-inner">
<div class="site-content forms_page">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<div class="entry-content">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
		endwhile;
		?>
	<h3>Formulaires</h3>
	<ul>
		<?php


		// Get the posts associated with the media_taxonomy
		$formulaires_args = array(
			'showposts' => -1,
			'post_type' => 'attachment',
			'post_parent' => null,
			'tax_query' => array(
					array(
					'taxonomy' => 'media_category',
					'field' => 'slug',
					'terms' => 'formulaires'
					)
				),
			);

			$attachments = get_posts( $formulaires_args );
			 if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
						$d_media = wp_get_attachment_url($attachment->ID);
					   echo '<li>';
					   echo '<a href="'.$d_media.'">';
					   echo apply_filters( 'the_title', $attachment->post_title );
					   echo '</a></li>';
				  }
			 }
			?>
		</ul>
		<h3>Réglements</h3>
		<ul>
		<?php 
		// Get the posts associated with the media_taxonomy
		$reglements_args = array(
			'showposts' => -1,
			'post_type' => 'attachment',
			'post_parent' => null,
			'tax_query' => array(
					array(
					'taxonomy' => 'media_category',
					'field' => 'slug',
					'terms' => 'reglements'
					)
				),
			);

		$attachments = get_posts( $reglements_args );
			 if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
								$d_media = wp_get_attachment_url($attachment->ID);
							   echo '<li>';
							   echo '<a href="'.$d_media.'">';
							   echo apply_filters( 'the_title', $attachment->post_title );
							   echo '</a></li>';
				  }
			 }
		?>
		</ul>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>