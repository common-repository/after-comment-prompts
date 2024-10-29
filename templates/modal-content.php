<?php 
/**
 *	Default HTML markup for modals
 *
 *	@package After Comment Prompts
 *	@author Ren Ventura
 */

?>

<div id="comment-prompt-modal" style="display: none;">

	<span class="popupoverlay-close"><?php echo apply_filters( 'after_comment_prompts_close_modal', 'X' ); ?></span>

	<?php do_action( 'after_comment_prompts_before_modal_wrap' ); ?>

	<div class="comment-prompt-modal-wrap">

		<?php echo do_shortcode( $message ); ?>
		
	</div>

	<?php do_action( 'after_comment_prompts_after_modal_wrap' ); ?>	

</div>