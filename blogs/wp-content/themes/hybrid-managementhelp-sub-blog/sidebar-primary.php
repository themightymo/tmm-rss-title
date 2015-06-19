<?php
/**
 * Primary Aside Template
 *
 * The Primary Aside template houses the HTML used for the 'Primary' widget area.
 * It will first check if the widget area is active before displaying anything.
 * @link http://themehybrid.com/themes/hybrid/widget-areas
 *
 * @package Hybrid
 * @subpackage Template
 */

if ( is_sidebar_active( 'primary' ) ) : ?>

	<div id="primary" class="sidebar aside">

		<?php hybrid_before_primary(); // Before Primary hook ?>

		<div id="hybrid-search-2" class="widget search widget-search"><div class="widget-inside"><form method="get" class="search-form" id="search-form" action="<?php echo get_bloginfo('url'); ?>"><div><input class="search-text" type="text" name="s" id="search-text" value="Search This Blog" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"></div></form><!-- .search-form --></div></div>
        
		<?php dynamic_sidebar( 'primary' ); ?>

		<?php hybrid_after_primary(); // After Primary hook ?>

	</div><!-- #primary .aside -->

<?php endif; ?>