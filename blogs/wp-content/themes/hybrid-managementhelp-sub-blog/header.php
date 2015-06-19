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

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<link rel="stylesheet" href="http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
<?php if (is_archive()){
	echo '<meta name="robots" content="noindex" />';
} ?>


<!-- BEGIN FEEDBURNER CODE -->
<?php
$feedburnerBusinessPlanning = 'http://feeds.feedburner.com/managementhelp/yYXB';
$feedburnerConsultingSkills = 'http://feeds.feedburner.com/ConsultingSkills';
$feedburnerBlogs = 'http://feeds.feedburner.com/FreeManagementLibraryBlogs';
$feedburnerFundraisingForNonprofits = 'http://feeds.feedburner.com/managementhelp/phPE';
$feedburnerLeadership = 'http://feeds.feedburner.com/managementhelp/THpF';
$feedburnerNonprofitCapacityBuilding = 'http://feeds.feedburner.com/NonprofitCapacityBuilding';
$feedburnerOrganizationalDevelopment = 'http://feeds.feedburner.com/OrganizationalDevelopment';
$feedburnerPersonalAndProfessionalCoaching = 'http://feeds.feedburner.com/PersonalAndProfessionalCoaching';
$feedburnerPlayground = 'http://feeds.feedburner.com/PlaygroundForFmlBlogMgrs';
$feedburnerProjectManagement = 'http://feeds.feedburner.com/managementhelp/JKex';
$feedburnerSearch = 'http://feeds.feedburner.com/ResultsOfsearchLibraryBlogs';
$feedburnerSocialEnterprise = 'http://feeds.feedburner.com/managementhelp/ffwV';
$feedburnerTrainingAndDevelopment = 'http://feeds.feedburner.com/TrainingAndDevelopment';
$feedburnerPublicAndMediaRelations = 'http://feeds.feedburner.com/PublicAndMediaRelations';
$feedburnerMarketing = 'http://feeds.feedburner.com/managementhelp/nJem';
$feedburnerHumanResources = 'http://feeds.feedburner.com/managementhelp/wmys';
$feedburnerBoardsOfDirectors = 'http://feeds.feedburner.com/BoardsOfDirectors';
$feedburnerStrategicPlanning = 'http://feeds.feedburner.com/managementhelp/TlwJ';
$feedburnerBusinessEthics = 'http://feeds.feedburner.com/managementhelp/ODEw';
$feedburnerSpirituality = 'http://feeds.feedburner.com/SpiritualityInTheWorkplace';
$feedburnerCrisisManagement = 'http://feeds.feedburner.com/managementhelp/FRPT';
$feedburnerCustomerService = 'http://feeds.feedburner.com/managementhelp/liAe';
$feedburnerTeamPerformance = 'http://feeds.feedburner.com/TeamPerformance';
$feedburnerCareerManagement = 'http://feeds.feedburner.com/managementhelp/GKgD';
$feedburnerQuality = 'http://feeds.feedburner.com/managementhelp/fmOS';
$feedburnerCommunications = 'http://feeds.feedburner.com/managementhelp/nMqR';
$feedburnerSupervision = 'http://feeds.feedburner.com/Supervision';
$feedburnerBuildingABusiness = 'http://feeds.feedburner.com/BuildingABusinessBy';
$feedburnerFacilitation = 'http://feeds.feedburner.com/managementhelp/facilitation';


global $current_blog;
$blog_id = $current_blog->blog_id;
if ($blog_id == 3){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerBusinessPlanning.'" />';
} else if ($blog_id == 4){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerConsultingSkills.'" />';
} else if ($blog_id == 5){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerLeadership.'" />';
} else if ($blog_id == 6){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerNonprofitCapacityBuilding.'" />';
} else if ($blog_id == 7){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerPersonalAndProfessionalCoaching.'" />';
} else if ($blog_id == 8){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerProjectManagement.'" />';
} else if ($blog_id == 9){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerSocialEnterprise.'" />';
} else if ($blog_id == 10){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerTeamPerformance.'" />';
} else if ($blog_id == 11){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerTrainingAndDevelopment.'" />';
} else if ($blog_id == 12){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerPublicAndMediaRelations.'" />';
} else if ($blog_id == 13){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerFundraisingForNonprofits.'" />';
} else if ($blog_id == 14){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerMarketing.'" />';
} else if ($blog_id == 15){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerHumanResources.'" />';
} else if ($blog_id == 17){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerBoardsOfDirectors.'" />';
} else if ($blog_id == 16){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerStrategicPlanning.'" />';
} else if ($blog_id == 18){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerSpirituality.'" />';
} else if ($blog_id == 19){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerCrisisManagement.'" />';
} else if ($blog_id == 20){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerBusinessEthics.'" />';
} else if ($blog_id == 21){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerCustomerService.'" />';
} else if ($blog_id == 22){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerCareerManagement.'" />';
} else if ($blog_id == 23){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerQuality.'" />';
} else if ($blog_id == 24){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerCommunications.'" />';
} else if ($blog_id == 25){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerSupervision.'" />';
} else if ($blog_id == 27){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerBuildingABusiness.'" />';
} else if ($blog_id == 28){
	echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' RSS Feed" href="'.$feedburnerFacilitation.'" />';
}else {


?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php } ?>

<!-- END FEEDBURNER CODE -->

<?php hybrid_head(); // Hybrid head hook ?>
<?php wp_head(); // WP head hook ?>

<link rel="stylesheet" href="http://managementhelp.org/blogs/wp-content/themes/hybrid-managementhelp-home-blog/custom2012.css" type="text/css" media="screen" />
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

		
        <?php 
		// INSERT TRANSLATION WIDGET HERE
		
		?>
        
        
        
        
		<!-- Begin TranslateThis Button -->
		<div id="translateThisButton" class="topLinksForSpacing">
		<?php
			if ( function_exists('translate_this_button') ) translate_this_button();
		?>
        </div>
        <!-- End TranslateThis Button -->
		
        
        

		
		
		
		<?php /*?><div id="translateThisButton" class="topLinksForSpacing"><!-- Begin TranslateThis Button -->
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
		</div><!-- End TranslateThis Button --><?php */?>
		

		<div id="libraryLink">
		<a href="/">Home</a>
		</div><!-- #libraryLink -->


		<div id="librarySearch" class="topLinksForSpacing">
                <span id="search" >
		<form method="get" action="/search/management_help_search.html">
		<input type="text" name="zoom_query" size="20" value=" Search Our Site " onFocus="this.value=''" onBlur="this.value=' Search Our Site '" style="color:#A7A7A7;border:solid #cccccc 1px;font-size:12px;" />
		<input type="hidden" value="Search Our Site" />
		</form>
                </span>
		</div><!-- #librarySearch -->


		<div id="fontResizerButtons" class="topLinksForSpacing">
        	<a href="#" class="resizeSmall" onClick="document.getElementById('sizer').className='resizeSmall';_gaq.push(['_trackEvent', 'fontSize', 'resizeSmall', window.location.pathname, 1]);return false;">A</a>
		<a href="#" class="resizeMedium" onClick="document.getElementById('sizer').className='resizeMedium';_gaq.push(['_trackEvent', 'fontSize', 'resizeMedium', window.location.pathname, 1]);return false;">A</a>
		<a href="#" class="resizeLarge" onClick="document.getElementById('sizer').className='resizeLarge';_gaq.push(['_trackEvent', 'fontSize', 'resizeLarge', window.location.pathname, 1]);return false;">A</a>
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

    <div id="navigation">
    	<div id="page-nav" class="page-nav">
        	<ul class="menu sf-menu">


            	<li class="page_item page-item-1">
                	<a href="/blogs/">Library Blog's Home</a>
                </li>
                <li>
                	<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('title'); ?> Home">This Blog's Home</a>
                </li>
                <?php
				//Get the navigation from the main blog.
				switch_to_blog(1); ?>
            		<!-- TESTING 1 --><?php wp_list_pages( array('title_li' => __('')) ); ?><!-- TESTING 2 -->
                <?php restore_current_blog(); ?>
                <li class="page_item page-item-2">
                	<a href="<?php bloginfo('url'); ?>/about/">About</a>
                </li>
                <li>
                	<a rel="nofollow" href="<?php bloginfo('url'); ?>/2011/04/07/tell-us-what-you-want/">Feedback</a>
                </li>
                <?php /*?><?php wp_list_pages('title_li='); ?><?php */?>
                <?php /*?>
            	<li class="page_item page-item-1">
                	<a href="/blogs/">Library Blog's Home</a>
                </li>
            	<li class="page_item page-item-2">
                	<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('title'); ?> Home"><?php bloginfo('title'); ?> Blog Home</a>
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
	</div><!-- #navigation -->


	<div id="container">

		<?php hybrid_before_container(); // Before container hook ?>

		<?php /*?><?php hybrid_content_wrapper( 'open' ); // Deprecated.  Will be removed later. ?><?php */?>
