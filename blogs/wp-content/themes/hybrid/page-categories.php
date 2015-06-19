<?php
/**
 * Template Name: Categories
 *
 * The categories template is a page template that lists your categories along with a link 
 * to the each category's RSS feed and post count.
 * @link http://themehybrid.com/themes/hybrid/page-templates/categories
 *
 * @package Hybrid
 * @subpackage Template
 */

get_header(); ?>

	<div id="content" class="hfeed content">

		<?php hybrid_before_content(); // Before content hook ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

				<?php hybrid_before_entry(); // Before entry hook ?>

				<div class="entry-content">

					<?php the_content(); ?>

					<ul class="xoxo category-archives">
						<?php wp_list_categories( array( 'feed' => __( 'RSS', 'hybrid' ), 'show_count' => true, 'use_desc_for_title' => false, 'title_li' => false ) ); ?>
					</ul><!-- .xoxo .category-archives -->

					<?php wp_link_pages( array( 'before' => '<p class="page-links pages">' . __( 'Pages:', 'hybrid' ), 'after' => '</p>' ) ); ?>

				</div><!-- .entry-content -->

				<?php hybrid_after_entry(); // After entry hook ?>

			</div><!-- .hentry -->

			<?php hybrid_after_singular(); // After singular hook ?>

			<?php comments_template( '/comments.php', true ); ?>

			<?php endwhile; ?>

		<?php else: ?>

			<p class="no-data">
				<?php _e( 'Apologies, but no results were found.', 'hybrid' ); ?>
			</p><!-- .no-data -->

		<?php endif; ?>

		<?php hybrid_after_content(); // After content hook ?>

	</div><!-- .content .hfeed -->

<?php get_footer(); ?>