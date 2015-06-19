<?php

//Actions
	//add_action( 'hybrid_head', 'custom_stylesheet' );
	add_action( 'hybrid_before_entry', 'add_google_ad' );
	add_action( 'hybrid_after_primary', 'add_list_all_widget' );
	add_action( 'hybrid_before_entry', 'add_sizer_opening_div' );
	add_action( 'hybrid_after_entry', 'add_sizer_closing_div' );
	add_action( 'hybrid_before_footer', 'add_google_ad2' );
	add_action( 'hybrid_after_html', 'google_analytics' );
	//add_action( 'hybrid_after_html', 'add_cookies' );
	add_action( 'hybrid_before_content' , 'add_edit_link' );
	add_theme_support( 'menus' );
	

//Filters
	add_filter( 'hybrid_site_description', 'remove_tagline');
	add_filter( 'hybrid_site_title', 'my_title');
	add_filter( 'breadcrumb_trail', 'disable_breadcrumb_trail' );
	add_filter( 'hybrid_byline', 'my_byline' );
	add_filter('the_generator','remove_wordpress_generators');
	add_filter('hybrid_entry_title', 'remove_h1_from_entry_title');
	


//Functions

function remove_h1_from_entry_title( $entrytitle ) {
	global $post;

	if ( 'post' == $post->post_type )
		$entrytitle = '<h2 class="post-title entry-title"><a href="'. get_permalink() .'" title="'. get_the_title() .'" rel="bookmark">'. get_the_title() .'</a></h2>';

	return $entrytitle;
}


add_action( 'comment_form_top', 'add_math_to_comments' );

function add_math_to_comments () {
	do_action ('after_comment_box');
	//echo 'hello';
}


add_action( 'hybrid_before_entry', 'toby_add_share_this', 100 );

function toby_add_share_this () { ?>
	<div id="share-this-container"><span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_email_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_fblike_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span><span class='st_plusone_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span></div>
    <?php
}


function add_edit_link() {
	edit_post_link();
}

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

function my_byline( $byline ) {
	global $post;

	if ( 'post' == $post->post_type )
		$byline = '<p class="byline">By <a href="'. get_the_author_meta('url') . '">' . get_the_author() . '</a> on [entry-published] [entry-edit-link before=" | "]</p>';

	return $byline;
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
function my_title(){
	echo  '<h1 id="site-title"><a href="'.get_bloginfo('url').'/">Blog: '.get_bloginfo('title').'</a></h1>'  ;
}

function remove_tagline(){
	echo '';
}

function add_google_ad(){?>
	<?php /*?><?php $newest_post_id = $posts[0]->ID; ?>
	<?php if(the_ID == $newest_post_id) {
    echo 'yes';
    } else {
    echo 'no';<?php */?>
    <?php

	//If this is the home page, then only show the Google ad 1 time.
	if (is_home()){
		global $post;
		$latest_posts = get_posts('numberposts=1');
		foreach($latest_posts as $latest) {
			echo '';
		}

		if ($post->ID == $latest->ID) {
		?>


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
		}else{
			//do nothing
		}
	}else{
		//If this is any other page, just display the Google Ad.
		?>
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


function add_cookies () {
	global $current_blog;
	$blog_id = $current_blog->blog_id;
	if ($blog_id == 3){
		include ('http://managementhelp.org/bizo-tags/businessplanning.txt');
	} else if ($blog_id == 4){
		include ('http://managementhelp.org/bizo-tags/consultants.txt');
	} else if ($blog_id == 5){
		include ('http://managementhelp.org/bizo-tags/leadership.txt');
	} else if ($blog_id == 6){
		include ('http://managementhelp.org/bizo-tags/nonprofit.txt');
	} else if ($blog_id == 7){
		include ('http://managementhelp.org/bizo-tags/leadership.txt');
	} else if ($blog_id == 8){
		include ('http://managementhelp.org/bizo-tags/projectmanagement.txt');
	} else if ($blog_id == 9){
		include ('http://managementhelp.org/bizo-tags/nonprofit.txt');
	} else if ($blog_id == 10){
		include ('http://managementhelp.org/bizo-tags/teambuilding.txt');
	} else if ($blog_id == 11){
		include ('http://managementhelp.org/bizo-tags/education.txt');
	} else if ($blog_id == 12){
		include ('http://managementhelp.org/bizo-tags/marketing.txt');
	} else if ($blog_id == 13){
		include ('http://managementhelp.org/bizo-tags/nonprofit.txt');
	} else if ($blog_id == 14){
		include ('http://managementhelp.org/bizo-tags/marketing.txt');
	} else if ($blog_id == 15){
		include ('http://managementhelp.org/bizo-tags/hr.txt');
	} else if ($blog_id == 17){
		include ('http://managementhelp.org/bizo-tags/boards.txt');
	} else if ($blog_id == 16){
		include ('http://managementhelp.org/bizo-tags/strategicplanning.txt');
	} else if ($blog_id == 18){
		echo '';
	} else if ($blog_id == 19){
		include ('http://managementhelp.org/bizo-tags/insurance.txt');
	} else if ($blog_id == 20){
		echo '';
	} else if ($blog_id == 21){
		include ('http://managementhelp.org/bizo-tags/sales.txt');
	} else if ($blog_id == 22){
		include ('http://managementhelp.org/bizo-tags/hr.txt');
	} else if ($blog_id == 23){
		include ('http://managementhelp.org/bizo-tags/operations.txt');
	} else if ($blog_id == 24) {
		include ('http://managementhelp.org/bizo-tags/businessservices.txt');
	}
}

add_filter( 'hybrid_entry_meta', 'mgmt_entry_meta', 10, 1 );
function mgmt_entry_meta() {
	echo '';
}


// Add "nofollow" attribute to the Bookmarks widget
//add_filter( 'wp_list_bookmarks', 'my_list_bookmarks' );

function my_list_bookmarks( $bookmarks ) {

	$bookmarks = preg_replace( "/rel=\"(.*?)\"/", 'rel="$1 no-follow"', $bookmarks, 1, $count );

	if ( empty( $count ) )
		$bookmarks = preg_replace( "/<a(.*?)>/", '<a rel="no-follow" $1>', $bookmarks, 1 );

	return $bookmarks;
}

function nofollow_my_bookmarks( $links ) {
	foreach($links as $link) {
		$link->link_rel .= ' nofollow'; $link->link_rel = trim($link->link_rel);
	} return $links;
}
add_filter('get_bookmarks', 'nofollow_my_bookmarks');


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
	
	
add_filter('the_title_rss', 'custom_feed_title');

function custom_feed_title($title) {

    $post_id = get_queried_object_id();
    $post_author_id = get_post_field( 'post_author', $post_id );
    $headline = ' by ' . get_the_author($post_id) . get_the_author_meta('nickname', $post_author_id);

    if (!empty($headline)) {
        return $title;
	} else {
    	return $title;
	}
}