<?php
/**
 * Comment Form Template
 *
 * This template is used to show the form for the comments template.
 *
 * @package Hybrid
 * @subpackage Template
 */

global $user_identity;

if ( comments_open() ) : ?>

	<div id="respond">

		<h3 id="reply" class="comments-header">
			<?php comment_form_title( __( 'Leave a Reply', 'hybrid' ), __( 'Leave a Reply to %s', 'hybrid' ), true ); ?>
		</h3>

		<p id="cancel-comment-reply">
			<?php cancel_comment_reply_link( __( 'Click here to cancel reply.', 'hybrid' ) ); ?>
		</p><!-- #cancel-comment-reply -->

	<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>

		<p class="alert">
			<?php printf( __( 'You must be <a href="%1$s" title="Log in">logged in</a> to post a comment.', 'hybrid' ), wp_login_url( get_permalink() ) ); ?>
		</p><!-- .alert -->

	<?php else : ?>

		<?php hybrid_before_comment_form(); // Before comments form hook ?>

		<form action="<?php echo site_url( 'wp-comments-post.php' ); ?>" method="post" id="commentform">

			<?php if ( is_user_logged_in() ) : ?>

				<p class="log-in-out">
					<?php printf( __( 'Logged in as <a href="%1$s" title="%2$s">%2$s</a>.', 'hybrid' ), admin_url( 'profile.php' ), $user_identity ); ?> <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e( 'Log out of this account', 'hybrid' ); ?>"><?php _e( 'Log out &raquo;', 'hybrid' ); ?></a>
				</p><!-- .log-in-out -->

			<?php else : ?>

				<?php $req = get_option( 'require_name_email' ); ?>

				<p class="form-author">
					<label for="author"><?php _e( 'Name', 'hybrid' ); ?> <?php if ( $req ) : ?><span class="required"><?php _e( '* (required)', 'hybrid' ); ?></span><?php endif; ?></label>
					<input type="text" class="text-input" name="author" id="author" value="<?php echo esc_attr( $comment_author ); ?>" size="40" tabindex="1" />
				</p><!-- .form-author -->

				<p class="form-email">
					<label for="email"><?php _e( 'Email', 'hybrid' ); ?>  <?php if ( $req ) : ?><span class="required"><?php _e( '* (required)', 'hybrid' ); ?></span><?php endif; ?></label>
					<input type="text" class="text-input" name="email" id="email" value="<?php echo esc_attr( $comment_author_email ); ?>" size="40" tabindex="2" />
				</p><!-- .form-email -->

				<p class="form-url">
					<label for="url"><?php _e( 'Website (optional)', 'hybrid' ); ?></label>
					<input type="text" class="text-input" name="url" id="url" value="<?php echo esc_url( $comment_author_url ); ?>" size="40" tabindex="3" />
				</p><!-- .form-url -->

			<?php endif; ?>

			<p class="form-textarea">
				<label for="comment"><?php _e( 'Comment', 'hybrid' ); ?></label>
				<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
			</p><!-- .form-textarea -->
			
            <div class="toby">
            test
            <?php if ( function_exists('mcsp_html') )  mcsp_html(); ?> 
            <?php do_action( 'after_comment_box' ); ?>
            </div>
            
            <div class="comment-action">
				<?php do_action( 'comment_form', $post->ID ); ?>
			</div><!-- .comment-action -->
            
            
			<p class="form-submit">
				<input class="submit-comment button" name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e( 'Submit', 'hybrid' ); ?>" />
				<input class="reset-comment button" name="reset" type="reset" id="reset" tabindex="6" value="<?php esc_attr_e( 'Reset', 'hybrid' ); ?>" />
				<?php comment_id_fields(); ?>
			</p><!-- .form-submit -->

			

		</form><!-- #commentform -->

		<?php hybrid_after_comment_form(); // After comments form hook ?>

	<?php endif; ?>

	</div><!-- #respond -->

<?php endif; ?>