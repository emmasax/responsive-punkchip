<?php // Do not delete these lines
	if ('wp-comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	$req = get_settings('require_name_email');
	if (($withcomments) or ($single)) {
		if (!empty($post->post_password)) { // if there's a password
			if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
?>
				<p><?php _e("Enter your password to view comments."); ?><p>
<?php
				return;
            }
        }
 		$comment_author = (isset($_COOKIE['comment_author_'.$cookiehash])) ? trim($_COOKIE['comment_author_'.$cookiehash]) : '';
        $comment_author_email = (isset($_COOKIE['comment_author_email_'.$cookiehash])) ? trim($_COOKIE['comment_author_email_'.$cookiehash]) : '';
 		$comment_author_url = (isset($_COOKIE['comment_author_url_'.$cookiehash])) ? trim($_COOKIE['comment_author_url_'.$cookiehash]) : '';
        $comments = $wpdb->get_results("SELECT * FROM $tablecomments WHERE comment_post_ID = '$id' AND comment_approved = '1' ORDER BY comment_date");
?>
<!-- You can start editing here. -->
<div id="comments" class="comments">

	<div class="container">
	
		<div class="related-comments">
		
			<?php if ( have_comments() ) { ?>
  			<h2 id="respond">Comments</h2>
				<ul class="comment-list">
					<?php wp_list_comments(); ?><!--'callback=my_comment'-->
				</ul>
			<?php } else { ?>
			  <p>No comments.</p>
			<?php } ?>
		
<?php if (comments_open( $id )) { ?> 
			<h2 id="postcomment"><?php _e("Add your comment"); ?></h2>
		
			<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post" >
				<p><label for="author"><?php _e("Name"); ?></label> 
					<?php if ($req) _e('(required)'); ?>
					<input type="text" name="author" id="author" class="textarea" value="<?php echo $comment_author; ?>" size="78" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
				</p>
				
				<p><label for="email"><?php _e("E-mail"); ?></label> <?php if ($req) _e('(required)'); ?>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="78" />
				</p>
				
				<p><label for="url"><?php _e("<abbr title=\"Uniform Resource Identifier\">URI</abbr>"); ?></label>
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="78" />
				</p>
				
				<p><label for="comment"><?php _e("Your Comment"); ?></label>
					<textarea name="comment" id="comment" cols="67" rows="6" ></textarea>
				</p>
				
				<p><button type="submit"><?php _e("Say It!"); ?></button></p>
			</form>
<?php } else { ?>
	<h2 id="postcomment">Comments are currently closed</h2>
<?php } ?>
		</div>
		
		<script>
			var address = window.location.href;
			address = address.replace(/\//g,'%2F');
			address = address.replace(/:/g,'%3A');
			var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			$.getJSON("http://search.twitter.com/search.json?q=+"+address+"&callback=?", function(data) {
				if(data.results && data.results.length > 0) {
					$('.related-comments').after('<div class="related-tweets"><h2>Tweets</h2><ul></ul></div>');
					$.each(data.results, function(i, results) {
						var result = data.results[i];
						var formattedDate = new Date(results.created_at);
						var formattedMinutes;
						if(formattedDate.getMinutes() < 10)
							formattedMinutes = '0' + formattedDate.getMinutes();
						else
							formattedMinutes = formattedDate.getMinutes();
						formattedDate = months[formattedDate.getMonth()] + ' ' + formattedDate.getDate() + ', ' + formattedDate.getFullYear() + ' at ' + formattedDate.getHours() + ':' + formattedMinutes;
						$('.related-tweets ul').append('<li><img src="'+result.profile_image_url+'" width="32" height="32" /><a href="http:\/\/twitter.com\/' + result.from_user + '">'+ result.from_user + '</a> says: <time>'+formattedDate+'</time>' +result.text+'</li>');
					});
				}
			});
			
		</script>
	</div>
</div>

<?php } ?>