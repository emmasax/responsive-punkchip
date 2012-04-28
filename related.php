<aside>
	<?php if(!is_page()) : ?>
		<section class="pagination">
	
			<ul class="crumbs">
				<?php next_post('<li>Next: %</li>', '', 'yes'); ?>
				<?php previous_post('<li>Previous post: %', ' ', 'yes'); ?>
			</ul>
			<!--<?php $category = get_the_category();  
				$catName = $category[0]->cat_name;
				$catId = $category[0]->cat_ID;
			?>
			<h3>More posts in the <?php echo $catName ?> category</h3>
			<ul class="more-posts">
				<?php $posts = get_posts('numberposts=5&offset=1&category=' . $catId); foreach ($posts as $post) : ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
				<?php endforeach; ?>
			</ul>
			<script>--><!--
			google_ad_client = "pub-9667284889613766";
			/* 234x60, created 22/05/10 */
			google_ad_slot = "6496443963";
			google_ad_width = 234;
			google_ad_height = 60;
			//--><!--
			</script>
			<script src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>-->

			<ul class="networking">
				<li><a href="http://www.twitter.com/emmasax" title="Emma on Twitter"><img src="http://www.punkchip.com/cv/image/twitter.png" alt="twitter/emmasax" /></a></li>
				<li><a href="mailto:emma@punkchip.com" title="Contact Emma"><img src="http://www.punkchip.com/cv/image/email.png" alt="Contact me" /></a></li>
				<li><a href="http://www.linkedin.com/pub/emma-sax/3/618/490" title="Emma Sax on Linkedin"><img src="http://www.punkchip.com/cv/image/linkedin.png" alt="Emma Sax on Linkedin" /></a></li>
				<li><a href="/cv" title="Emma Sax's CV"><img src="http://www.punkchip.com/cv/image/favicon.png" alt="Emma Sax - CV" /></a></li>
			</ul>
		</section>
	<?php endif; ?>

<section>
<h3>A new website dedicated to WAI-ARIA</h3>
<p>A new site from punkchip.com - updated regularly with the latest articles and links from the best in the industry.</p>
<p><a href="http://wai-aria.punkchip.com/">View WAI-ARIA: Information &amp; examples</a></p>
</section>

	<section class="most-viewed">
		<h3>Most viewed</h3>
		<ul>
			<li><a href="http://www.punkchip.com/2011/03/why-support-javascript-disabled/">Why we should support users with no Javascript</a></li>
			<li><a href="http://www.punkchip.com/2010/05/javascript-shorthand/">Javascript shorthand for cleaner code</a></li>
			<li><a href="http://www.punkchip.com/2011/01/html-5-session-local-web-storage/">Maintaining the user journey with HTML 5 web storage</a></li>
			<li><a href="http://www.punkchip.com/2009/04/autoplay-is-bad-for-all-users/">Autoplay is bad for all users</a></li>
			<li><a href="http://www.punkchip.com/2007/02/css-deprecated-attributes-1/">CSS for deprecated HTML attributes: Part 1 of 3</a></li>
			<li><a href="http://www.punkchip.com/2010/12/javascript-efficiency/">Front-end developer essentials – 5 tips for efficient jQuery</a></li>
			<li><a href="http://www.punkchip.com/2010/05/jquery-accessible-search-toggle/">JavaScript: Accessible search toggle</a></li>
			<li><a href="http://www.punkchip.com/2010/11/aria-basic-findings/">WAI-ARIA states and properties: Practical examples</a></li>
			<li><a href="http://www.punkchip.com/2010/08/the-accesskey-attribute/">The accesskey attribute – do we still need it?</a></li>
			<li><a href="http://www.punkchip.com/2011/02/css3-buttons/">Styling buttons to look like images with CSS3</a></li>
		</ul>
	</section>
	
	<!--section class="twitter">
		<h3>Latest tweets</h3>
	
		<script>
			$.getJSON("http://twitter.com/status/user_timeline/emmasax.json?count=5&callback=?", function(data) {
				
				$('.twitter h3').after('<ul></ul>');
				$.each(data, function(i) {
					var url = "http://www.twitter.com/emmasax/status/" + data[i].id;
					var replyUrl = "http://twitter.com/?status=@emmasax&in_reply_to_status_id="+data[i].id+"&in_reply_to=emmasax";
					$('.twitter ul').append('<li>'+data[i].text+' <a href="'+url+'" class="status">#</a> <a href="'+replyUrl+'" class="reply">Reply</a></li>');
				});
				
			});
		</script>
		
		<p><a href="http://www.twitter.com/emmasax">View all tweets</a></p>
		
	</section-->
</aside>