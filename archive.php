<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

get_header();
?>

<main id="primary" class="site-main">
	<header class="container-fluid cover--small mb-5">
		<div class="container-fluid cover-wrapper">
			<span class="container item">
				<h1 class="cover-title animated fadeIn"><?php the_archive_title(); ?></h1>
			</span>
		</div>
	</header>
	<?php if ( have_posts() ) : ?>
	<div class="container py-5">
		<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'loop' );

			endwhile;

			 the_posts_pagination(array(

				'prev_text' => '<span>Anterior</span>',
				'next_text' => '<span>Siguiente</span>'
			  
			  )); 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();