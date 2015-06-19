<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 * @package Hybrid
 * @subpackage Template
 */
?>
		<?php /*?><?php hybrid_content_wrapper( 'close' ); // Deprecated.  Will be removed later. ?><?php */?>

		<?php hybrid_after_container(); // After container hook ?>


	</div><!-- #container -->

	<div id="footer-container">

		<?php hybrid_before_footer(); // Before footer hook ?>

		<div id="footer">


            <div id="footerContents">
                <div id="footer1">
                    <p>
                    Free Management Library, &copy; Copyright Authenticity Consulting, LLC; All rights reserved<br />
                    Blog systems developed by <a target="_blank" rel="nofollow" href="http://www.themightymo.com" target="_blank">The Mighty Mo! Design Co.</a><br />
                    </p>
                </div><!-- .footer1 -->

                <div id="footer2">
                	<div class="footerItem footerProvidedBy">
                        <p>Provided by</p>
                        <a  rel="nofollow" href="http://www.authenticityconsulting.com/" target="_blank">
                        <img src="http://managementhelp.org/images/logoscolorsmall.jpg" align="middle" alt="Authenticity Consulting, LLC" border="0" height="100" width="76" /></a>
                    </div><!-- .footerItem -->

                    <div id="footerNavigation">
                    	<a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a>
						<?php
                        //Get the navigation from the main blog.
                        switch_to_blog(1); ?>
                            <?php wp_list_pages('title_li=&include=9,11,39'); ?>
                        <?php restore_current_blog(); ?>
                    </div>

                </div><!-- #footer2 -->
			</div><!-- #footerContents -->

		</div><!-- #footer -->

		<?php hybrid_after_footer(); // After footer hook ?>

	</div><!-- #footer-container -->

</div><!-- #body-container -->

<?php wp_footer(); // WordPress footer hook ?>
<?php hybrid_after_html(); // After HTML hook ?>


</body>
</html>
