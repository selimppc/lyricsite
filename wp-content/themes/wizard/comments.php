<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to _s_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package inka
 */


if ( post_password_required() )
	return;
?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		   <div class="post-comment" id="comments_section">
		<h2 class="post-subtitle number">
			<?php
				printf( _nx( 'ONE COMMENT', 'COMMENTS %1$s', get_comments_number(), 'wizard' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wizard' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wizard' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wizard' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

	 <ul class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use _s_comment() to format the comments.
				 * If you want to override this in a child theme, then you can
				 * define _s_comment() and that will be used instead.
				 * See _s_comment() in inc/template-tags.php for more.
				 */
			 $args = array('style' => 'ol',
                                'callback'          => 'olida_comment',
                                'type'              => 'all',
                                'avatar_size'       => 80,
                                'reverse_top_level' => null
                                 );
					wp_list_comments( $args );
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wizard' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wizard' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wizard' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>
</div>
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wizard' ); ?></p>
	<?php endif; ?>
  <div class="leave-comment">
	             <?php //print_r('author: ' . $aria_req);
                       $auxchar="'";
                       if(!isset($aria_req)) $aria_req='';
		if ( !is_user_logged_in() ) {			   
                       $comment_args = array( 'title_reply'  => '<h2 class="post-subtitle">Leave a Comment</h2>',
                            'title_reply_to'=>'<h2 class="post-subtitle">Leave a Comment to %s </h2>',
                           'label_submit' => __('Submit Comment','wizard'),
                           'logged_in_as' => '',
                           'comment_notes_before' => '',
                           'id_form' => '',
                           'id_submit' => 'submit_message',
                           'fields' => apply_filters( 'comment_form_default_fields', array(
	
    'author' => '  <div class="row">
                  <div class="col-sm-4 addpadding"> <div class="box text-input"><input type="text" name="author" required  /><label>'.__("Your Name","wizard").'</label><span></span></div></div>',	
    'email'  => '  <div class="col-sm-4 addpadding"> <div class="box text-input"><input type="email"  name="email" required/> <label>'.__("Your email","wizard").'</label><span></span></div></div>', 						
	'website'    => ' <div class="col-sm-4 addpadding"> <div class="box text-input"><input  name="website" type="text" required /><label>'.__("Website","wizard").'</label><span></span></div></div></div>',			
			)),
    'comment_field' => '   <div class="box text-input textarea"><textarea name="comment" id="comments"  style="height:165px;" aria-required="true" required ></textarea><label>'.__("Your comment","wizard").'</label>
                                    <span></span>',
   'comment_notes_after' => '</div>',
);}else{
	 $comment_args = array( 'title_reply'  => '<h2 class="post-subtitle">Leave a Comment</h2>',
                            'title_reply_to'=>'<h2 class="post-subtitle">Leave a Comment to %s </h2>',
                           'label_submit' => __('Submit Comment','wizard'),
                           'logged_in_as' => '',
                           'comment_notes_before' => '',
                           'id_form' => '',
                           'id_submit' => 'submit_message',
    'comment_field' => '  <div class="box text-input textarea"><textarea name="comment" id="comments"  style="height:165px;" aria-required="true" required></textarea><label>'.__("Your comment","wizard").'</label>
                                    <span></span></div>',
    'comment_notes_after' => ''
);	
	
}
		?>

<?php comment_form($comment_args); ?>

</div>
