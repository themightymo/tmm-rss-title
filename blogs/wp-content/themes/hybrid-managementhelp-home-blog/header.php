<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 * @package Hybrid
 * @subpackage Template
 */

hybrid_doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( 'xhtml' ); ?>>
<head profile="<?php hybrid_profile_uri(); ?>">
<title><?php hybrid_document_title(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=0, user-scalable=no, minimum-scale=1.0, maximum-scale=0">
<link rel="stylesheet" href="http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php if (is_archive()){
	echo '<meta name="robots" content="noindex" />';
} ?>

<?php hybrid_head(); // Hybrid head hook ?>
<?php wp_head(); // WP head hook ?>
<link rel="stylesheet" href="http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/custom2012.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/bootstrap.min.js"></script>
</head>

<body class="<?php hybrid_body_class(); ?>">

<?php hybrid_before_html(); // Before HTML hook ?>

<div id="body-container">

	<?php hybrid_before_header(); // Before header hook ?>

	<div id="top-links-bkg"></div>

	<div id="top-links">

		<div id="blogsLink">
		<a href="/">Library</a>
		</div><!-- #blogsLink -->

		<div id="translateThisButton" class="topLinksForSpacing">
		<!-- Begin TranslateThis Button -->
		<div id="translate-this"><a href="http://translateth.is/" class="translate-this-button">Translate</a></div>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="/js/translate-this.js"></script>
		<script type="text/javascript">
		TranslateThis({
		GA:true,
		onClick:function(){_gaq.push(['_trackEvent', 'TranslateThis', _ate.ed.target.ckv["tt-lang"], window.location.pathname]);},
		moreText : '38 More Languages &raquo;',
		ddLangs:[
		  'en',
		  'fr',
		  'de',
		  'ru',
		  'zh-CN',
		  'zh-TW',
		  'es',
		  'pl',
		  'nl',
		  'tr',
		  'it',
		  'el',
		  'ar',
		  'pt-PT',
		  'ja',
		  'ko',
		  'id',
		  'cs',
		  'vi',
		  'iw'
		]
		});
		</script>
		</div><!-- End TranslateThis Button -->

		<div id="libraryLink">
		<a href="/">Home</a>
		</div><!-- #libraryLink -->


		<div id="librarySearch" class="topLinksForSpacing">
                <span id="search" >
		<form method="get" action="/search/management_help_search.html">
		<input type="text" name="zoom_query" size="20" value=" Search Our Site " onfocus="this.value=''" onBlur="this.value=' Search Our Site '" style="color:#A7A7A7;border:solid #cccccc 1px;font-size:12px;" />
		<input type="hidden" value="Search Our Site" />
		</form>
                </span>
		</div><!-- #librarySearch -->


		<div id="fontResizerButtons" class="topLinksForSpacing">
        	<a href="#" class="resizeSmall" onclick="document.getElementById('sizer').className='resizeSmall';_gaq.push(['_trackEvent', 'fontSize', 'resizeSmall', window.location.pathname, 1]);return false;">A</a>
		<a href="#" class="resizeMedium" onclick="document.getElementById('sizer').className='resizeMedium';_gaq.push(['_trackEvent', 'fontSize', 'resizeMedium', window.location.pathname, 1]);return false;">A</a>
		<a href="#" class="resizeLarge" onclick="document.getElementById('sizer').className='resizeLarge';_gaq.push(['_trackEvent', 'fontSize', 'resizeLarge', window.location.pathname, 1]);return false;">A</a>
		</div><!-- #fontResizer -->


		<div id="addone" class="topLinksForSpacing">
		<div class="addoneButton"><g:plusone size="small" align="left" style="vertical-align:bottom;"></g:plusone></div><!-- #plusone -->
		</div><!-- #addone -->


		<div id="addThisButton" class="topLinksForSpacing">
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
		<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4dbb234049ac109b" class="addthis_button_compact">Share &raquo; </a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dbb234049ac109b"></script>
		<!-- AddThis Button END -->
		</div><!-- #addThisButton -->



		<div id="socialMediaLinks" class="topLinksForSpacing">
		<a href="http://www.facebook.com/FreeMgmtLibrary" rel="nofollow" target="_blank">
		<img src="/images/facebook-16x16.png" alt="Follow us on Facebook" border="0" height="16" width="16" /></a>
		<a href="http://www.twitter.com/FreeMgmtLibrary" rel="nofollow" target="_blank">
		<img src="/images/twitter-16x16.png" alt="Follow us on Twitter" border="0" height="16" width="16" /></a>
		<a href="http://www.linkedin.com/pub/carter-mcnamara/10/537/978"  rel="nofollow" target="_blank">
		<img src="/images/linkedin-16x16.png" alt="Follow us on LinkedIn" border="0" height="16" width="16" /></a>
		<a href="http://plus.google.com/u/0/107478865607530176190/posts"  rel="nofollow" target="_blank">
		<img src="/images/google-16x16.png" alt="Follow us on Google+" border="0" height="16" width="16" /></a>
		</div><!-- #socialMediaLinks -->

		<div id="connect">
		Connect &raquo;
		</div><!-- #connect -->



	</div>

	<div id="header-container">

		<div id="header">

			<?php hybrid_header(); // Header hook ?>

		</div><!-- #header -->

	</div><!-- #header-container -->

	<?php /*?><?php hybrid_after_header(); // After header hook ?><?php */?>

    <nav class="navbar">
    	<div id="page-nav" class="collapse navbar-collapse">
        	<ul class="menu sf-menu nav nav-pills">
            	<li class="page_item page-item-1">
                	<a href="/blogs/">Library Blog's Home</a>
                </li>
            	<?php wp_list_pages('title_li='); ?>
                <li>
                	<a rel="nofollow" href="<?php bloginfo('url'); ?>/tell-us-what-you-want/">Feedback</a>
                </li>
            	<?php /*?><li class="page_item page-item-1">
                	<a href="/blogs/">Library Blog's Home</a>
                </li>

                <li class="page_item page-item-3">
                	<a href="/blogs/about/" title="About">About</a>
                </li>
                <li class="page_item page-item-4">
                	<a href="/blogs/policies-2/" title="About">Policies</a>
                </li>
                <li class="page_item page-item-5">
                	<a href="/blogs/guest-writers/" title="About">Guest Writers</a>
                </li><?php */?>
            </ul>
        </div>
	</nav><!-- #navigation -->


	<div id="container">

		<?php hybrid_before_container(); // Before container hook ?>

		<?php /*?><?php hybrid_content_wrapper( 'open' ); // Deprecated.  Will be removed later. ?><?php */?>
