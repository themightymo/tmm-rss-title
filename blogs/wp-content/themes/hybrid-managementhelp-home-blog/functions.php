<?php
//Actions
	//add_action( 'hybrid_head', 'custom_stylesheet' );
	add_action( 'hybrid_before_primary', 'add_list_all_widget' );
	add_action( 'hybrid_before_entry', 'add_google_ad' );
	add_action( 'hybrid_before_entry', 'add_sizer_opening_div' );
	add_action( 'hybrid_after_entry', 'add_sizer_closing_div' );
	add_action( 'hybrid_before_footer', 'add_google_ad2' );
	add_action( 'hybrid_after_html', 'google_analytics' );


//Filters
	add_filter( 'hybrid_site_description', 'remove_tagline');
	add_filter( 'hybrid_site_title', 'my_title');
	add_filter( 'breadcrumb_trail', 'disable_breadcrumb_trail' );
	add_filter( 'hybrid_byline', 'my_byline' );
	add_filter('the_generator','remove_wordpress_generators');








//Functions

function google_analytics () {
	echo "
	<script type='text/javascript'>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5308613-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	";
}

function remove_wordpress_generators() { return ''; }

function my_byline( $byline ) {
	global $post;

	if ( 'post' == $post->post_type )
		$byline = '<p class="byline">By <a href="'. get_the_author_meta('url') . '">' . get_the_author() . '</a></p>';

	return $byline;
	
}

function add_google_ad2 () { ?>
	<!-- GOOGLE AD -->
    <div class="footerGoogleAd">
		<script type="text/javascript"><!--
        google_ad_client = "pub-9488528525256599";
        /* 728x90, created 7/3/10 */
        google_ad_slot = "2635044401";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
        </script>
        <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div><!-- .footerGoogleAd -->
    <?php
}

function add_list_all_widget(){
	?>
	<div id="list-all-blogs" class="widget widget_list_all_blogs widget-widget_list_all_blogs">
    	<div class="widget-inside"><h3 class="widget-title">Library's Blogs</h3>
        	<ul>
				<?php listem($blog_limit='', $name_or_url='name', $begin_wrap='<li>', $end_wrap='</li>', $order_by='alpha') ?>
            </ul>
        </div><!-- .widget-inside -->
    </div><!-- #list-all-blogs -->
    <?php
}




function disable_breadcrumb_trail( $trail ) {
	return false;
	}

function add_sizer_opening_div(){
	echo '<div id="sizer">';
	}
function add_sizer_closing_div(){
	echo '</div><!-- #sizer -->';
	}

function my_title(){
	echo  '<h1 id="site-title"><a href="'.get_bloginfo('url').'/">Blog: '.get_bloginfo('title').'</a></h1>'  ;
}

function remove_tagline(){
	echo '';
}

function add_google_ad(){?>
    <div class="googleAd">
		<script type="text/javascript"><!--
		google_ad_client = "pub-9488528525256599";
		/* 200x200, blog Google ads */
		google_ad_slot = "5725486699";
		google_ad_width = 200;
		google_ad_height = 200;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
    </div><!-- .googleAd -->
<?php
}



function custom_stylesheet(){
	$getCustomStylesheet = 'http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/custom.css';
	echo '<link rel="stylesheet" href="'.$getCustomStylesheet.'" />';
}

/*if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Translate This',
		'id' => 'translatethis',
		'description' => 'Displays in the header',
		'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s"><div class="widget-inside">',
		'after_widget' => '</div><!-- .widget-inside --></div><!-- .widget-wrapper -->',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));*/

add_filter( 'hybrid_entry_meta', 'my_entry_meta' );

function my_entry_meta( $meta ) {

	if ( 'post' == get_post_type() )
		$meta = '';

	return $meta;
}

//Add nofollow on widgets and sidebar
add_filter( 'wp_nav_menu_objects', 'menu_rel_nofollow', 10, 2 );
function menu_rel_nofollow( $items, $args ) {
  foreach ($items as $item) {
    $item->xfn = 'nofollow';
  }
  return $items;
}

add_filter('widget_text', 'text_rel_nofollow');
function text_rel_nofollow($content) {
  return stripslashes(wp_rel_nofollow($content));
}
?>
