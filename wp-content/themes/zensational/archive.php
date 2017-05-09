<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<section id="primary" class="content-area archive-content">
				<main id="main" class="archive-content__holder" role="main">

					<?php if ( have_posts() ) : ?>

						<div class="col-xs-12">
							<div class="page-header">
								<h1 class="page-title"><span><?php echo single_cat_title(); ?></span></h1>
							</div>
						</div>

						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() );

							// End the loop.
						endwhile;


						// Previous/next page navigation.


					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );

					endif; ?>

				</main><!-- .site-main -->
			</section><!-- .content-area -->
		</div>
	</div>

<?php get_footer(); ?>
