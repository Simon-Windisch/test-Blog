<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>



<!-- You can start editing here. -->

<!-- If comments are openened. -->
<?php if ('open' == $post->comment_status) : ?>

	<div id="komment-top">

	
	<!-- If the option comment registration is on and not logged in. -->
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<div class="registrieren">
				<p><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">Anmelden </a> oder   <?php wp_register('', ''); ?>  um Kommentare zu schreiben.</p>
			</div>
			
			<div class="komment-number">
				<?php comments_number('Keine Kommentare', '1 Kommentar', '% Kommentare' );?>
			</div>
		
		</div>

	<?php else : ?>

			<?php if ( $user_ID ) : ?>
				<div class="registrieren">
					Eingeloggt als <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> &#124 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout">Logout</a>
				</div>	
			<?php endif; ?>

			<div class="komment-number">
				<?php comments_number('Keine Kommentare', '1 Kommentar', '% Kommentare' );?>
			</div>

		</div>


		<!-- ElseIf logged and post comment. -->
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<div class="formbg">	
 					
		<?php if ( !$user_ID ) : ?>
	
			<p>Kommentar hinterlassen</p>
			<input type="text" onblur="this.value=(this.value=='') ? 'Name *' : this.value;" onfocus="this.value=(this.value=='Name *') ? '' : this.value;" name="author" id="author" value="Name *" size="40" tabindex="1" />
			
			<input type="text" onblur="this.value=(this.value=='') ? 'Email *' : this.value;" onfocus="this.value=(this.value=='Email *') ? '' : this.value;" name="email" id="email" value="Email *" size="40" tabindex="2" />
			
	<?php endif; ?>
	
			
			<textarea  onblur="this.value=(this.value=='') ? 'Nachricht *' : this.value;" onfocus="this.value=(this.value=='Nachricht *') ? '' : this.value;" name="comment" id="comment" cols="60" rows="10" tabindex="3">Nachricht *</textarea>
			</div>
			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar absenden" class="butonsub"/>
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
	
		<?php do_action('comment_form', $post->ID); ?>
	
		</form>

	<?php endif; // If registration required and not logged in ?>



<?php endif; // if you delete this the sky will fall on your head ?>








<?php if ($comments) : ?>
	

	<ol class="commentlist">
		<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			

			<div class="kommentare">

				<div class="commentmetadata">
					

					<div class="top-komment">
						<span class="komDate"><?php comment_date('d.m.Y') ?> von <?php comment_author_link() ?></span>
						


						<span class="komNumber"><a href="#"><?php commentCount(); ?></a></span>
					</div>

					<div class="avatar">
						<?php echo get_avatar( $comment, $size = '50', $default = '' ); ?>
					</div>
					
					<div class="text">
						<?php if ($comment->comment_approved == '0') : ?>
							<em><?php _e('Der Kommentar wird von einem Moderator überprüft.'); ?></em>
					    <?php endif; ?>
						<?php comment_text() ?>
						

						<?php edit_comment_link('Edit',' &#124; ',''); ?>
						<div class="clear"></div>
						<!--<a href="#" class="report">&gt;Verstoß melden</a>-->
					</div>
					<div class="clear"></div>					
					
	 				
				</div>


			</div>
		</li>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
	</ol>






<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
		<?php else : // comments are closed ?>
	
		<!-- If comments are closed. -->
		<p class="nocomments">Kommentare sind geschlossen.</p>
	
	<?php endif; ?>


<?php endif; ?> <!-- end if comments -->







